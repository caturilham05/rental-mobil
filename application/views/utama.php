<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Rental Mobil</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" type="text/css">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" type="text/css">
<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css')?>" type="text/css">
<link rel="stylesheet" href="<?= base_url('assets/css/owl.transitions.css')?>" type="text/css">
<link href="<?= base_url('assets/css/slick.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/css/bootstrap-slider.min.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?= base_url('assets/switcher/css/switcher.css')?>" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url('assets/switcher/css/red.css')?>" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url('assets/switcher/css/orange.css')?>" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url('assets/switcher/css/blue.css')?>" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url('assets/switcher/css/pink.css')?>" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url('assets/switcher/css/green.css')?>" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url('assets/switcher/css/purple.css')?>" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/images/favicon-icon/apple-touch-icon-114-precomposed.html')?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')?>">
<link rel="shortcut icon" href="<?= base_url('assets/images/favicon-icon/favicon.png')?>">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php $this->load->view('home/template/colorswitcher')?>
<!-- /Switcher -->  
        
<!--Header-->
<?php $this->load->view('home/template/header')?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container" >
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Cari Mobil untuk kenyamanan anda.</h1>
            <p>Kami Punya beberapa pilihan untuk anda. </p>
            <a href="<?= site_url('daftar-mobil')?>" class="btn">Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 

<!-- resent car -->
<section class="section-padding">
  <div class="container">
    <div class="recent-tab">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#resentnewcar" role="tab" data-toggle="tab">Mobil Untuk Anda</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
          <?php foreach($row->result() as $mobil => $data){ ?>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box">
                <img src="<?= base_url('uploads/mobil/'.$data->gambar)?>" class="img-responsive" alt="image"></a>
                <ul>
                  <li><i class="fa fa-car" aria-hidden="true"></i><?=$data->bahanbakar?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?=$data->tahun?></li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#"><?=$data->merek?> , <?=$data->nama_mobil?></a></h6>
                <span class="price">Rp.<?=number_format($data->harga,0,',','.')?> / Hari</span> 
              </div>
              <div class="inventory_info_m">
                <p><?=substr($data->deskripsi,0,100)?> .....</p>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </div>
            <div class="recent-tab" style="margin-top: 5%">
              <a href="<?= site_url('daftar-mobil')?>" class="btn btn-info">Daftar Mobil</a>
            </div>
  </div>
</section>
<!-- end resent car -->

<!-- abaout -->
<section class="about_us section-padding gray-bg">
  <div class="container" id="about">
    <div class="section-header text-center">
      <h2>Tentang Kami</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel provident odio doloribus laudantium fugit qui modi eum, assumenda fuga, aut illo sint enim esse unde sapiente repellendus similique! In non provident nesciunt ratione unde expedita error aliquam rem architecto cupiditate, optio vitae labore nostrum deleniti, consequatur, assumenda perferendis odit dolorum? Molestias labore nobis reiciendis? Tempore quis voluptatem quos perferendis rerum aspernatur. Quod quibusdam soluta, ab, itaque sunt voluptates necessitatibus et ipsa quidem doloribus iusto obcaecati praesentium ratione? Autem adipisci blanditiis suscipit a dolor, quaerat recusandae, soluta neque distinctio nisi maxime sunt exercitationem nemo accusantium est repellat iusto commodi, sint sit?</p>
    </div>
  </div>
</section>
<!-- akhir abaout -->


<!--Footer -->
<?php $this->load->view('home/template/footer')?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!-- Scripts --> 
<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script> 
<script src="<?= base_url('assets/js/interface.js')?>"></script> 
<!--Switcher-->
<script src="<?= base_url('assets/switcher/js/switcher.js')?>"></script>
<!--bootstrap-slider-JS--> 
<script src="<?= base_url('assets/js/bootstrap-slider.min.js')?>"></script> 
<!--Slider-JS--> 
<script src="<?= base_url('assets/js/slick.min.js')?>"></script> 
<script src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>

<script src="<?= base_url('assets/js/scroll.js')?>"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>