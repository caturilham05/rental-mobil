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

	<!-- booking -->
	<section class="user_profile inner_pages">
		<div class="container">
			<div class="user_profile_info">
				<div class="col-md-12 col-sm-10">
						<?php echo form_open_multipart('booking/proses') ?>
						<?php if($row->status == 'pembayaran terkonfirmasi') { ?>
							<div class="form-group">
								<label for="bukti">Bukti Transfer</label>
							<?php if($row->bukti != null): ?>
								<div style="margin-bottom: 5px">
									<img src="<?php echo base_url('uploads/transaksi/'.$row->bukti) ?>" style="width:75%">
								</div>
							<?php endif ?>
							</div>

							<div class="form-group">
							<label for="status">Status</label>
							<input type="hidden" name="id_detail_sewa" value="<?= $row->id_detail_sewa?>" class="form-control" required/>
							<select name="status" class="form-control">
								<?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
								<option value="pembayaran terkonfirmasi" <?= $status == 'pembayaran terkonfirmasi' ? 'selected' : null ?>>-- Pembayaran Terkonfirmasi --</option>
								<option value="selesai" <?= $status == 'selesai' ? 'selected' : null ?>>-- Selesai --</option>
							</select>
						</div>
						<?php }else if($row->status == 'menunggu konfirmasi') { ?>
							<div class="form-group">
								<label for="bukti">Bukti Transfer</label>
							<?php if($row->bukti != null): ?>
								<div style="margin-bottom: 5px">
									<img src="<?php echo base_url('uploads/transaksi/'.$row->bukti) ?>" style="width:75%">
								</div>
							<?php endif ?>
							</div>

							<div class="form-group">
								<label for="status">Status</label>
								<input type="text" name="status" value="<?= $row->status ?>" class="form-control" disabled>
							</div>
						<?php }else{ ?>
						<div class="form-group">
							<label for="bukti">Bukti Pembayaran</label>
							<input type="file" name="bukti" class="form-control">
							<input type="hidden" name="id_detail_sewa" value="<?= $row->id_detail_sewa?>" class="form-control" required/>
							<input type="hidden" name="id_mobil" value="<?= $row->id_mobil?>" class="form-control" required/>
							<input type="hidden" name="name" value="<?= $this->session->userdata('name')?>" class="form-control" required/>
                    	</div>

						<div class="form-group">
							<label for="status">Status</label>
							<select name="status" class="form-control">
								<?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
								<option value="menunggu pembayaran" <?= $status == 'menunggu pembayaran' ? 'selected' : null ?>>-- Menunggu Pembayaran --</option>
								<option value="menunggu konfirmasi" <?= $status == 'menunggu konfirmasi' ? 'selected' : null ?>>-- Konfirmasi Bukti Pembayaran --</option>
								<option value="batal" <?= $status == 'batal' ? 'selected' : null ?>>-- batal --</option>
							</select>
						</div>
						<?php } ?>
						</br>
						<?php if($row->status == 'menunggu konfirmasi') { ?>
						<div class="form-group">
							<a href="<?= site_url('riwayat%20sewa')?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Back</a>
						</div>
						<?php }else { ?>
						<div class="form-group">
                        	<button type="submit" name="edit" class="btn btn-success "><i class="fa fa-send"></i>&nbsp;Edit</button>
                   		</div>
						<?php } ?>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- end booking -->

<!--Footer -->
<?php $this->load->view('home/template/footer')?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!-- Scripts --> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script> 
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