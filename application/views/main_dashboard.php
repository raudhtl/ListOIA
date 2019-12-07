<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List OIA</title>
    <meta name="description" content="List OIA">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/themes/ElaAdmin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/themes/ElaAdmin/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
</head>



<body>
	<?php 
		$this->load->view("_partials_dashboard/left_nav");
		$this->load->view("_partials_dashboard/content");
		$this->load->view("_partials_dashboard/footer");
	?>
		
	<!-- TODO load jq here -->
	<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/themes/ElaAdmin/assets/js/main.js"></script>
    <script src="<?php echo base_url()?>assets/themes/ElaAdmin/assets/js/init/fullcalendar-init.js"></script>
</body>
</html>
