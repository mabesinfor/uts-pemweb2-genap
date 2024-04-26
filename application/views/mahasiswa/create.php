<div class="container">
   <h1>Tambah Mahasiswa</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('mahasiswa/store'); ?>
   <div class="form-group">
       <label for="nim">NIM</label>
       <input type="text" class="form-control" id="nim" name="nim" required>
   </div>
   <div class="form-group">
       <label for="nama">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama" required>
   </div>
   <div class="form-group">
       <label for="tanggal_lahir">Tanggal Lahir</label>
       <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
   </div>
   <div class="form-group">
       <label for="alamat">Alamat</label>
       <textarea class="form-control" id="alamat" name="alamat" required></textarea>
   </div>
   <div class="form-group">
       <label for="id_user">User</label>
       <select class="form-control select2" id="id_user" name="id_user" required>
           <option value="">Pilih User</option>
           <?php foreach ($user as $u): ?>
           <option value="<?php echo $u['id_user']; ?>"><?php echo $u['username']; ?></option>
           <?php endforeach; ?>
       </select>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-secondary">Batal</a>
   <?php echo form_close(); ?>
</div>