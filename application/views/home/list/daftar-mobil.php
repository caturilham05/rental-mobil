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

<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Daftar Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="<?= site_url('/')?>">Home</a></li>
        <li class="active">Daftar Mobil</li>
      </ul>
    </div>
  </div>
   <!-- Dark Overlay-->
   <div class="dark-overlay"></div>
</section>
<!--Listing-->
<section class="listing-page">
    <div class="container">
        <!-- row -->
                <div class="result-sorting-wrapper">
                    <div class="sorting-count">
                        <p><span><?= $this->db->count_all('mobil')?>&nbsp;&nbsp;Mobil</span></p>
                    </div>
                </div>
        <div class="row">
            <!-- sidebar -->
            <aside class="col-lg-3">
                <!-- widget filter -->
                <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-filter"></i>Cari Mobil</h5>
                    </div>
                    <div class="sidebar_filter">
                        <form action="#" method="post">
                            <div class="form-group select">
                                <select name="" id="" class="form-control" style="cursor: pointer">
                                <option value="">Pilih Merek</option>
                                <option value="">Honda</option>
                                </select>
                            </div>
                            
                            <div class="form-group select">
                                <select name="" id="" class="form-control" style="cursor: pointer">
                                <option value="">Jenis Bahan Bakar</option>
                                <option value="">Bensin</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i>Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                    <!-- end widget filter -->
                    <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-car"></i>Mobil Terbaru</h5>
                    </div>
                    <?php foreach($row->result() as $mobil => $data):?>
                    <div class="recent_addedcars">
                        <ul>
                            <li class="gray-bg">
                                <div class="recent_post_img">
                                    <a href="<?= site_url('detail-mobil/'.$data->nama_mobil)?>"><img src="<?= base_url('uploads/mobil/'.$data->gambar)?>" alt="image"></a>
                                </div>
                                <div class="recent_post_title">
                                <a href="<?=site_url('detail-mobil/'.$data->id_mobil)?>"><?= $data->merek?>, <?= $data->nama_mobil?></a>
                                <p class="widget_price">Rp.<?= number_format($data->harga,0,',','.')?> / hari</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?php endforeach ?>
                </div>
            </aside>
            <!-- end sidebar -->
            <!-- col data mobil -->
            <?php foreach($row->result()as $mobil => $data): ?>
            <div class="col-lg-9 col-md-auto-3">
                <div class="poduct-listing-m grey-bg">
                    <div class="product-listing-img"></br>
                        <img src="<?= base_url('uploads/mobil/'.$data->gambar)?>" class="img-responsive" alt="Image"></br>
                    </div>
                    <div class="product-listing-content"></br>
                        <h5><a href="#"><?= $data->merek?>, <?= $data->nama_mobil?></a></h5>
                        <p class="list-price">Rp.<?= number_format($data->harga,0,',','.')?> / Hari</p>
                        <ul>
                        <li><i class="fa fa-calendar"></i>Tahun <?= $data->tahun?></li>
                        <li><i class="fa fa-car"></i><?= $data->bahanbakar?></li>
                        </ul>
                        <a href="<?= site_url('detail-mobil/'.$data->id_mobil)?>" class="btn">Lihat Detail <span class="angle_arrow"><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- end col data mobil -->
            <?php endforeach ?>
        </div>
        <!-- end row -->
    </div>
</section>
<!-- /Listing-->
<!--Footer -->
<?php $this->load->view('home/template/footer')?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!-- Scripts --> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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