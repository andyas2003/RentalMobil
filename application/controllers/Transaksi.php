<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Madmin');
        $this->load->library('session'); // Ensure session library is loaded
    }

    public function index()
    {
        // Fetch data for cars and drivers from the database
        $data['mobil'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $data['driver'] = $this->Madmin->get_all_data('tbl_driver')->result();
        $data['pariwisata'] = $this->Madmin->get_all_data('tbl_pariwisata')->result();
        $dataMobil['kategori'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $dataDriver['driver'] = $this->Madmin->get_all_data('tbl_driver')->result();
        $dataPariwisata['pariwisata'] = $this->Madmin->get_all_data('tbl_pariwisata')->result();

        // Load the view and pass the data
        $this->load->view('layout/menu');
        $this->load->view('crud/transaksi', $data);
        $this->load->view('car/mobil', $dataMobil);
        $this->load->view('car/driver', $dataDriver);
        $this->load->view('paket/pariwisata', $dataPariwisata);
    }

    public function detail()
    {
        if ($this->input->post()) {
            // Check if the user is logged in and idKonsumen is available
            if (!$this->session->userdata('idKonsumen')) {
                $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
                redirect('home'); // Redirect to login page if not logged in
            }

            // Retrieve idKonsumen from session
            $idKonsumen = $this->session->userdata('idKonsumen');

            // Hitung total berdasarkan mobil dan durasi sewa yang dipilih
            $durasi_sewa = $this->input->post('durasi_sewa');
            $mobil = $this->Madmin->get_data_by_column('tbl_mobil', 'namaMobil', $this->input->post('mobil'));

            // Check if $mobil is an object and not empty
            if (!empty($mobil)) {
                // Menentukan harga berdasarkan durasi sewa yang dipilih
                switch ($durasi_sewa) {
                    case '24':
                        $harga_per_jam = $mobil->harga24jam;
                        break;
                    case '12':
                        $harga_per_jam = $mobil->harga12jam;
                        break;
                    case '6':
                        $harga_per_jam = $mobil->harga6jam;
                        break;
                    default:
                        $harga_per_jam = 0; // Harga default jika durasi sewa tidak sesuai
                        break;
                }

                $total = $harga_per_jam;

                // Data untuk dimasukkan ke tabel tbl_transaksidetail
                $data_detail = array(
                    'idKonsumen' => $idKonsumen,
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'email' => $this->input->post('email'),
                    'nomor_telepon' => $this->input->post('nomor_telepon'),
                    'tanggal_pengambilan' => $this->input->post('tanggal_pengambilan'),
                    'mobil' => $this->input->post('mobil'),
                    'driver' => $this->input->post('driver'),
                    'paket_pariwisata' => $this->input->post('paket_pariwisata'),
                    'durasi_sewa' => $durasi_sewa,
                    'alamat_penjemputan' => $this->input->post('alamat_penjemputan'),
                    'kota' => $this->input->post('kota'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'tambahan_asuransi' => ($this->input->post('tambahan_asuransi') == 'yes') ? 1 : 0,
                    'ambil_di_lokasi' => ($this->input->post('ambil_di_lokasi') == 'yes') ? 1 : 0,
                    'metode_pembayaran' => $this->input->post('metode_pembayaran')
                );

                $id_transaksi_detail = $this->Madmin->insertid('tbl_transaksidetail', $data_detail);
                $idKonsumen = $this->session->userdata('idKonsumen');

                // Data untuk dimasukkan ke tabel tbl_transaksi
                if ($id_transaksi_detail) {
                    // Data untuk dimasukkan ke tabel tbl_transaksi
                    $data_transaksi = array(
                        'id' => $id_transaksi_detail,
                        'idKonsumen' => $idKonsumen,
                        'tanggal' => date('Y-m-d'),
                        'total' => $total,
                        'status_pembelian' => 'baru',
                        'status_pembayaran' => 'menunggu'
                    );

                    $this->Madmin->insert('tbl_transaksi', $data_transaksi);

                    $this->session->set_flashdata('success', 'Transaksi berhasil diproses. Cek Status di Detail Transaksi !!');
                    redirect('home/dashboard');
                } else {
                    // Handle case where insert to tbl_transaksidetail failed
                    $this->session->set_flashdata('error', 'Gagal memproses transaksi. Silakan coba lagi.');
                    redirect('transaksi');
                }
            }
        }
    }
}
?>