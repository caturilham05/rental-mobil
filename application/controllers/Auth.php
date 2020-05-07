<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		//$_SESSION['last_login'] = $array['last_login'];
		if(isset($_POST['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
					$params = array(
						'userid' => $row->user_id,
						'level' => $row->level
						//'last_login' => $row->last_login
					);
					$this->session->set_userdata($params);
					echo "<script>
						alert('Login Berhasil!');
						window.location='".site_url('dashboard')."';
						</script>";
			}else{
				echo "<script>
					alert('Login Gagal!');
					window.location='".site_url('auth/login')."';
					</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('userid');
		$this->session->unset_userdata($params);
		echo "<script>
				alert('Logout Berhasil!');
				window.location='".site_url('auth/login')."';
				</script>";
	}
}
