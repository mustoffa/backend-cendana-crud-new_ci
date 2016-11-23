<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>

  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <form class="form-horizontal" method="POST" action="<?php echo base_url('guru/act_tambah') ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url('guru'); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>