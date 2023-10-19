<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1><?=$judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
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
            <h3>Form Users</h3>
        </div>
        <div class="card-body">
          <?php echo form_open('users/save')?>
            <div class="form-group row">
                <label for="id" class="col-4 col-form-label">Id</label> 
                <div class="col-8">
                <input id="id" name="id" type="text" placeholder="Masukkan Id" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Username</label> 
                <div class="col-8">
                <input id="username" name="username" type="text" placeholder="Masukkan Username" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                <input id="password" name="password" type="text" placeholder="Masukkan Password" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" type="email" placeholder="Masukkan Email" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-4 col-form-label">Created at</label> 
                <div class="col-8">
                <input id="created_at" name="created_at" type="text" placeholder="YYYY-DD-MM Jam-Menit-Detik" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_login" class="col-4 col-form-label">Last Login</label> 
                <div class="col-8">
                <input id="last_login" name="last_login" type="text" placeholder="YYYY-DD-MM Jam-Menit-Detik"" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-4 col-form-label">Status</label> 
                <div class="col-8">
                <input id="status" name="status" type="text" placeholder="Masukkan Status Anda" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-4 col-form-label">Role</label> 
                <div class="col-8">
                <input id="role" name="role" type="text" placeholder="Masukkan Role" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
          <?php echo form_close()?>
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