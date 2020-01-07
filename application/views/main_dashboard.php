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
    List OIA
  </title>
  <!-- Favicon -->
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/js/plugins/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->

  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/themes/argon/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/css/app.css" rel="stylesheet" />

  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/themes/argon/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
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
</head>

<body class="">
  <?php
  $this->load->view("_partials_dashboard/left_nav");
  $this->load->view("_partials_dashboard/content");
  ?>

</body>

</html>
