<div class="container">
   <h1>Detail Jadwal Mahasiswa</h1>
   <div class="card">
       <div class="card-body">
           <h5 class="card-title">ID: <?php echo $jadwalmahasiswa['id_jadwal_mahasiswa']; ?></h5>
           <p class="card-text">Mata Kuliah: <?php echo $jadwalmahasiswa['nama_matakuliah']; ?></p>
           <p class="card-text">Jam Mulai: <?php echo $jadwalmahasiswa['jam_mulai']; ?></p>
           <p class="card-text">Jam Selesai: <?php echo $jadwalmahasiswa['jam_selesai']; ?></p>
           <p class="card-text">Nama Ruang: <?php echo $jadwalmahasiswa['nama_ruang']; ?></p>
           <p class="card-text">NIM: <?php echo $jadwalmahasiswa['nim']; ?></p>
           <p class="card-text">Nama Mahasiswa: <?php echo $jadwalmahasiswa['nama_mahasiswa']; ?></p>
           <p class="card-text">Pengampu: <?php echo $jadwalmahasiswa['username']; ?></p>
           <a href="<?php echo base_url('jadwalmahasiswa'); ?>" class="btn btn-secondary">Kembali</a>
       </div>
   </div>
</div>