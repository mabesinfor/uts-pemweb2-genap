<div class="container">
   <h1>Daftar User</h1>
   <a href="<?php echo base_url('user/create'); ?>" class="btn btn-primary mb-3">Tambah User</a>
   <table id="tableUser" class="table table-striped table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($user as $u): ?>
           <tr>
               <td><?php echo $u['id_user']; ?></td>
               <td><?php echo $u['username']; ?></td>
               <td>
                   <a href="<?php echo base_url('user/read/'.$u['id_user']); ?>" class="btn btn-sm btn-info">Detail</a>
                   <a href="<?php echo base_url('user/update/'.$u['id_user']); ?>" class="btn btn-sm btn-warning">Edit</a>
                   <a href="<?php echo base_url('user/delete/'.$u['id_user']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
               </td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</div>