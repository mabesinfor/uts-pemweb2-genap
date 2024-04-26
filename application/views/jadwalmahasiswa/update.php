<div class="container">
   <h1>Update Jadwal Mahasiswa</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('jadwalmahasiswa/edit/'.$jadwalmahasiswa['id_jadwal_mahasiswa']); ?>
   <div class="form-group">
       <label for="id_jadwal">Jadwal</label>
       <select class="form-control" id="id_jadwal" name="id_jadwal" required>
           <option value="">Pilih Jadwal</option>
           <?php foreach ($jadwal as $j): ?>
           <option value="<?php echo $j['id_jadwal']; ?>" <?php if($j['id_jadwal'] == $jadwalmahasiswa['id_jadwal']) echo 'selected'; ?>><?php echo $j['nama_matakuliah'].' - '.$j['jam_mulai'].' - '.$j['jam_selesai']; ?></option>
           <?php endforeach; ?>
       </select>
   </div>
   <div class="form-group">
       <label for="nim">Mahasiswa</label>
       <select class="form-control select2" id="nim" name="nim" required>
           <option value="">Pilih Mahasiswa</option>
           <?php foreach ($mahasiswa as $m): ?>
           <option value="<?php echo $m['nim']; ?>" <?php if($m['nim'] == $jadwalmahasiswa['nim']) echo 'selected'; ?>><?php echo $m['nama']; ?></option>
           <?php endforeach; ?>
       </select>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <a href="<?php echo base_url('jadwalmahasiswa'); ?>" class="btn btn-secondary">Batal</a>
   <?php echo form_close(); ?>
</div>