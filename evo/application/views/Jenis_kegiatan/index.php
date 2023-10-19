<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Daftar Jenis Kegiatan</h2>
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
          <h3 class="card-title">Kelola Data Jenis Kegiatan</h3>
        </div>
        <div class="card-body">
          <a class="btn btn-success" href="jenis_kegiatan/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Jenis Kegiatan</a>
          <br>
          <br>
          <div class="container-fluid">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($list_jenis_kegiatan as $jenis_kegiatan){
                    ?>
                    <tr>
                      <td><?= $jenis_kegiatan -> id ?></td>
                      <td><?= $jenis_kegiatan -> nama ?></td>
                      <td>
                        <a href="<?php echo base_url('index.php/jenis_kegiatan/edit?id='. $jenis_kegiatan->id)?>" type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <a href="<?php echo base_url('index.php/jenis_kegiatan/delete?id='. $jenis_kegiatan->id)?>"
                        onclick="if(!confirm('Anda Yakin Akan Menghapus Data Jenis Kegiatan dengan id : <?=$jenis_kegiatan->id?>?')){return false}"
                        type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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