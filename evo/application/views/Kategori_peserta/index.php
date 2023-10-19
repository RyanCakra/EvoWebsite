<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Daftar Kategori Peserta</h2>
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
          <h3 class="card-title">Kelola Data Kategori Peserta</h3>
        </div>
        <div class="card-body">
          <a class="btn btn-success" href="kategori_peserta/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Kegiatan Peserta</a>
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
                        foreach($list_kategori_peserta as $kategori_peserta){
                    ?>
                    <tr>
                      <td><?= $kategori_peserta -> id ?></td>
                      <td><?= $kategori_peserta -> nama ?></td>
                      <td>
                        <a href="<?php echo base_url('index.php/kategori_peserta/edit?id='. $kategori_peserta->id)?>" type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <a href="<?php echo base_url('index.php/kategori_peserta/delete?id='. $kategori_peserta->id)?>"
                        onclick="if(!confirm('Anda Yakin Akan Menghapus Data Kategori Peserta dengan id : <?=$kategori_peserta->id?>?')){return false}"
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