<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Event</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Pendaftaran</b>Event</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">

            <div class="mt-2 mx-2">
                <a href="<?php echo base_url('index.php/home')?>"><i class="fas fa-angle-left"></i>Home</a>
            </div>

            <div class="card-body login-card-body">
                <p class="login-box-msg">Pendaftaran</p>
                <img src="<?php echo base_url('uploads/' . $kegiatan->foto_flyer) ?>" class="img-fluid" alt="...">
                </br>
                </br>
                <?php echo form_open('home/saves') ?>
                <input type="hidden" name="users_id" value="<?php echo $this->session->userdata('USERID')?>"/>
                <input type="hidden" name="kegiatan_id" value="<?php echo $kegiatan->id?>"/>
                <div class="input-group mb-3">
                    <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
                        <?php
                        foreach ($list_kategori_peserta as $obj) {
                        ?>
                            <option value="<?= $obj->id ?>"><?= $obj->nama ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control" placeholder="Masukkan Alasan" required="required"></textarea>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
</body>

</html>