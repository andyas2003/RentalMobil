<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Mobil</li>
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
                            <h3 class="card-title">Data Mobil</h3>
                        </div>
                        <form name="sentMessage" method="post" action="<?php echo site_url('kategori/save'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaMobil" class="col-sm-3 col-form-label">Nama Mobil</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaMobil" class="form-control" id="namaMobil" placeholder="Nama Mobil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Mobil</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargaMobil" class="col-sm-3 col-form-label">Harga 24 Jam</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga24jam" class="form-control" id="hargaMobil" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargaMobil" class="col-sm-3 col-form-label">Harga 12 Jam</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga12jam" class="form-control" id="hargaMobil" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hargaMobil" class="col-sm-3 col-form-label">Harga 6 Jam</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga6jam" class="form-control" id="hargaMobil" placeholder="Harga">
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
