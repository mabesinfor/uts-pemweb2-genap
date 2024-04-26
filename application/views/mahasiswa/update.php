<div class="container">
   <h1>Update Mahasiswa</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('mahasiswa/edit/'.$mahasiswa['nim']); ?>
   <div class="form-group">
       <label for="nama">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>" required>
   </div>
   <div class="form-group">
       <label for="tanggal_lahir">Tanggal Lahir</label>
       <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $mahasiswa['tanggal_lahir']; ?>" required>
   </div>
   <div class="form-group">
       <label for="alamat">Alamat</label>
       <textarea class="form-control" id="alamat" name="alamat" required><?php echo $mahasiswa['alamat']; ?></textarea>
   </div>
   <div class="form-group">
       <label for="id_user">User</label>
       <select class="form-control" id="id_user" name="id_user" required>
           <option value="">Pilih User</option>
           <?php foreach ($user as $u): ?>
           <option value="<?php echo $u['id_user']; ?>" <?php if($u['id_user'] == $mahasiswa['id_user']) echo 'selected'; ?>><?php echo $u['username']; ?></option>
           <?php endforeach; ?>
       </select>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-secondary">Batal</a>
   <?php echo form_close(); ?>
</div>