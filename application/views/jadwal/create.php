<div class="container">
   <h1>Tambah Jadwal</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('jadwal/store'); ?>
   <div class="form-group">
       <label for="id_matakuliah">Mata Kuliah</label>
       <select class="form-control select2" id="id_matakuliah" name="id_matakuliah" required>
           <option value="">Pilih Mata Kuliah</option>
           <?php foreach ($matakuliah as $mk): ?>
           <option value="<?php echo $mk['id_matakuliah']; ?>"><?php echo $mk['nama_matakuliah']; ?></option>
           <?php endforeach; ?>
       </select>
   </div>
   <div class="form-group">
       <label for="jam_mulai">Jam Mulai</label>
       <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
   </div>
   <div class="form-group">
       <label for="jam_selesai">Jam Selesai</label>
       <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
   </div>
   <div class="form-group">
       <label for="nama_ruang">Nama Ruang</label>
       <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" required>
   </div>
   <div class="form-group">
       <label for="id_user">Pengampu</label>
       <select class="form-control select2" id="id_user" name="id_user" required>
           <option value="">Pilih Pengampu</option>
           <?php foreach ($user as $u): ?>
           <option value="<?php echo $u['id_user']; ?>"><?php echo $u['username']; ?></option>
           <?php endforeach; ?>
       </select>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <a href="<?php echo base_url('jadwal'); ?>" class="btn btn-secondary">Batal</a>
   <?php echo form_close(); ?>
</div>