<div class="container">
   <h1>Daftar Mahasiswa</h1>
   <a href="<?php echo base_url('mahasiswa/create'); ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
   <table id="tableMahasiswa" class="table table-striped table-bordered">
       <thead>
           <tr>
               <th>NIM</th>
               <th>Nama</th>
               <th>Tanggal Lahir</th>
               <th>Alamat</th>
               <th>User</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($mahasiswa as $m): ?>
           <tr>
               <td><?php echo $m['nim']; ?></td>
               <td><?php echo $m['nama']; ?></td>
               <td><?php echo $m['tanggal_lahir']; ?></td>
               <td><?php echo $m['alamat']; ?></td>
               <td><?php echo $m['username']; ?></td>
               <td>
                   <a href="<?php echo base_url('mahasiswa/read/'.$m['nim']); ?>" class="btn btn-sm btn-info">Detail</a>
                   <a href="<?php echo base_url('mahasiswa/update/'.$m['nim']); ?>" class="btn btn-sm btn-warning">Edit</a>
                   <a href="<?php echo base_url('mahasiswa/delete/'.$m['nim']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
               </td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</div>