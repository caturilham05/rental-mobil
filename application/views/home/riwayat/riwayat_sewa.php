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

    <!-- content -->
    <section class="user_profile inner_pages">
        <center><h3>Riwayat Sewa</h3></center>
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-responsive" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center" class="text-center">Kode Sewa</th>
                            <th class="text-center">Penyewa</th>
                            <th class="text-center">Tanggal Sewa</th>
                            <th class="text-center">Tanggal Kembali</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Mobil</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                            <?php 
                                $no = 1;
                                foreach($row->result() as $riwayat => $data) : ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $data->sewa_kode_sewa ?></td>
                            <td class="text-center"><?= $data->name ?></td>
                            <td class="text-center"><?= $data->sewa_tgl_sewa ?></td>
                            <td class="text-center"><?= $data->sewa_tgl_kembali ?></td>
                            <td class="text-center">Rp.<?=number_format($data->biaya_driver+$data->harga,0,',','.')?></td>
                            <td class="text-center"><?=$data->mobil_nama_mobil?></td>
                            <td class="text-center"><?=$data->status?></td>
                            <td class="text-center">
                            <a href="<?= site_url('riwayat%20sewa/upload-pembayaran/'.$data->id_detail_sewa)?>" class="btn btn-xs">Edit</a>
                            <a id="select" class="btn btn-xs" data-toggle="modal" data-target="#modal-detail"
                                data-kodesewa="<?= $data->sewa_kode_sewa?>"
                                data-namapengguna="<?= $data->name?>"
                                data-tglsewa="<?= $data->sewa_tgl_sewa?>"
                                data-tglkembali="<?= $data->sewa_tgl_kembali?>"
                                data-lokasisewa="<?= $data->lokasi?>"
                                data-pengambilan="<?= $data->waktu_pengambilan?>"
                                data-emailpenyewa="<?= $data->email?>"
                                data-teleponpenyewa="<?= $data->telepon?>"
                                data-durasi="<?= $data->durasi_sewa?>"
                                data-driver="<?=number_format($data->biaya_driver,0,',','.')?>"
                                data-hargamobil="<?=number_format($data->harga,0,',','.')?>"
                                data-totalsemua="<?=number_format($data->biaya_driver+$data->harga,0,',','.')?>"
                                data-mobil="<?= $data->mobil_nama_mobil?>"
                                data-statussewa="<?= $data->status?>"
                                data-buktitransfer="
                                <?php if($data->bukti != null){ ?>
                                    <?= $data->bukti?> 
                                <?php }else{ ?>
                                Silahkan upload bukti pembayaran
                                <?php } ?>                                    
                                ">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                            <?php endforeach ?>
                </table>
            </div>
    </section>

    <!-- modal -->
    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="close" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h4 class="modal-title">Detail Riwayat Sewa</h4></center>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th width="200">Kode Sewa :</th>
                                <td><center><span id="sewa_kode_sewa"></center></span></td>
                            </tr>
                            <tr>
                                <th>Penyewa :</th>
                                <td><center><span id="name"></span></center></td>
                            </tr>
                            <tr>
                                <th>Tanggal Sewa :</th>
                                <td><center><span id="sewa_tgl_sewa"></span></center></td>
                            </tr>
                            <tr>
                                <th>Tanggal Kembali :</th>
                                <td><center><span id="sewa_tgl_kembali"></span></center></td>
                            </tr>
                            <tr>
                                <th>Lokasi :</th>
                                <td><center><span id="lokasi"></span></center></td>
                            </tr>
                            <tr>
                                <th>Waktu Pengambilan :</th>
                                <td><center><span id="waktu_pengambilan"></center></span></td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td><center><span id="email"></span></center></td>
                            </tr>
                            <tr>
                                <th>Telepon :</th>
                                <td><center><span id="telepon"></span></center></td>
                            </tr>
                            <tr>
                                <th>Durasi Sewa :</th>
                                <td><center><span id="durasi_sewa"></center></span></td>
                            </tr>
                            <tr>
                                <th>Biaya Driver :</th>
                                <td><center><span id="biaya_driver"></span></center></td>
                            </tr>
                            <tr>
                                <th>Harga :</th>
                                <td><center><span id="harga"></span></center></td>
                            </tr>
                            <tr>
                                <th>Total :</th>
                                <td><center><span id="total"></span></center></td>
                            </tr>
                            <tr>
                                <th>Mobil :</th>
                                <td><center><span id="mobil_nama_mobil"></span></center></td>
                            </tr>
                            <tr>
                                <th>Status :</th>
                                <td><center><span id="status"></span></center></td>
                            </tr>
                            <tr>
                                <th>Bukti Transfer :</th>
                                <?php if($data->bukti != null){ ?>
                                <td>
                                <center><img src="<?=base_url('uploads/transaksi/'.$data->bukti)?>" id="transfer"></center>
                                </td>
                                <?php }else{ ?>
                                <td>
                                <center><b id="transfer"></b></center>
                                </td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    
    <!-- end content -->

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
<script>
    $(document).ready(function(){
        $(document).on('click', '#select', function(){
            var kodesewa = $(this).data('kodesewa');
            var namapengguna = $(this).data('namapengguna');
            var tglsewa = $(this).data('tglsewa');
            var tglkembali = $(this).data('tglkembali');
            var lokasisewa = $(this).data('lokasisewa');
            var pengambilan = $(this).data('pengambilan');
            var emailpenyewa = $(this).data('emailpenyewa');
            var teleponpenyewa = $(this).data('teleponpenyewa');
            var durasi = $(this).data('durasi');
            var driver = $(this).data('driver');
            var hargamobil = $(this).data('hargamobil');
            var totalsemua = $(this).data('totalsemua');
            var mobil = $(this).data('mobil');
            var statussewa = $(this).data('statussewa');
            var buktitransfer = $(this).data('buktitransfer');
                $('#sewa_kode_sewa').text(kodesewa);
                $('#name').text(namapengguna);
                $('#sewa_tgl_sewa').text(tglsewa);
                $('#sewa_tgl_kembali').text(tglkembali);
                $('#lokasi').text(lokasisewa);
                $('#waktu_pengambilan').text(pengambilan);
                $('#email').text(emailpenyewa);
                $('#telepon').text(teleponpenyewa);
                $('#durasi_sewa').text(durasi);
                $('#biaya_driver').text(driver);
                $('#harga').text(hargamobil);
                $('#total').text(totalsemua);
                $('#mobil_nama_mobil').text(mobil);
                $('#status').text(statussewa);
                 $('#transfer').text(buktitransfer);
        })
    })
</script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>