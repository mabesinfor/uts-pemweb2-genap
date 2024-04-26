<?php $this->load->view('templates/header'); ?>
<div class="container">
   <h1>Login</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('auth/authenticate'); ?>
   <div class="form-group">
       <label for="username">Username</label>
       <input type="text" class="form-control" id="username" name="username" required>
   </div>
   <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" id="password" name="password" required>
   </div>
   <button type="submit" class="btn btn-primary">Login</button>
   <?php echo form_close(); ?>
</div>
<?php $this->load->view('templates/footer'); ?>