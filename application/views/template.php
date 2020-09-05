<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon-icon/favicon.png')?>">
  <title>Rental Mobil || Admin</title>
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
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
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
    <a href="<?php echo base_url('dashboard')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
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
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ucfirst($this->fungsi->user_login()->name)?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?php echo ucfirst($this->fungsi->user_login()->name)?>
                  <small><?php echo ucfirst($this->fungsi->user_login()->level)?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('auth/logout')?>" class="btn btn-default">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
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
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucfirst($this->fungsi->user_login()->name)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
          <a href="<?php echo site_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <?php if($this->session->userdata('level') == 'admin'): ?>
        <li class="treeview <?= $this->uri->segment(1) == 'sewa' || $this->uri->segment(1) == 'menunggu%20pembayaran' || $this->uri->segment(1) == 'menunggu%20konfirmasi' || $this->uri->segment(1) == 'pengembalian'  ? 'active'  : '' ?>">
          <a href="#">
            <i class="fa fa-th-list"></i>
            <span>Sewa Mobil</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(1) == 'menunggu%20pembayaran' ? 'class="active"' : '' ?>><a href="<?php echo site_url('menunggu%20pembayaran')?>"><i class="fa fa-circle-o"></i>Menunggu Pembayaran</a></li>
            <li <?= $this->uri->segment(1) == 'menunggu%20konfirmasi' ? 'class="active"' : '' ?>><a href="<?php echo site_url('menunggu%20konfirmasi')?>"><i class="fa fa-circle-o"></i>Menunggu Konfirmasi</a></li>
            <li <?= $this->uri->segment(1) == 'pengembalian-mobil' ? 'class="active"' : '' ?>><a href="<?php echo site_url('pengembalian')?>"><i class="fa fa-circle-o"></i>Data Pengembalian Mobil</a></li>
            <li <?= $this->uri->segment(1) == 'sewa' ? 'class="active"' : '' ?>><a href="<?php echo site_url('sewa')?>"><i class="fa fa-circle-o"></i>Data Sewa</a></li>
          </ul>
        </li>
        <?php endif ?>
        <li <?= $this->uri->segment(1) == 'mobil' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
          <a href="<?php echo site_url('mobil')?>">
            <i class="fa fa-car"></i> <span>Mobil</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('laporan-sewa')?>">
            <i class="fa fa-file"></i> <span>Laporan Sewa</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        <?php if($this->session->userdata('level') == 'admin'): ?>
        <li <?= $this->uri->segment(1) == 'biaya' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
          <a href="<?php echo site_url('biaya')?>">
            <i class="fa fa-money"></i> <span>Data Biaya</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <?php endif ?>
        <?php if($this->fungsi->user_login()->level == 'admin') { ?>
        <li class="header">SETTINGS</li>
        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?>>
          <a href="<?php echo site_url('user')?>">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'data%20mitra' ? 'class="active"' : '' ?>>
          <a href="<?php echo site_url('data%20mitra')?>">
            <i class="fa fa-user"></i>
            <span>Mitra</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <?php echo $contents ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Beta Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?= date('Y')?> Rental Mobil. All Rights Reserved.</strong>
  </footer>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js" integrity="sha512-3PRVLmoBYuBDbCEojg5qdmd9UhkPiyoczSFYjnLhFb2KAFsWWEMlAPt0olX1Nv7zGhDfhGEVkXsu51a55nlYmw==" crossorigin="anonymous"></script>
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
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.categories.js"></script>
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
<script>
    $(document).ready(function(){
        $(document).on('click', '#view', function(){
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
        })
    })
</script>
<script>
  $(function () {
    var bar_data = {
      data : [
            <?php
              foreach($row->result() as $pembayaran => $data){
                $dur = $data->durasi_sewa;
                $total = number_format($data->biaya_driver+$data->harga,0,',','.');
                if($dur == '1 hari'){
                  echo"['".($data->sewa_tgl_sewa)."', '".($total*1)."'],";
                }else if($dur == '2 hari'){
                  echo"['".($data->sewa_tgl_sewa)."', '".($total*2)."'],";
                }else{
                  echo"['".($data->sewa_tgl_sewa)."', '".($total*3.8)."']";
                }
              } 
              ?>
      ],
          
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.2,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      },
      yaxis : {
        // min: 0,
        // max: 5000,
        tickSize: 200
      }
    })

    
  });
</script>
</body>
</html>
