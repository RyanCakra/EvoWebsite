<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      <?php
        if($this->session->userdata('ROLE')=='administrator'){
      ?>
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar') ?>">Kelola Data Pendaftaran</a></li>
            <li class="breadcrumb-item active">Data dari Form Pendaftaran</li>
          </ol>
        </div>
      <?php
        }
      ?>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data dari Form Pendaftaran</h3>
      </div>
      <div class="card-body">
        <div class="row mb-2">
          <div class="col-sm-8">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>tanggal_daftar</td>
                  <td><?= $daftar->tanggal_daftar ?></td>
                </tr>
                <tr>
                  <td>alasan</td>
                  <td><?= $daftar->alasan ?></td>
                </tr>
                <tr>
                  <td>users id</td>
                  <td><?= $daftar->users_id ?></td>
                </tr>
                <tr>
                  <td>kegiatan id</td>
                  <td><?= $daftar->kegiatan_id ?></td>
                </tr>
                <tr>
                  <td>Kategori peserta id</td>
                  <td><?= $daftar->kategori_peserta_id ?></td>
                </tr>
                <tr>
                  <td>no sertifikat</td>
                  <td><?= $daftar->nosertifikat ?></td>
                </tr>
              </tbody>
            </table>
          </div>
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
<!-- /.content-wrapper -->