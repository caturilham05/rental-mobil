<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        //check_not_login_user();
        //check_user();
		$this->load->model(['mobil_m', 'user_m']);
		$this->load->library('form_validation');
	}
	
		public function index(){
			$data['row'] = $this->mobil_m->get_new();
				$this->load->view('utama', $data);
		}

}