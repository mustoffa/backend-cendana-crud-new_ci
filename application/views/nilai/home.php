<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <?php echo $this->session->flashdata('alert_msg'); ?>
  
  <h1 class="page-header"><?php echo $judul; ?></h1>
  
  <a href="<?php echo base_url('nilai/add_nilai') ?>" class="btn btn-primary">Tambah Nilai</a>
  <br><br>
  <div class="table-responsive">
    <table id="table" class="table table-hover">
      <thead>
        <tr class="bg-primary">
          <th width="5%">No</th>
          <th>Nama Siswa</th>
          <th>Nama Mapel</th>
          <th>Total Nilai</th>
          <th width="15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data_nilai as $key => $value) { ?>
          <tr>
            <td><?=$value->id_nilai?></td>
            <td><?=$value->nama?></td>
            <td><?=$value->nama_mapel?></td>
            <td><?=$value->total_nilai?></td>
            <td>
              <a href="<?php echo base_url('nilai/edit/' .$value->id_nilai); ?>" class="btn btn-info">Edit</a>
              <a href="<?php echo base_url('nilai/hapus/' .$value->id_nilai); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>