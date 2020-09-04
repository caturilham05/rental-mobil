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

	<!-- booking -->
	<section class="user_profile inner_pages">
		<div class="container">
			<div class="user_profile_info">
				<div class="col-md-12 col-sm-10">
					<?php 
						foreach($row->result() as $detail => $data): ?>
						<?php echo form_open_multipart('booking/proses') ?>
						<div class="form-group">
						<label for="tgl_sewa">Tanggal Sewa</label>
							<input type="hidden" name="mobil" value="<?= $data->id_mobil?>" class="form-control" required/>
							<input type="hidden" name="name" value="<?= $this->session->userdata('name')?>" class="form-control" required/>
							<input type="date" name="tgl_sewa" value="" class="form-control" required/>
						</div>

						<div class="form-group">
							<label for="tgl_kembali">Tanggal Kembali</label>
							<input type="date" name="tgl_kembali" value="" class="form-control" required/>
						</div>

						<div class="form-group">
							<label for="lokasi">Alamat</label>
							<input type="text" name="lokasi" class="form-control" placeholder="Alamat" required/>
						</div>

						<div class="form-group">
							<label for="waktu_pengambilan">Waktu Pengambilan</label>
							<select name="waktu_pengambilan" class="form-control" required/>
								<option value="">- Pilih Waktu Pengambilan -</option>
								<option value="09:00 AM">- 09:00 AM -</option>
								<option value="10:00 AM">- 10:00 AM -</option>
								<option value="11:00 AM">- 11:00 AM -</option>
								<option value="12:00 PM">- 12:00 PM -</option>
								<option value="01:00 PM">- 01:00 PM -</option>
								<option value="02:00 PM">- 02:00 PM -</option>
								<option value="03:00 PM">- 03:00 PM -</option>
							</select>
						</div>

						                    
						<div class="form-group">
                        	<label for="email">Email</label>
                        	<input type="email" name="email" placeholder="Email" class="form-control" required/>
                    	</div>
                    
						<div class="form-group">
							<label for="telepon">Telepon</label>
							<input type="text" name="telepon" placeholder="Nomor Telepon" class="form-control" required/>
						</div>
                    

						<div class="form-group">
                       		<label for="durasi_sewa">Durasi Sewa</label>
                        		<select name="durasi_sewa" class="form-control" required/>
                            		<option value="">- Pilih Durasi Sewa -</option>
									<option value="1 hari">- 1 Hari -</option>
									<option value="2 hari">- 2 Hari -</option>
									<option value="lebih 3 hari">- Lebih 3 Hari -</option>
								</select>
                    	</div>						
                    
						<div class="form-group">
                        <label for="biaya">Driver / Tidak</label>
                            <select name="biaya" class="form-control" required/>
                                <option value="">- Driver / Tidak -</option>
                                <?php foreach($driver->result()  as $biaya => $denda) { ?>
                                <option value="<?=$denda->id_biaya?>">
                                <?=$denda->keterangan?></option>
                                <?php } ?>
                            </select>
						</div>
					
						
						<div class="form-group">
                        	<label for="harga">Harga</label>
							<input type="text" name="harga" value="<?=$data->harga?>" class="form-control" readonly/>
						</div>
						
						<!-- <div class="form-group">
							<label for="bukti_pembayaran">Bukti Pembayaran</label>
							<input type="file" name="bukti_pembayaran" class="form-control">
                    	</div> -->

						<div class="form-group">
							<label for="status">Status</label>
							<input type="text" name="status" value="menunggu pembayaran" class="form-control" readonly/>
						</div></br>

						<div class="form-group">
                        <button type="submit" name="add" class="btn btn-success "><i class="fa fa-send"></i>&nbsp;Sewa Sekarang</button>
                    </div>
					</form>
					<?php endforeach ?>
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