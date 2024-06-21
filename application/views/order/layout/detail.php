<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Order</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        .table-container {
            margin-top: 50px;
            /* Adjust this value as needed */
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table-bordered td,
        .table-bordered th {
            vertical-align: middle;
            /* Center content vertically */
        }

        .bukti-pembayaran {
            max-width: 150px;
            /* Adjust image width as needed */
            height: auto;
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
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a>
                            </li>
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Status Pembelian</th>
                                            <th>Status Pembayaran</th>
                                            <th>Bukti Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($transaksidetail)): ?>
                                            <?php $no = 1; ?>
                                            <?php foreach ($transaksidetail as $val): ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $val->tanggal; ?></td>
                                                    <td><?php echo $val->total; ?></td>
                                                    <td>
                                                        <form action="<?php echo site_url('order/update_status_pembelian'); ?>"
                                                            method="post">
                                                            <input type="hidden" name="idTransaksi"
                                                                value="<?php echo $val->idTransaksi; ?>">
                                                            <select name="status_pembelian" class="form-control"
                                                                onchange="this.form.submit()">
                                                                <option value="baru" <?php if ($val->status_pembelian == 'baru')
                                                                    echo 'selected'; ?>>Baru</option>
                                                                <option value="ditolak" <?php if ($val->status_pembelian == 'ditolak')
                                                                    echo 'selected'; ?>>
                                                                    Ditolak</option>
                                                                <option value="diterima" <?php if ($val->status_pembelian == 'diterima')
                                                                    echo 'selected'; ?>>
                                                                    Diterima</option>
                                                                <option value="selesai" <?php if ($val->status_pembelian == 'selesai')
                                                                    echo 'selected'; ?>>
                                                                    Selesai</option>
                                                            </select>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="<?php echo site_url('order/update_status_pembayaran'); ?>"
                                                            method="post">
                                                            <input type="hidden" name="idTransaksi"
                                                                value="<?php echo $val->idTransaksi; ?>">
                                                            <select name="status_pembayaran" class="form-control"
                                                                onchange="this.form.submit()">
                                                                <option value="menunggu" <?php if ($val->status_pembayaran == 'menunggu')
                                                                    echo 'selected'; ?>>
                                                                    Menunggu</option>
                                                                <option value="lunas" <?php if ($val->status_pembayaran == 'lunas')
                                                                    echo 'selected'; ?>>Lunas
                                                                </option>
                                                                <option value="gagal" <?php if ($val->status_pembayaran == 'gagal')
                                                                    echo 'selected'; ?>>Gagal
                                                                </option>
                                                            </select>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <?php if (!empty($val->bukti_pembayaran)): ?>
                                                            <img src="<?php echo base_url('assets/img/transaksi/' . $val->bukti_pembayaran); ?>"
                                                                alt="Bukti Pembayaran" class="bukti-pembayaran">
                                                        <?php else: ?>
                                                            -
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6">Tidak ada data transaksi.</td>
                                            </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <a href="<?php echo site_url('order/index'); ?>"
                                    class="btn btn-sm btn-info float-left">Kembali</a>
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
        $(document).ready(function () {
            setTimeout(function () {
                $('.alert-transparent').fadeOut(300);
            }, 3000);
        });
    </script>
</body>

</html>