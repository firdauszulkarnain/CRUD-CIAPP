<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Update Mahasiswa
                </div>
                <div class="card-body">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-success float-right">Update Data</button>
                    </form>   
                </div>
            </div> 
        </div>
    </div>
</div>