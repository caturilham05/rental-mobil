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
<link href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
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

	<!-- detail mobil -->
	<?php foreach($row->result() as $detail => $data):?>
	<section class="listing-detail">
		<div class="container">
			<div class="listing_detail_head row">
				<div class="col-md-9">
					<h2><?= $data->merek?> , <?= $data->nama_mobil?></h2>
					<img src="<?= base_url('uploads/mobil/'.$data->gambar)?>" alt="">
				</div>
				<div class="col-md-3">
					<div class="price_info">
						<h6><p>Rp. <?= number_format($data->harga,0,',','.')?></p> / Hari</h6>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="main_features">
						<ul>
							<li><i class="fa fa-calendar"></i>
								<h5><?= $data->tahun?></h5>
								<bold>Tahun Mobil</bold>
							</li>
							<li><i class="fa fa-cogs"></i>
								<h5><?= $data->bahanbakar?></h5>
								<bold>Bahan Bakar</bold>
							</li>
						</ul>
					</div>
					<div class="listing_more_info">
						<div class="listing_detail_wrap">
							<ul class="nav nav-tabs gray-bg" role="tablist">
								<li class="active" role="presentation">
									<a href="#vehicle-overview" aria-controls="vehicle-overview" role="tab" data-toggle="tab">Deskripsi Kendaraan</a>
								</li>
								<li role="presentation">
									<a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="vehicle-overview">
									<p><?=$data->deskripsi?></p>
								</div>
								<div class="tab-pane" id="accessories" role="tabpanel">
									<table>
										<thead>
											<tr>
												<th colspan="2">Accessories</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Air Conditioner</td>
												<?php if($data->AC == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Door Lock</td>
												<?php if($data->doorlock == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>AntiLock Braking System</td>
												<?php if($data->antilockbrakingsystem == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Brake Assist</td>
												<?php if($data->brakeassist == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Power Steering</td>
												<?php if($data->powersteering == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Drive Airbag</td>
												<?php if($data->driveairbag == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Passenger Airbag</td>
												<?php if($data->passengerairbag == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Power Windows</td>
												<?php if($data->powerwindows == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>CD Player</td>
												<?php if($data->cdplayer == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Central Locking</td>
												<?php if($data->centrallocking == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Crash Sensor</td>
												<?php if($data->crashsensor == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
											<tr>
												<td>Leather Seats</td>
												<?php if($data->leatherseats == '1'){ ?>
												<td><i class="fa fa-check" aria-hidden="true"></i></td>
												<?php }else{ ?>
												<td><i class="fa fa-close" aria-hidden="true"></i></td>
												<?php } ?>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<aside class="col-md-3">
				<div class="share_vehicle">
					<p>Share:&nbsp; 
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="#"><i class="fa fa-twitter-square"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-whatsapp"></i></a>
					</p>
				</div>
				<div class="sidebar_widget">
					<div class="widget_heading">
						<h5><i class="fa fa-envelope"></i>Sewa Sekarang</h5>
					</div>
					<?php if($this->session->userdata('username')) { ?>
						<a href="<?= site_url('booking/sewa/mobil/kode'.$data->id_mobil)?>" class="btn">Sewa Sekarang</a>
					<?php }else{?>
						<a href="<?= site_url('login-user')?>" class="btn">Login</a>
					<?php }?>
				</div>
				</aside>
			</div>
		</div>
	</section>
	<?php endforeach ?>
	<!-- end detail mobil -->

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