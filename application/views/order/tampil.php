<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Order</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        .table-container {
            margin-top: 50px; /* Adjust this value as needed */
        }
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manajemen Order</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard');?>">Home</a></li>
                            <li class="breadcrumb-item active">Manajemen Order</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card table-container">
                            <div class="card-header">
                                <h3 class="card-title">Data Transaksi</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <!-- Alert -->
                                <?php if ($this->session->flashdata('success_message')) { ?>
                                    <div class="alert alert-success alert-transparent" role="alert">
                                        <?php echo $this->session->flashdata('success_message'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <div class="alert alert-success alert-transparent" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } ?>
                                <!-- End of Alert -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama Pemesan</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Tanggal Pengambilan</th>
                                            <th>Nama Mobil</th>
                                            <th>Nama Driver</th>
                                            <th>Paket Pariwisata</th>
                                            <th>Durasi Sewa</th>
                                            <th>Alamat Penjemputan</th>
                                            <th>Kota</th>
                                            <th>Kode Pos</th>
                                            <th>Tambahan Asuransi</th>
                                            <th>Ambil Di lokasi</th>
                                            <th>Metode Pembayaran</th>
                                            <th style="width: 150px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach ($transaksidetail as $val) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $val->nama_lengkap; ?></td>
                                            <td><?php echo $val->email; ?></td>
                                            <td><?php echo $val->nomor_telepon; ?></td>
                                            <td><?php echo $val->tanggal_pengambilan; ?></td>
                                            <td><?php echo $val->mobil; ?></td>
                                            <td><?php echo $val->driver; ?></td>
                                            <td><?php echo $val->paket_pariwisata; ?></td>
                                            <td><?php echo $val->durasi_sewa; ?></td>
                                            <td><?php echo $val->alamat_penjemputan; ?></td>
                                            <td><?php echo $val->kota; ?></td>
                                            <td><?php echo $val->kode_pos; ?></td>
                                            <td><?php echo $val->tambahan_asuransi; ?></td>
                                            <td><?php echo $val->ambil_di_lokasi; ?></td>
                                            <td><?php echo $val->metode_pembayaran; ?></td>
                                            <td>
                                            <div class="btn-group">
                                                <a href="<?php echo site_url('order/get_by_id/' . $val->id); ?>" class="btn btn-warning">View</a>
                                            </div>
                                        </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.col -->
                </div>
            </div>
            <!--/.container-fluid -->
        </section>
        <!--/.content -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $('.alert-transparent').fadeOut(300);
            }, 3000);
        });
    </script>
</body>
</html>
