<div class="container">
   <h1>Daftar Jadwal</h1>
   <a href="<?php echo base_url('jadwal/create'); ?>" class="btn btn-primary mb-3">Tambah Jadwal</a>
   <table id="tableJadwal" class="table table-striped table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Mata Kuliah</th>
               <th>Jam Mulai</th>
               <th>Jam Selesai</th>
               <th>Nama Ruang</th>
               <th>Pengampu</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($jadwal as $j): ?>
           <tr>
               <td><?php echo $j['id_jadwal']; ?></td>
               <td><?php echo $j['nama_matakuliah']; ?></td>
               <td><?php echo $j['jam_mulai']; ?></td>
               <td><?php echo $j['jam_selesai']; ?></td>
               <td><?php echo $j['nama_ruang']; ?></td>
               <td><?php echo $j['username']; ?></td>
               <td>
                   <a href="<?php echo base_url('jadwal/read/'.$j['id_jadwal']); ?>" class="btn btn-sm btn-info">Detail</a>
                   <a href="<?php echo base_url('jadwal/update/'.$j['id_jadwal']); ?>" class="btn btn-sm btn-warning">Edit</a>
                   <a href="<?php echo base_url('jadwal/delete/'.$j['id_jadwal']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
               </td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</div>