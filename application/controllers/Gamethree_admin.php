<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamethree_admin extends CI_Controller {

	public function index()
	{
		echo "Gamethree_admin";
	}
	function update_game(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');
			$this->load->model('login_model');
			$user = $this->login_model->get_profile($username);
			$data = array();
			$data['user'] = $user;
			$data['title']= "Dashboard";
			$data['username'] = $this->session->userdata('username');
			$this->load->model('dashboard_model');
			$data['h']= $this->dashboard_model->get_games();
			$error = '';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/gamethree');
			$this->load->view('admin/footer.php');

		} else {
			redirect('admin');

		}	
	}
}