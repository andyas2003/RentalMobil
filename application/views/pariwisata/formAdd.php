<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Data Pariwisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pariwisata</li>
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
                            <h3 class="card-title">Data Pariwisata</h3>
                        </div>
                        <form name="sentMessage" method="post" action="<?php echo site_url('pariwisata/save'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaPariwisata" class="col-sm-3 col-form-label">Nama Pariwisata</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaPariwisata" class="form-control" id="namaPariwisata" placeholder="Nama Pariwisata" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Pariwisata</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi" required></textarea>
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