<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

<link href="<?= base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url('assets')?>/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>
<body>
<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?= base_url('assets')?>/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="<?= base_url('assets')?>/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="user_model.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table Siswa</p>
            </a>
          </li>
          <li>
              <a href="<?php site_url() ?>welcome/form">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Insert Data</p>
            </a>
        </li>
        </ul>
      </div>
    </div>
<script src="<?= base_url('assets')?>/js/core/jquery.min.js"></script>
<script src="<?= base_url('assets')?>/js/core/popper.min.js"></script> 
<script src="<?= base_url('assets')?>/js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets')?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>