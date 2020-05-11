<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'utama';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login admin
$route['admin'] = 'auth/login';
// Menunggu Pembayaran
$route['menunggu%20pembayaran'] = 'pembayaran';
// Menunggu Konfirmasi
$route['menunggu%20konfirmasi'] = 'konfirmasi';