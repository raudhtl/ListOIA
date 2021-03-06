<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    SISTEM INFORMASI INTERNASIONALISASI UNIVERSITAS SYIAH KUALA
  </title>
  <!-- Favicon -->
  <link href="<?php echo base_url() ?>assets/images/oia-logo.jpeg" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS Files -->

  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/app.css" rel="stylesheet" />

  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/app.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/app.css" rel="stylesheet" />

  <script>
    var BASE_URL = '<?php echo base_url(); ?>index.php/';
  </script>


  <!--   Core   -->
  <script src="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

  <!--   Optional JS   -->
  <script src="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="<?php echo base_url() ?>assets/themes/argon/assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <!-- APPS -->
  <script src="<?php echo base_url() ?>assets/js/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/themes/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
  <style>
    .submenuapp{
      margin-left: 2.5rem;
    }
    .btn-add{
		background-color: DodgerBlue;
		border: none;
		color: white;
		padding: 12px 16px;
		font-size: 16px;
		cursor: pointer;
	}
  .btn-add:hover {
	  background-color: RoyalBlue;
  }
    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        display: none;
        z-index: 2;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        filter: blur(0px);
        -webkit-filter: blur(0px);

        /*border: 16px solid #f3f3f3;*/
        /*border-radius: 50%;*/
        /*border-top: 16px solid #3498db;*/
        width: 120px;
        height: 120px;
        /*-webkit-animation: spin 2s linear infinite;*/
        /*animation: spin 2s linear infinite;*/
    }

    /*@-webkit-keyframes spin {*/
    /*    0% { -webkit-transform: rotate(0deg); }*/
    /*    100% { -webkit-transform: rotate(360deg); }*/
    /*}*/

    /*@keyframes spin {*/
    /*    0% { transform: rotate(0deg); }*/
    /*    100% { transform: rotate(360deg); }*/
    /*}*/

  </style>
</head>

<body class="">
    <div id="loader">
        <img src="<?php echo base_url() ?>assets/images/Ellipsis.gif"/>
    </div>
    <div id="coba">
        <?php
            $this->load->view("_partials_dashboard/left_nav");
            $this->load->view("_partials_dashboard/content");
        ?>
    </div>
</body>

</html>
