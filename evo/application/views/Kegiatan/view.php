<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan') ?>">Kelola Kegiatan</a></li>
            <li class="breadcrumb-item active">Data dari Form Kegiatan</li>
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
          <h3 class="card-title">Data dari Form Kegiatan</h3>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-sm-8">
                <table class="table table-bordered">
                    <tbody>
                        <tr><td>Judul</td><td><?= $kegiatan->judul?></td></tr>
                        <tr><td>Kapasitas</td><td><?= $kegiatan->kapasitas?></td></tr>
                        <tr><td>Harga Tiket</td><td><?= $kegiatan->harga_tiket?></td></tr>
                        <tr><td>Tanggal</td><td><?= $kegiatan->tanggal?></td></tr>
                        <tr><td>Narasumber</td><td><?= $kegiatan->narasumber?></td></tr>
                        <tr><td>Tempat</td><td><?= $kegiatan->tempat?></td></tr>
                        <tr><td>Pic</td><td><?= $kegiatan->pic?></td></tr>
                        <tr><td>Jenis id</td><td><?= $kegiatan->jenis_id?></td></tr>
                    </tbody>
                </table>  
            </div>
            <div class="col-sm-4">
              <?php
                $filefoto = base_url('/uploads/'.$kegiatan->foto_flyer);
                // echo $filefoto;
                $array = get_headers($filefoto);
                $string = $array[0];
                if(strpos($string,"200"))
                  {
                    // echo 'url exists';
                    echo '<img width="70%" src="'.$filefoto.'" class="img-thumbnail" alt="foto"/>';
                  }
                  else
                  {
                    // echo 'url does not exist';
                    echo '<img src="'.base_url('/uploads/noimage.png').'" alt="foto"/>';
                  }
              ?>
              </br>
              Nama File : <?=$kegiatan->foto_flyer?>
              </br>
              <?php
                echo form_open_multipart('kegiatan/upload');
              ?>
              <input type="hidden" name="id" value="<?=$kegiatan->id?>"/>
              <input type="file" name="foto_flyer" size="20"/>
              </br>
              <input type="submit" class="btn btn-success" value="Upload"/>
              <?php echo form_close()?>
            </div>
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
  <!-- /.content-wrapper -->