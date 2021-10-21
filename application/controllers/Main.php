<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data['title']="Home";
		$this->load->model('dashboard_model');
		$data['h']= $this->dashboard_model->get_grounds();
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}
}