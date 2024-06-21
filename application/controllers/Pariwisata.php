<?php
use PhpParser\Node\Stmt\Else_;
defined('BASEPATH') or exit('No direct script access allowed');
class pariwisata extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $data['pariwisata'] = $this->Madmin->get_all_data('tbl_pariwisata')->result();
        
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('pariwisata/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('pariwisata/formAdd');
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }

        $namaPariwisata = $this->input->post('namaPariwisata');
        $deskripsi = $this->input->post('deskripsi');

        // Upload configuration
        $config['upload_path'] = './assets/img/pariwisata';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data_file = $this->upload->data();

            $data = array(
                'namaPariwisata' => $namaPariwisata,
                'foto' => $data_file['file_name'],
                'deskripsi' => $deskripsi
            );

            // Assuming 'Madmin' is the model and 'insert' is the method to insert data into 'tbl_mobil'
            $this->Madmin->insert('tbl_pariwisata', $data);

            // Set success message
            $this->session->set_flashdata('success_message', 'Data added successfully!');
            redirect('pariwisata');
        } else {
            // Set error message if file upload fails
            $this->session->set_flashdata('error_message', 'Failed to upload image!');
            redirect('pariwisata/add');
        }
    }



    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $dataWhere = array('idPariwisata' => $id);
        $data['pariwisata'] = $this->Madmin->get_by_id('tbl_pariwisata', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('pariwisata/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
    
        $id = $this->input->post('id');
        $namaPariwisata = $this->input->post('namaPariwisata');
        $deskripsi = $this->input->post('deskripsi');
    
        // Check if a file was uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/img/pariwisata';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $foto = $uploadData['file_name'];
            } else {
                // Handle upload failure
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('pariwisata');
            }
        } else {
            // No file uploaded, use existing photo value
            $foto = $this->input->post('foto');
        }
    
        // Prepare data for update
        $dataUpdate = array(
            'namaPariwisata' => $namaPariwisata,
            'foto' => $foto,
            'deskripsi' => $deskripsi

        );
    
        // Update data in database
        $this->Madmin->update('tbl_pariwisata', $dataUpdate, 'idPariwisata', $id);
    
        // Set flash message and redirect
        $this->session->set_flashdata('success', 'Data changed successfully!');
        redirect('pariwisata');
    }
    


    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $this->Madmin->delete('tbl_pariwisata', 'idPariwisata', $id);
        $this->session->set_flashdata('success_message', 'Data deleted successfully');
        redirect('pariwisata');
    }
}

