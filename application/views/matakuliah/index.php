<div class="container">
   <h1>Daftar Mata Kuliah</h1>
   <a href="<?php echo base_url('matakuliah/create'); ?>" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
   <table id="tableMatakuliah" class="table table-striped table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Nama Mata Kuliah</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($matakuliah as $mk): ?>
           <tr>
               <td><?php echo $mk['id_matakuliah']; ?></td>
               <td><?php echo $mk['nama_matakuliah']; ?></td>
               <td>
                   <a href="<?php echo base_url('matakuliah/read/'.$mk['id_matakuliah']); ?>" class="btn btn-sm btn-info">Detail</a>
                   <a href="<?php echo base_url('matakuliah/update/'.$mk['id_matakuliah']); ?>" class="btn btn-sm btn-warning">Edit</a>
                   <a href="<?php echo base_url('matakuliah/delete/'.$mk['id_matakuliah']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
               </td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</div>