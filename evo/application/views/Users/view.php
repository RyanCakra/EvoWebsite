<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php/users')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Kelola Users</li>
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
          <h3 class="card-title">Data dari Form Users</h3>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-sm-8">
                <table class="table table-bordered">
                    <tbody>
                        <tr><td>Username</td><td><?= $users->username?></td></tr>
                        <tr><td>Password</td><td><?= $users->password?></td></tr>
                        <tr><td>Email</td><td><?= $users->email?></td></tr>  
                        <tr><td>Created at</td><td><?= $users->created_at?></td></tr>
                        <tr><td>Last Login</td><td><?= $users->last_login?></td></tr>  
                        <tr><td>Status</td><td><?= $users->status?></td></tr>
                        <tr><td>Role</td><td><?= $users->role?></td></tr>               
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
</div>
  <!-- /.content-wrapper -->