<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Daftar Kegiatan</h2>
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
          <h3 class="card-title">Kelola Data Kegiatan</h3>
        </div>
        <div class="card-body">
          <a class="btn btn-success" href="kegiatan/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Kegiatan</a>
          <br>
          <br>
          <div class="container-fluid">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Kapasitas</th>
                      <th scope="col">Harga Tiket</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Narasumber</th>
                      <th scope="col">Tempat</th>
                      <th scope="col">Pic</th>
                      <th scope="col">Jenis id</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($list_kegiatan as $kegiatan){
                    ?>
                    <tr>
                      <td><?= $kegiatan -> id ?></td>
                      <td><?= $kegiatan -> judul ?></td>
                      <td><?= $kegiatan -> kapasitas ?></td>
                      <td><?= $kegiatan -> harga_tiket ?></td>
                      <td><?= $kegiatan -> tanggal ?></td>
                      <td><?= $kegiatan -> narasumber ?></td>
                      <td><?= $kegiatan -> tempat ?></td>
                      <td><?= $kegiatan -> pic ?></td>
                      <td><?= $kegiatan -> jenis_id ?></td>
                      <td>
                        <a href="<?php echo base_url('index.php/kegiatan/view?id='. $kegiatan->id)?>" type="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="<?php echo base_url('index.php/kegiatan/edit?id='. $kegiatan->id)?>" type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <a href="<?php echo base_url('index.php/kegiatan/delete?id='. $kegiatan->id)?>"
                        onclick="if(!confirm('Anda Yakin Akan Menghapus Data Kegiatan dengan id : <?=$kegiatan->id?>?')){return false}"
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
    <br>
    <br>
</div>