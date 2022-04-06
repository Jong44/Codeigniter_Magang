<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>
<body>
<body class="">
<div class="wrapper ">
<div class="content">
<div class="main-panel">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Siswa</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th>
                        alamat
                      </th>
                      <th>
                        Telpon
                      </th>
                      <th>
                        Tanggal Lahir
                      </th><th>
                        Agama
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      $nisn = 1;
                      foreach ($siswa as $u):
                        ?>
                      <tr>
                        <td>
                          <?=$nisn++;?>
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
                      </tr>
                      <?php
                        endforeach;
                        ?>
                        <a href="<?php base_url() ?>index.php/welcome/form">link tambah</a>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
   


 <!--   Core JS Files   -->
 <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
</body>