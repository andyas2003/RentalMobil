<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Data Driver</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Driver</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Driver</h3>
                        </div>
                        <form name="sentMessage" method="post" action="<?php echo site_url('driver/save'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaDriver" class="col-sm-3 col-form-label">Nama Driver</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaDriver" class="form-control" id="namaMobil" placeholder="Nama Driver">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Driver</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="sendMessageButton" class="btn btn-info float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
