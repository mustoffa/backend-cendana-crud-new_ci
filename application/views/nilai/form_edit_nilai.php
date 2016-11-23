<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>

  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <form class="form-horizontal" method="POST" action="<?php echo base_url('nilai/act_edit') ?>">
    <div class="form-group">
      <label class="col-sm-2 control-label">Nama Siswa</label>
      <div class="col-sm-10">
        <input type="hidden" name="id_nilai" class="form-control" value="<?php echo $data_nilai->id_nilai; ?>" readonly>
        <select name="id_siswa" class="form-control">
          <option value="">-- Pilih Siswa --</option>
          <?php foreach ($data_siswa as $siswa) {
              if ($siswa->id==$data_nilai->id_siswa) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
              <option value="<?=$siswa->id?>" <?=$selected?>><?=$siswa->nama?></option>
            <?php
          } ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Nama Mapel</label>
      <div class="col-sm-10">
        <select name="id_mapel" class="form-control">
          <option value="">-- Pilih Mapel --</option>
          <?php foreach ($data_mapel as $mapel) {
              if ($mapel->id_mapel==$data_nilai->id_mapel) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
              <option value="<?=$mapel->id_mapel?>" <?=$selected?>><?=$mapel->nama_mapel?></option>
            <?php
          } ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="total_nilai" class="form-control" placeholder="Total Nilai" value="<?php echo $data_nilai->total_nilai; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url('nilai'); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>