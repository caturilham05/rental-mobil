<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon-icon/favicon.png')?>">
  <title>Rental Mobil || Mitra</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/iCheck/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Mitra</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Rental</b>Mobil</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= ucfirst($this->session->userdata('name_mitra'))?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?= ucfirst($this->session->userdata('name_mitra'))?>
                  <small><?= ucfirst($this->session->userdata('level_mitra'))?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= site_url('logout-mitra')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucfirst($this->session->userdata('name_mitra'))?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <li class="active"><a href="<?= site_url('dashboard-mitra')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </li>
        <li>
            <li><a href="<?= site_url('mobil%20mitra')?>"><i class="fa fa-car"></i> Mobil</a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>Mobil<small>&nbsp;Input</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tambah Data Mobil</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Mobil</h3>
            <div class="pull-right">
                <a href="<?= site_url('mobil%20mitra')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <?php //echo validation_errors(); ?>
                    <?php echo form_open_multipart('mobil/proses') ?>
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil</label>
                        <input type="hidden" name="id_mobil" value="<?=$row->id_mobil?>">
                        <input type="text" name="nama_mobil" value="<?=$row->nama_mobil?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="merek">Merek Mobil</label>
                        <input type="text" name="merek" value="<?=$row->merek?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="nopol">Nomor Polisi</label>
                        <input type="text" name="nopol" value="<?=$row->nopol?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="harga">Harga Sewa</label>
                        <input type="text" name="harga" value="<?=$row->harga?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="bahanbakar">Bahan Bakar</label>
                        <input type="text" name="bahanbakar" value="<?=$row->bahanbakar?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="tahun">Tahun Mobil</label>
                        <input type="text" name="tahun" value="<?=$row->tahun?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" cols="52" rows="5"><?=$row->deskripsi?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Mobil</label>
                        <?php if($page == 'edit'):
                            if($row->gambar != null): ?>
                            <div style="margin-bottom: 5px">
                                <img src="<?=base_url('uploads/mobil/'.$row->gambar)?>" style="width:80%">
                            </div>
                            <?php
                            endif;
                        endif; ?>
                        <input type="file" name="gambar" class="form-control">
                        <small>(Biarkan Kosong Jika Tidak <?=$page == 'edit' ? 'diganti' : 'ada' ?>)</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="AC">Air Conditioner</label>
                        <select name="AC" class="form-control" required/>
                            <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('AC') ? $this->input->post('AC') : $row->AC ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                            <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="doorlock">Door Lock</label>
                        <select name="doorlock" class="form-control" required/>
                             <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('doorlock') ? $this->input->post('doorlock') : $row->doorlock ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="antilockbrakingsystem">AntiLock Braking System</label>
                        <select name="antilockbrakingsystem" class="form-control" required/>
                            <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('antilockbrakingsystem') ? $this->input->post('antilockbrakingsystem') : $row->antilockbrakingsystem ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php }else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="brakeassist">Brake Assist</label>
                        <select name="brakeassist" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('brakeassist') ? $this->input->post('brakeassist') : $row->brakeassist ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="powersteering">Power Steering</label>
                        <select name="powersteering" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('powersteering') ? $this->input->post('powersteering') : $row->powersteering ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="driveairbag">Drive Airbag</label>
                        <select name="driveairbag" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('driveairbag') ? $this->input->post('driveairbag') : $row->driveairbag ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="passengerairbag">Passenger Airbag</label>
                        <select name="passengerairbag" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('passengerairbag') ? $this->input->post('passengerairbag') : $row->passengerairbag ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="powerwindows">Power Windows</label>
                        <select name="powerwindows" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('powerwindows') ? $this->input->post('powerwindows') : $row->powerwindows ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="cdplayer">CD Player</label>
                        <select name="cdplayer" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('cdplayer') ? $this->input->post('cdplayer') : $row->cdplayer ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="centrallocking">Central Locking</label>
                        <select name="centrallocking" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('centrallocking') ? $this->input->post('centrallocking') : $row->centrallocking ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="crashsensor">Crash Sensor</label>
                        <select name="crashsensor" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('crashsensor') ? $this->input->post('crashsensor') : $row->crashsensor ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="leatherseats">Leather Seats</label>
                        <select name="leatherseats" class="form-control" required/>
                        <?php if($page == 'edit'){ ?>
                                <?php $aksesoris = $this->input->post('leatherseats') ? $this->input->post('leatherseats') : $row->leatherseats ?>
                            <option value="1">- Ada -</option>
                            <option value="0" <?= $aksesoris == 0 ? 'selected' : NULL?>>- Tidak Ada -</option>
                            <?php } else{ ?>
                                <option value="">- Pilih -</option>
                            <option value="1">- Ada -</option>
                            <option value="0">- Tidak Ada -</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success"><i class="fa fa-send"></i>&nbsp;Save</button>
                            <?php if($page == 'add') { ?>
                            <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>&nbsp;reset</button>
                            <?php } ?>
                    </div>              
                </form>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <?= date('Y')?> Rental Mobil. All Rights Reserved.</strong>
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })
  })
  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>
</body>
</html>
