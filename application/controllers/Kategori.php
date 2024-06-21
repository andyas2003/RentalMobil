<?php
use PhpParser\Node\Stmt\Else_;

defined('BASEPATH') or exit('No direct script access allowed');
class kategori extends CI_Controller
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
        $data['kategori'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('kategori/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('kategori/formAdd');
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }

        $namaMobil = $this->input->post('namaMobil');
        $harga24jam = $this->input->post('harga24jam');
        $harga12jam = $this->input->post('harga12jam');
        $harga6jam = $this->input->post('harga6jam');

        // Upload configuration
        $config['upload_path'] = './assets/img/mobil';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data_file = $this->upload->data();

            $data = array(
                'namaMobil' => $namaMobil,
                'foto' => $data_file['file_name'],
                'harga24jam' => $harga24jam,
                'harga12jam' => $harga12jam,
                'harga6jam' => $harga6jam
            );

            // Assuming 'Madmin' is the model and 'insert' is the method to insert data into 'tbl_mobil'
            $this->Madmin->insert('tbl_mobil', $data);

            // Set success message
            $this->session->set_flashdata('success_message', 'Data added successfully!');
            redirect('kategori');
        } else {
            // Set error message if file upload fails
            $this->session->set_flashdata('error_message', 'Failed to upload image!');
            redirect('kategori/add');
        }
    }



    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $dataWhere = array('idMobil' => $id);
        $data['kategori'] = $this->Madmin->get_by_id('tbl_mobil', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
    
        $id = $this->input->post('id');
        $namaMobil = $this->input->post('namaMobil');
        $harga24jam = $this->input->post('harga24jam');
        $harga12jam = $this->input->post('harga12jam');
        $harga6jam = $this->input->post('harga6jam');
    
        // Check if a file was uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/img/mobil';
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
                redirect('kategori');
            }
        } else {
            // No file uploaded, use existing photo value
            $foto = $this->input->post('foto');
        }
    
        // Prepare data for update
        $dataUpdate = array(
            'namaMobil' => $namaMobil,
            'foto' => $foto,
            'harga24jam' => $harga24jam,
            'harga12jam' => $harga12jam,
            'harga6jam' => $harga6jam
        );
    
        // Update data in database
        $this->Madmin->update('tbl_mobil', $dataUpdate, 'idMobil', $id);
    
        // Set flash message and redirect
        $this->session->set_flashdata('success', 'Data changed successfully!');
        redirect('kategori');
    }
    


    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $this->Madmin->delete('tbl_mobil', 'idMobil', $id);
        $this->session->set_flashdata('success_message', 'Data deleted successfully');
        redirect('kategori');
    }
}

