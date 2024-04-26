<div class="container">
   <h1>Tambah Mata Kuliah</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('matakuliah/store'); ?>
   <div class="form-group">
       <label for="nama_matakuliah">Nama Mata Kuliah</label>
       <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" required>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <a href="<?php echo base_url('matakuliah'); ?>" class="btn btn-secondary">Batal</a>
   <?php echo form_close(); ?>
</div>