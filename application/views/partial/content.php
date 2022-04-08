<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  
    <!-- CSS Files -->
    <link href="<?= base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets')?>/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>
<body>
<div class="wrapper">
<div class="main-panel">
<div class="content">
      <div class="row">
          <div class="col-xl">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tabel Siswa</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="tabelsiswa">
                  
                    <thead class=" text-primary">
                      <th>
                        NIS
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Telpon
                      </th>
                      <th>
                        Tanggal Lahir
                      </th>
                      <th>
                        Agama
                      <th>
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($siswa as $u):
                        ?>
                      <tr>
                        <td>
                        <?=$u['nis'];?>
                        </td>
                        <td>
                        <?=$u['nama'];?>
                        </td>
                        <td>
                        <?=$u['alamat'];?>
                        </td>
                        <td>
                        <?=$u['no_telp'];?>
                        </td>
                        <td>
                        <?=$u['tgl_lahir'];?>
                        </td>
                        <td>
                        <?=$u['agama'];?>
                        </td>
                        <td>
                        <a href="<?php base_url() ?>welcome/hapus/<?=$u['nis']?>">
                        <i class="nc-icon nc-simple-delete"></i></a>
                        <a href="<?php base_url() ?>welcome/formEdit/<?=$u['nis']?>">
                        <i class="nc-icon nc-refresh-69"></i></a>
                      </td>
                      </tr>
                      <?php
                        endforeach;
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <script>
          $(document).ready(function(){
            $('#tabelsiswa').DataTable();
          });
          </script>

          
 <!--   Core JS Files   -->
  <script src="<?= base_url('assets')?>/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets')?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets')?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
</body>