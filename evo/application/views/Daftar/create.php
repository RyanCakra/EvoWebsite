<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar') ?>">Kelola Data Pendaftaran</a></li>
            <li class="breadcrumb-item active">Form Data Pendaftaran</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <h2><?=$judul?></h2>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Data Pendaftaran</h3>
      </div>
      <div class="card-body">
        <?php echo form_open('daftar/save') ?>
        <div class="form-group row">
          <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal daftar</label>
          <div class="col-8">
            <input id="tanggal_daftar" name="tanggal_daftar" placeholder="yyyy-mm-dd" type="date" required="required" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="alasan" class="col-4 col-form-label">Alasan</label>
          <div class="col-8">
            <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control" placeholder="Masukkan alasan" required="required"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="users_id" class="col-4 col-form-label">user Id</label>
          <div class="col-8">
            <select id="users_id" name="users_id" class="custom-select">
              <?php
                foreach($list_users as $obj){
              ?>
              <option value="<?=$obj->id?>"><?=$obj->username?></option>
              <?php
                }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="kegiatan_id" class="col-4 col-form-label">Kegiatan Id</label>
          <div class="col-8">
            <select id="kegiatan_id" name="kegiatan_id" class="custom-select">
              <?php
                foreach($list_kegiatan as $obj){
              ?>
              <option value="<?=$obj->id?>"><?=$obj->judul?></option>
              <?php
                }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="kategori_peserta_id" class="col-4 col-form-label">Kategori pesrta Id</label>
          <div class="col-8">
            <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
              <?php
                foreach($list_kategori_peserta as $obj){
              ?>
              <option value="<?=$obj->id?>"><?=$obj->nama?></option>
              <?php
                }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nosertifikat" class="col-4 col-form-label">No Sertifikat</label>
          <div class="col-8">
            <input id="nosertifikat" name="nosertifikat" placeholder="Masukan no sertifikat " type="text" class="form-control" required="required">
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