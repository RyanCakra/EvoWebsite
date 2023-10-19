<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar') ?>">Kelola Data Pendaftaran</a></li>
            <li class="breadcrumb-item active">Form Update Pendaftaran</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <h2><?= $judul ?></h2>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Update Pendaftaran</h3>
      </div>
      <div class="card-body">
        <?php
        $hidden = ['daftar_edit' => $daftar_edit->id];
        ?>
        <?php echo form_open('daftar/save', '', $hidden) ?>
        <div class="form-group row">
          <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal daftar</label>
          <div class="col-8">
            <input id="tanggal_daftar" value="<?= $daftar_edit->tanggal_daftar ?>" name="tanggal_daftar" placeholder="Masukkan tanggal daftar" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="alasan" class="col-4 col-form-label">Alasan</label>
          <div class="col-8">
            <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control" placeholder="Masukkan alasan" required="required" value=""><?= $daftar_edit->alasan ?></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="users_id" class="col-4 col-form-label">user Id</label>
          <div class="col-8">
            <select id="users_id" name="users_id" class="custom-select" value="<?= $daftar_edit->users_id ?>">
              <?php
              foreach ($list_users as $obj) {
              ?>
                <option value="<?= $obj->id ?>"><?= $obj->username ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="kegiatan_id" class="col-4 col-form-label">Kegiatan Id</label>
          <div class="col-8">
            <select id="kegiatan_id" name="kegiatan_id" class="custom-select"  value="<?= $daftar_edit->kegiatan_id ?>">>
              <?php
              foreach ($list_kegiatan as $obj) {
              ?>
                <option value="<?= $obj->id ?>"><?= $obj->judul ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="kategori_peserta_id" class="col-4 col-form-label">Kategori Peserta Id</label>
          <div class="col-8">
            <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select" value="<?= $daftar_edit->kategori_peserta_id ?>">
              <?php
              foreach ($list_kategori_peserta as $obj) {
              ?>
                <option value="<?= $obj->id ?>"><?= $obj->nama ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nosertifikat" class="col-4 col-form-label">No Sertifikat </label>
          <div class="col-8">
            <input id="nosertifikat" value="<?= $daftar_edit->nosertifikat ?>" name="nosertifikat" placeholder="nosertifikat" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

        <?php echo form_close() ?>

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