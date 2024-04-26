<div class="container">
   <h1>Update User</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('user/edit/'.$user['id_user']); ?>
   <div class="form-group">
       <label for="username">Username</label>
       <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" required>
   </div>
   <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" id="password" name="password" required>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <a href="<?php echo base_url('user'); ?>" class="btn btn-secondary">Batal</a>
   <?php echo form_close(); ?>
</div>