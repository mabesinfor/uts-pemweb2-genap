<div class="container">
   <h1>Detail Mahasiswa</h1>
   <div class="card">
       <div class="card-body">
           <h5 class="card-title">NIM: <?php echo $mahasiswa['nim']; ?></h5>
           <p class="card-text">Nama: <?php echo $mahasiswa['nama']; ?></p>
           <p class="card-text">Tanggal Lahir: <?php echo $mahasiswa['tanggal_lahir']; ?></p>
           <p class="card-text">Alamat: <?php echo $mahasiswa['alamat']; ?></p>
           <p class="card-text">User: <?php echo $mahasiswa['username']; ?></p>
           <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-secondary">Kembali</a>
       </div>
   </div>
</div>