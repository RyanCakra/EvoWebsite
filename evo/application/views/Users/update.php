<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $judul ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="<?php echo base_url('index.php/users') ?>">Home</a></li>
            <li class="breadcrumb-item active">Daftar Users</li>
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
        <h2><?= $judul ?></h2>
      </div>
      <div class="card-body">
        <?php
        $hidden = ['users_edit' => $users_edit->id];
        ?>
        <?php echo form_open('users/save', '', $hidden) ?>
        <div class="form-group row">
          <label for="username" class="col-4 col-form-label">Username</label>
          <div class="col-8">
            <input id="username" name="username" value="<?= $users_edit->username ?>" type="text" placeholder="Masukkan Username" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-4 col-form-label">Password</label>
          <div class="col-8">
            <input id="password" name="password" value="<?= $users_edit->password ?>" type="text" placeholder="Masukkan Password" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">Email</label>
          <div class="col-8">
            <input id="email" name="email" value="<?= $users_edit->email ?>" type="email" placeholder="Masukkan Email" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="status" class="col-4 col-form-label">Status</label>
          <div class="col-8">
            <input id="status" name="status" value="<?= $users_edit->status ?>" type="text" placeholder="Masukkan Status Anda" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="role" class="col-4 col-form-label">Role</label>
          <div class="col-8">
            <input id="role" name="role" value="<?= $users_edit->role ?>" type="text" placeholder="Masukkan Role" class="form-control" required="required">
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