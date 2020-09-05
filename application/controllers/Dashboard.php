<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		check_not_login();
		$this->load->model(['sewa_m', 'driver_m', 'simpel_sewa']);
		$data['row'] = $this->sewa_m->get();
		$this->template->load('template', 'dashboard', $data);
		$data = array();
	}
}
