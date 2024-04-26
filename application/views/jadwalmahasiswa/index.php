<div class="container">
   <h1>Daftar Jadwal Mahasiswa</h1>
   <a href="<?php echo base_url('jadwalmahasiswa/create'); ?>" class="btn btn-primary mb-3">Tambah Jadwal Mahasiswa</a>
   <table id="tableJadwalMahasiswa" class="table table-striped table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Mata Kuliah</th>
               <th>Jam Mulai</th>
               <th>Jam Selesai</th>
               <th>Nama Ruang</th>
               <th>NIM</th>
               <th>Nama Mahasiswa</th>
               <th>Pengampu</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($jadwalmahasiswa as $jm): ?>
           <tr>
               <td><?php echo $jm['id_jadwal_mahasiswa']; ?></td>
               <td><?php echo $jm['nama_matakuliah']; ?></td>
               <td><?php echo $jm['jam_mulai']; ?></td>
               <td><?php echo $jm['jam_selesai']; ?></td>
               <td><?php echo $jm['nama_ruang']; ?></td>
               <td><?php echo $jm['nim']; ?></td>
               <td><?php echo $jm['nama_mahasiswa']; ?></td>
               <td><?php echo $jm['username']; ?></td>
               <td>
                   <a href="<?php echo base_url('jadwalmahasiswa/read/'.$jm['id_jadwal_mahasiswa']); ?>" class="btn btn-sm btn-info">Detail</a>
                   <a href="<?php echo base_url('jadwalmahasiswa/update/'.$jm['id_jadwal_mahasiswa']); ?>" class="btn btn-sm btn-warning">Edit</a>
                   <a href="<?php echo base_url('jadwalmahasiswa/delete/'.$jm['id_jadwal_mahasiswa']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
               </td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</div>