<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Madmin');
        $this->load->library('session'); // Ensure session library is loaded
    }

    public function index(){
        $this->load->view('crud/login');
    }

    public function dashboard(){
        if(empty($this->session->userdata('username'))){
            redirect('home');
        }
        $dataMobil['kategori'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $dataDriver['driver'] = $this->Madmin->get_all_data('tbl_driver')->result();
        $dataPariwisata['pariwisata'] = $this->Madmin->get_all_data('tbl_pariwisata')->result();
        $this->load->view('layout/menu');
        $this->load->view('layout/header');
        $this->load->view('car/mobil', $dataMobil);
        $this->load->view('car/driver', $dataDriver);
        $this->load->view('paket/pariwisata', $dataPariwisata);
        $this->load->view('layout/footer');
    }

    public function register(){
        $namaKonsumen = $this->input->post('namaKonsumen');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $data = array(
            'namaKonsumen' => $namaKonsumen,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'tlpn' => $tlpn,
            'alamat' => $alamat
        );
        $this->Madmin->insert('tbl_user', $data);
        $this->session->set_flashdata('success', 'Pendaftaran Berhasil. Silakan Login !!');
        redirect('home');
    }

    public function login(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $cek = $this->Madmin->cek_login($u, $p)->row();
    
        if($cek){
            $data_session = array(
                'idKonsumen' => $cek->idKonsumen,
                'username' => $u,
                'namaKonsumen' => $cek->namaKonsumen
            );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('success', 'Login berhasil!');
            redirect('home/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password Salah !!');
            redirect('home');
        }
    }
    

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
?>
