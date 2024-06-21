<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manajemen Driver</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard');?>">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen Driver</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Driver</h3>
                        </div>
                        <div class="card-body">
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
                                        <th>Nama Driver</th>
                                        <th>Foto</th>
                                        <th style="width: 150px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($driver as $val) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val->namaDriver; ?></td>
                                        <td><img src="<?php echo base_url('./assets/img/driver/' . $val->foto); ?>" width="150" height="110"></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo site_url('driver/get_by_id/' . $val->idDriver); ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?php echo site_url('driver/delete/' . $val->idDriver); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="<?php echo site_url('driver/add'); ?>" class="btn btn-sm btn-info float-left">Tambah Driver</a>
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
<script>
    $(document).ready(function(){
        setTimeout(function(){
            $('.alert-transparent').fadeOut(300);
        }, 3000);
    });
</script>
