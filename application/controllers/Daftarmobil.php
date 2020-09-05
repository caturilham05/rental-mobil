<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarmobil extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('mobil_m');
		}
		public function index(){
			$data['row'] = $this->mobil_m->get();
			$this->load->view('home/list/daftar-mobil', $data);
		}

		public function detail($id){
				$data['row'] = $this->mobil_m->get_id($id);
				$this->load->view('home/list/detail-mobil', $data);
		}
}