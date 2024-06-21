<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('home');
        }
        $idKonsumen = $this->session->userdata('idKonsumen');
        $data['kategori'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $data['transaksi'] = $this->Madmin->get_data_by_id('tbl_transaksi', 'idKonsumen', $idKonsumen)->result();
        $this->load->view('layout/menu');
        $this->load->view('detail/tampil', $data);
        $this->load->view('car/mobil', $data);
        $this->load->view('layout/footer');
    }

    public function prosesbayar()
    {
        $idTransaksi = $this->input->post('idTransaksi');
        $namaPengirim = $this->input->post('namaPengirim');
        $buktiPembayaran = $_FILES['buktiPembayaran']['name'];

        // Upload the file
        $config['upload_path'] = './assets/img/transaksi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktiPembayaran')) {
            $data = array('upload_data' => $this->upload->data());
            $file_name = $data['upload_data']['file_name'];

            // Insert payment details to tbl_pembayaran
            $data_pembayaran = array(
                'idTransaksi' => $idTransaksi,
                'namaPengirim' => $namaPengirim,
                'buktiPembayaran' => $file_name,
            );

            $this->db->insert('tbl_pembayaran', $data_pembayaran);

            // Update transaction status in tbl_transaksi
            $this->db->where('idTransaksi', $idTransaksi);
            $this->db->update('tbl_transaksi', array('bukti_pembayaran' => $file_name));

            redirect('detail_transaksi'); // Redirect to the transaction details page
        } else {
            // Handle file upload error
            echo $this->upload->display_errors();
        }
    }


}
?>