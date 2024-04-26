<div class="container">
   <h1>Detail User</h1>
   <div class="card">
       <div class="card-body">
           <h5 class="card-title">ID: <?php echo $user['id_user']; ?></h5>
           <p class="card-text">Username: <?php echo $user['username']; ?></p>
           <a href="<?php echo base_url('user'); ?>" class="btn btn-secondary">Kembali</a>
       </div>
   </div>
</div>