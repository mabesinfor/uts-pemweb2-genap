<div class="container">
   <h1>Detail Mata Kuliah</h1>
   <div class="card">
       <div class="card-body">
           <h5 class="card-title">ID: <?php echo $matakuliah['id_matakuliah']; ?></h5>
           <p class="card-text">Nama Mata Kuliah: <?php echo $matakuliah['nama_matakuliah']; ?></p>
           <a href="<?php echo base_url('matakuliah'); ?>" class="btn btn-secondary">Kembali</a>
       </div>
   </div>
</div>