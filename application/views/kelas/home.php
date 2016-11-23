<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>
  
  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <a href="<?php echo base_url('kelas/add_kelas') ?>" class="btn btn-primary">Tambah Kelas</a>
  <br><br>
  <div class="table-responsive">
    <table id="table" class="table table-hover">
      <thead>
        <tr class="bg-primary">
          <th width="5%">No</th>
          <th>Nama Kelas</th>
          <th width="15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data_kelas as $key => $value) { ?>
          <tr>
            <td><?=$value->id_kelas?></td>
            <td><?=$value->nama_kelas?></td>
            <td>
              <a href="<?php echo base_url('kelas/edit/' .$value->id_kelas); ?>" class="btn btn-info">Edit</a>
              <a href="<?php echo base_url('kelas/hapus/' .$value->id_kelas); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>