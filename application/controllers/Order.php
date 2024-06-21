<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }
        $data['transaksidetail'] = $this->Madmin->get_all_data('tbl_transaksidetail')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('order/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('admin');
        }

        $data['transaksi'] = $this->Madmin->get_by_id_transaksi('tbl_transaksi', array('id' => $id))->row_object();
        $data['transaksidetail'] = $this->Madmin->get_all_data('tbl_transaksi')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('order/layout/detail', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update_status_pembelian()
    {
        $idTransaksi = $this->input->post('idTransaksi');
        $status_pembelian = $this->input->post('status_pembelian');

        $data = array(
            'status_pembelian' => $status_pembelian
        );

        $where = array('idTransaksi' => $idTransaksi);

        $this->Madmin->updatetransaksi('tbl_transaksi', $data, $where, $idTransaksi);

        redirect('order/get_by_id/' . $idTransaksi);
    }

    public function update_status_pembayaran()
    {
        $idTransaksi = $this->input->post('idTransaksi');
        $status_pembayaran = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran' => $status_pembayaran
        );

        $where = array('idTransaksi' => $idTransaksi);

        $this->Madmin->updatetransaksi('tbl_transaksi', $data, $where, $idTransaksi);

        redirect('order/get_by_id/' . $idTransaksi);
    }
}
?>
