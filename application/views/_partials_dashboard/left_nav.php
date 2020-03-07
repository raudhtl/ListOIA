<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="#">
      <img src="<?php echo base_url() ?>assets/images/oia-logo.jpeg" class="navbar-brand-img" alt="...">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="<?php echo base_url() ?>assets/images/profile-user.png">
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a href="<?php echo site_url() ?>/login/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="#">
              <img src="<?php echo base_url() ?>assets/images/oia-logo.jpeg">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <!-- <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form> -->
      <!-- Navigation -->
      <ul id="grupmenu" class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link menu-app active" data-id="DASHBOARD" data-val="Dashboard/beranda"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>

        <li data-toggle="collapse" data-target="#shortterm" class="collapsed">
          <a class="nav-link menu-app" href="#"><i class="ni ni-planet text-blue"></i> Short Term</a>
        </li>
        <ul class="collapse navbar-nav collap" id="shortterm">
          <li class="nav-item">
            <a class="nav-link menu-app submenuapp" data-id="SHORT TERM" data-val="Short_term/list">
              <i class="ni ni-bold-right text-blue"></i> Daftar Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-app submenuapp" data-id="SHORT TERM" data-val="Short_term/upload">
              <i class="ni ni-bold-right text-blue"></i> Tambah Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-app submenuapp" data-id="SHORT TERM" data-val="Short_term/edit">
              <i class="ni ni-bold-right text-blue"></i> Edit Program
            </a>
          </li>
        </ul>

		  <li data-toggle="collapse" data-target="#studentexchange" class="collapsed">
			  <a class="nav-link menu-app" href="#"><i class="ni ni-planet text-blue"></i> Student Exchange</a>
		  </li>
		  <ul class="collapse navbar-nav collap2" id="studentexchange">
			  <li class="nav-item">
				  <a class="nav-link menu-app submenuapp" data-id="STUDENT EXCHANGE" data-val="Student_exchange/daftar">
					  <i class="ni ni-bold-right text-blue"></i> Daftar Mahasiswa
				  </a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link menu-app submenuapp" data-id="STUDENT EXCHANGE" data-val="Student_exchange/upload">
					  <i class="ni ni-bold-right text-blue"></i> Tambah Mahasiswa
				  </a>
			  </li>
		  </ul>
		  <?php
		  if($this->session->userdata('ses_rule') == 1){
		  	?>
			  <li data-toggle="collapse"  class="collapsed">
				  <a class="nav-link menu-app" data-id="Kelola Akun" data-val="Manage_account" ><i class="ni ni-planet text-blue"></i> Kelola Akun</a>
			  </li>
		  <?php
		  }
		  ?>
      </ul>
    </div>
  </div>
</nav>
