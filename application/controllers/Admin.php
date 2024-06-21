<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Madmin');
	}

	public function index(){
		$this->load->view('admin/login');
	}

	public function dashboard(){
		if(empty($this->session->userdata('userName'))){
			redirect('admin');
		}
		$data['admin'] = $this->Madmin->get_all_data('tbl_admin')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/top_menu', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
		}
		public function login(){
			$this->load->model('Madmin');
			
			$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Please enter your username !'));
			$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Please enter your password !'));
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
				$this->load->view('admin/login', $data);
			} else {
				$u = $this->input->post('username');
				$p = $this->input->post('password');
				$cek = $this->Madmin->cek_login_admin($u, $p)->num_rows();
				if($cek == 1){
					$data_session = array(
						'userName' => $u,
						'status' => 'login'
					);
					$this->session->set_userdata($data_session);
					$this->session->set_flashdata('success', 'Login successful'); // Set pesan success menggunakan session flashdata
					redirect('admin/dashboard');
				} else {
					// Jika data login tidak cocok, set pesan error menggunakan session flashdata dan redirect kembali ke halaman login
					$this->session->set_flashdata('error', 'Incorrect username and password !'); // Set pesan error menggunakan session flashdata
					redirect('admin');
				}
			}
		}		
}
