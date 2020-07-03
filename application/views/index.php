<div class="container">
<?php if ($this->session->flashdata('pesan')) : ?>
    <div class="row mt-3">
         <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa<strong> Berhasil</strong> <?= $this->session->flashdata('pesan'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>    
</div>
<?php endif; ?>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <a href="<?= base_url(); ?>home/tambah" class="btn btn-success"> Tambah Data Mahasiswa</a>
        </div>
    </div>

    
   <div class="row mt-3">
       <div class="col-md-6">
           <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" >Cari</button>
                    </div>
                </div>
           </form>
       </div>
   </div> 


    <div class="row mt-3">
        <div class="col-md-6">
          <h3>Daftar Mahasiswa</h3> 
          <?php if(empty($mahasiswa)): ?>
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa Tidak Ditemukan 
            </div>
          <?php endif; ?>
            <ul class="list-group mt-3">
            <?php foreach ($mahasiswa as $mhs): ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'];?>
                        <a href="<?= base_url(); ?>home/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right mt-1" onclick="return confirm('Yakin Hapus Data?');">Hapus</a>
                        <a href="<?= base_url(); ?>home/update/<?= $mhs['id'] ?>" class="badge badge-success float-right mt-1">Update</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right mt-1">Detail</a>
                    </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>