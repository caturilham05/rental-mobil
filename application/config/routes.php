<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'utama';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login admin
$route['admin'] = 'auth/login';
// data mitra dari admin
$route['data%20mitra'] = 'user/data_mitra';
// biaya
$route['biaya'] = 'driver';
// biaya edit
$route['edit%20biaya/(:num)'] = 'driver/edit/$1';

// Bagian User
// Menunggu Pembayaran
$route['menunggu%20pembayaran'] = 'pembayaran';
// Menunggu Konfirmasi
$route['menunggu%20konfirmasi'] = 'konfirmasi';
// Daftar Mobil
$route['daftar-mobil'] = 'daftarmobil';
// detail mobil
$route['detail-mobil/(:num)'] = 'daftarmobil/detail/$1';
// booking mobil
$route['booking/sewa/mobil/kode(:num)'] = 'booking/sewa/$1';
// riwayat sewa
$route['riwayat%20sewa'] = 'pembayaran/riwayat_sewa';



// user register
$route['register'] = 'user/add';
// user login
$route['login-user'] = 'auth/login_user';
// user logout
$route['logout'] = 'auth/logout_user';



//mitra dashboard
$route['dashboard-mitra'] = 'mitra';
// mitra login
$route['mitra'] = 'auth_mitra/login_mitra';
//register mitra
$route['register-mitra'] = 'mitra/add';
// logout mitra
$route['logout-mitra'] = 'auth_mitra/logout_mitra';
// get data mobil mitra
$route['mobil%20mitra'] = 'mobil/view_mobil';



