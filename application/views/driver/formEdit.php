<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Data Driver</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Driver</li>
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
                        <form class="form-horizontal" method="post" action="<?php echo site_url('driver/edit'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $driver->idDriver; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaMobil" class="col-sm-3 col-form-label">Nama Driver</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaDriver" value="<?php echo $driver->namaDriver; ?>"
                                            class="form-control" id="namaMobil" placeholder="Nama Mobil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Driver</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto Mobil">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
