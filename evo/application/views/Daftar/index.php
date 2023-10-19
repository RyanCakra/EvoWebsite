<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2>Pendaftaran Event</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kelola Data Pendaftaran</h3>
      </div>
      <div class="card-body">
        <div class="container-fluid">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Daftar</th>
                <th scope="col">Alasan</th>
                <th scope="col">Users id</th>
                <th scope="col">Kegiatan Id</th>
                <th scope="col">Kategori peserta id</th>
                <th scope="col">No sertifikat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($list_daftar as $daftar) {
              ?>
                <tr>
                  <td><?= $daftar->id ?></td>
                  <td><?= $daftar->tanggal_daftar ?></td>
                  <td><?= $daftar->alasan ?></td>
                  <td><?= $daftar->users_id ?></td>
                  <td><?= $daftar->kegiatan_id ?></td>
                  <td><?= $daftar->kategori_peserta_id ?></td>
                  <td><?= $daftar->nosertifikat ?></td>
                  <td>
                    <a href="<?php echo base_url('index.php/daftar/view?id='. $daftar->id)?>" type="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo base_url('index.php/daftar/edit?id='. $daftar->id)?>" type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                    <a href="<?php echo base_url('index.php/daftar/delete?id='. $daftar->id)?>" onclick="if(!confirm('Anda Yakin Akan Menghapus daftar dengan id : <?= $daftar->id ?>?')){return false}" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
  </br>
  </br>
</div>