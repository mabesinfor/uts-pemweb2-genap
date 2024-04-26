<div class="container">
   <h1>Detail Jadwal</h1>
   <div class="card">
       <div class="card-body">
       <h5 class="card-title">Mata Kuliah: <?php echo $jadwal['nama_matakuliah']; ?></h5>
           <p class="card-text">Jam Mulai: <?php echo $jadwal['jam_mulai']; ?></p>
           <p class="card-text">Jam Selesai: <?php echo $jadwal['jam_selesai']; ?></p>
           <p class="card-text">Nama Ruang: <?php echo $jadwal['nama_ruang']; ?></p>
           <p class="card-text">Pengampu: <?php echo $jadwal['username']; ?></p>
           <a href="<?php echo base_url('jadwal'); ?>" class="btn btn-secondary">Kembali</a>
       </div>
   </div>
</div>