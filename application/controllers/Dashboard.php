<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Madmin');
    }
    public function index(){
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
    public function login(){
        $this->load->view('crud/login');
    }
    public function register(){
        $this->load->view('crud/register');
    }
}
?>