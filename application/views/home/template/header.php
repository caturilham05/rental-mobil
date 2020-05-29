
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="<?= site_url('/')?>"><img src="<?= base_url('assets/images/logo11.png')?>" alt="image"/></a></div>
        </div>
        <?php if($this->session->userdata('name')){?>
          <small><h6>Hallo, <?php echo ucfirst($this->session->userdata('name'))?>  !</h6></small>
        <?php } ?>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">rentalmobil@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Services Call Us: </p>
              <a href="+62-896-4819-7626">+62-896-4819-7626</a> </div>
            <!-- <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
	        <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
           
            <!-- <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li> -->
              <?php if($this->session->userdata('username')): ?>
              <li><a href="<?= site_url('riwayat%20sewa')?>">Riwayat Sewa</a></li>
                <?php endif ?>
            <?php if($this->session->userdata('username')) { ?>
            <li><a href="<?= site_url('logout')?>">Keluar</a></li>
            <?php }else{ ?>
            <li><a href="<?= site_url('login-user')?>">Log In</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="<?= site_url('/')?>">Home</a></li>        	 
          <li><a href="<?= site_url('daftar-mobil')?>">Daftar Mobil</a>
          <?php if($this->session->userdata('username')): ?>
          <li><a href="<?= site_url('mitra')?>">Mitra</a></li>
          <?php endif?>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#">Hubungi Kami</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
</header>