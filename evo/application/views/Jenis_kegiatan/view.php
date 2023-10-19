<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Data dari Form Jenis Kegiatan</li>
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
          <h3 class="card-title">Data dari Form Jenis Kegiatan</h3>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-sm-8">
                <table class="table table-bordered">
                    <tbody>
                        <tr><td>Id</td><td><?= $jenis_kegiatan->id?></td></tr>
                        <tr><td>Nama</td><td><?= $jenis_kegiatan->nama?></td></tr>        
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