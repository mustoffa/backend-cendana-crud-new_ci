<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>

  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <form class="form-horizontal" method="POST" action="<?php echo base_url('siswa/act_edit') ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data_siswa->id; ?>" readonly>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data_siswa->nama; ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $data_siswa->alamat; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Kelas</label>
      <div class="col-sm-10">
        <select name="id_kelas" class="form-control">
          <option value="">-- Pilih Kelas --</option>
          <?php foreach ($data_kelas as $kelas) {
              if ($kelas->id_kelas==$data_siswa->id_kelas) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
              <option value="<?=$kelas->id_kelas?>" <?=$selected?>><?=$kelas->nama_kelas?></option>
            <?php
          } ?>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url('siswa'); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>