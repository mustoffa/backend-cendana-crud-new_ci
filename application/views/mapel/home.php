<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>
  
  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <a href="<?php echo base_url('mapel/add_mapel') ?>" class="btn btn-primary">Tambah Mapel</a>
  <br><br>
  <div class="table-responsive">
    <table id="table" class="table table-hover">
      <thead>
        <tr class="bg-primary">
          <th width="5%">No</th>
          <th>Nama</th>
          <th>Nama Guru</th>
          <th width="15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data_mapel as $key => $value) { ?>
          <tr>
            <td><?=$value->id_mapel?></td>
            <td><?=$value->nama_mapel?></td>
            <td><?=$value->nama_guru?></td>
            <td>
              <a href="<?php echo base_url('mapel/edit/' .$value->id_mapel); ?>" class="btn btn-info">Edit</a>
              <a href="<?php echo base_url('mapel/hapus/' .$value->id_mapel); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>