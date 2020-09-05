<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        //check_not_login();
        //check_admin();
		$this->load->model(['pengembalian_m', 'mobil_m', 'simpel_sewa', 'driver_m', 'user_m']);
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->pengembalian_m->get();
		$this->template->load('template', 'admin/pengembalian/pengembalian_data', $data);
    }
}