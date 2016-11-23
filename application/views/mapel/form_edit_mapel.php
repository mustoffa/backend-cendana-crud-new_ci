<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>

  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <form class="form-horizontal" method="POST" action="<?php echo base_url('mapel/act_edit') ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
        <input type="hidden" name="id_mapel" class="form-control" value="<?php echo $data_mapel->id_mapel; ?>" readonly>
        <input type="text" name="nama_mapel" class="form-control" placeholder="Nama" value="<?php echo $data_mapel->nama_mapel; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Guru</label>
      <div class="col-sm-10">
        <select name="id_guru" class="form-control">
          <option value="">-- Pilih Guru --</option>
          <?php foreach ($data_guru as $guru) {
              if ($guru->id_guru==$data_mapel->id_guru) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
              <option value="<?=$guru->id_guru?>" <?=$selected?>><?=$guru->nama_guru?></option>
            <?php
          } ?>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url('mapel'); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>