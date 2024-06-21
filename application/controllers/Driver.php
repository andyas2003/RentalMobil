<?php
use PhpParser\Node\Stmt\Else_;

defined('BASEPATH') or exit('No direct script access allowed');
class driver extends CI_Controller
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
        $data['driver'] = $this->Madmin->get_all_data('tbl_driver')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('driver/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('driver/formAdd');
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }

        $namaDriver = $this->input->post('namaDriver');

        // Upload configuration
        $config['upload_path'] = './assets/img/driver';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data_file = $this->upload->data();

            $data = array(
                'namaDriver' => $namaDriver,
                'foto' => $data_file['file_name']
            );

            // Assuming 'Madmin' is the model and 'insert' is the method to insert data into 'tbl_mobil'
            $this->Madmin->insert('tbl_driver', $data);

            // Set success message
            $this->session->set_flashdata('success_message', 'Data added successfully!');
            redirect('driver');
        } else {
            // Set error message if file upload fails
            $this->session->set_flashdata('error_message', 'Failed to upload image!');
            redirect('driver/add');
        }
    }



    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $dataWhere = array('idDriver' => $id);
        $data['driver'] = $this->Madmin->get_by_id('tbl_driver', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('driver/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
    
        $id = $this->input->post('id');
        $namaDriver = $this->input->post('namaDriver');
    
        // Check if a file was uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/img/driver';
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
                redirect('driver');
            }
        } else {
            // No file uploaded, use existing photo value
            $foto = $this->input->post('foto');
        }
    
        // Prepare data for update
        $dataUpdate = array(
            'namaDriver' => $namaDriver,
            'foto' => $foto
        );
    
        // Update data in database
        $this->Madmin->update('tbl_driver', $dataUpdate, 'idDriver', $id);
    
        // Set flash message and redirect
        $this->session->set_flashdata('success', 'Data changed successfully!');
        redirect('driver');
    }
    


    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $this->Madmin->delete('tbl_driver', 'idDriver', $id);
        $this->session->set_flashdata('success_message', 'Data deleted successfully');
        redirect('driver');
    }
}

