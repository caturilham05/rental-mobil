<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mobil_m');
	}
	public function sewa($id){
		$data['row'] = $this->mobil_m->get_id($id);
		$this->load->view('home/booking/booking', $data);
	}
}