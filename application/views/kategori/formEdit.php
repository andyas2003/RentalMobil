<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Mobil</li>
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
                        <form class="form-horizontal" method="post" action="<?php echo site_url('kategori/edit'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $kategori->idMobil; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaMobil" class="col-sm-3 col-form-label">Nama Mobil</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaMobil" value="<?php echo $kategori->namaMobil; ?>"
                                            class="form-control" id="namaMobil" placeholder="Nama Mobil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Mobil</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto Mobil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga24jam" class="col-sm-3 col-form-label">Harga 24 Jam</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga24jam" value="<?php echo $kategori->harga24jam;?>" class="form-control" id="harga24jam" placeholder="Harga 24 Jam">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga12jam" class="col-sm-3 col-form-label">Harga 12 Jam</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga12jam" value="<?php echo $kategori->harga12jam;?>" class="form-control" id="harga12jam" placeholder="Harga 12 Jam">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga6jam" class="col-sm-3 col-form-label">Harga 6 Jam</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga6jam" value="<?php echo $kategori->harga6jam;?>" class="form-control" id="harga6jam" placeholder="Harga 6 Jam">
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
