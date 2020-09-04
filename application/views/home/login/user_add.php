<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rental Mobil</title>
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon-icon/favicon.png')?>">

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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <p><b>Pendaftaran</b><small>Pengguna</small> </p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg">Silahkan Resgistrasi</h3>

    <form action="" method="post">
      <div class="form-group has-feedback  <?= form_error('name') ? 'has-error' : null?>">
        <input type="text" class="form-control" name="name" placeholder="Nama Lengkap"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('name')?>
      </div>
      
      <div class="form-group has-feedback  <?= form_error('username') ? 'has-error' : null?>">
        <input type="text" class="form-control" name="username" placeholder="Nama Pengguna"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('username')?>
      </div>
      
      <div class="form-group has-feedback  <?= form_error('password') ? 'has-error' : null?>">
        <input type="password" class="form-control" name="password" placeholder="Kata Sandi"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password')?>
      </div>
     
      <div class="form-group has-feedback  <?= form_error('passconf') ? 'has-error' : null?>">
        <input type="password" class="form-control" name="passconf" placeholder="Konfirmasi Kata Sandi"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('passconf')?>
      </div>

      <div class="form-group has-feedback  <?= form_error('email') ? 'has-error' : null?>">
        <input type="text" class="form-control" name="email" placeholder="Email"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('email')?>
      </div>
      
      <div class="form-group has-feedback  <?= form_error('gender') ? 'has-error' : null?>">
        <select name="gender" class="form-control">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="L">-- Laki - Laki--</option>
            <option value="P">-- Perempuan --</option>
        </select>
        <span><?= form_error('gender')?></span>
      </div>
      
      <div class="form-group has-feedback  <?= form_error('telepon') ? 'has-error' : null?>">
        <input type="text" class="form-control" name="telepon" placeholder="Nomor Telepon"/>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        <?= form_error('telepon')?>
      </div>
      
      <div class="form-group has-feedback  <?= form_error('address') ? 'has-error' : null?>">
        <input type="text" class="form-control" name="address" placeholder="Alamat"/>
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
        <?= form_error('address')?>
        <input type="hidden" class="form-control" name="level" value="user"/>
      </div><br/></br>

      
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar Sekarang</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
