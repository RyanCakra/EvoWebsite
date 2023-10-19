<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan') ?>">Kelola Kegiatan</a></li>
            <li class="breadcrumb-item active">Form Update Data Kegiatan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <h2><?= $juduls ?></h2>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Update Data Kegiatan</h3>
      </div>
      <div class="card-body">
        <?php
          $hidden = ['kegiatan_edit' => $kegiatan_edit->id];
        ?>
        <?php echo form_open('kegiatan/save', '', $hidden) ?>
        <div class="form-group row">
          <label for="id" class="col-4 col-form-label">Id</label>
          <div class="col-8">
            <input id="id" value="<?= $kegiatan_edit->id ?>" name="id" placeholder="id" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="judul" class="col-4 col-form-label">judul</label>
          <div class="col-8">
            <input id="judul" value="<?= $kegiatan_edit->judul ?>" name="judul" placeholder="Masukkan judul" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="kapasitas" class="col-4 col-form-label">Kapasitas</label>
          <div class="col-8">
            <input id="kapasitas" value="<?= $kegiatan_edit->kapasitas ?>" name="kapasitas" placeholder="Masukkan kapasitas" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="harga_tiket" class="col-4">Harga Tiket</label>
          <div class="col-8">
            <input id="kapasitas" value="<?= $kegiatan_edit->harga_tiket ?>" name="harga_tiket" placeholder="harga tiket" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
          <div class="col-8">
            <input id="tanggal" value="<?= $kegiatan_edit->tanggal ?>" name="tanggal" placeholder="yyyy-mm-dd" type="text" required="required" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="narasumber" class="col-4 col-form-label">Narasumber</label>
          <div class="col-8">
            <input id="narasumber" value="<?= $kegiatan_edit->narasumber ?>" name="narasumber" placeholder="Masukkan Narasumber" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="tempat" class="col-4 col-form-label">Tempat</label>
          <div class="col-8">
            <input id="tempat" value="<?= $kegiatan_edit->tempat ?>" name="tempat" placeholder="Masukkan Tempat" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="pic" class="col-4 col-form-label">pic</label>
          <div class="col-8">
            <input id="pic" value="<?= $kegiatan_edit->pic ?>" name="pic" placeholder="Masukkan Pic" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="jenis_id" class="col-4 col-form-label">Jenis Id</label>
          <div class="col-8">
            <select id="jenis_id" name="jenis_id" class="custom-select" value="<?= $kegiatan_edit->jenis_id ?>">
              <?php
              foreach ($list_jenis_kegiatan as $obj) {
              ?>
                <option value="<?= $obj->id ?>"><?= $obj->nama ?></option>
              <?php
              }
              ?>
            </select>
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
  <br>
  <br>
</div>
<!-- /.content-wrapper -->