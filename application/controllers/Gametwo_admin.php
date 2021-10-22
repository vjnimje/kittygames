<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gametwo_admin extends CI_Controller {

	public function index()
	{
		echo "Gametwo_admin";
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
			$this->load->model('game_two');
			$data['h']= $this->game_two->get_games();
			$error = '';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/gametwo');
			$this->load->view('admin/footer.php');

		} else {
			redirect('admin');

		}	
	}
	public function update_game_list(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("game_id", "Game ID", 'required');
		$this->form_validation->set_rules("shape", "Shape", 'required');
		$this->form_validation->set_rules("activity", "Game Activity", 'required');
		// $this->form_validation->set_rules("status", "Game Status", 'required');
		if ($this->form_validation->run()) {

			$data = array(
				'game_id' =>$this->input->post('game_id'),
				'shape' => $this->input->post('shape'),
				'activity' =>$this->input->post('activity'),
				'status' =>$this->input->post('status')
			);
			$game_id = $this->input->post('game_id');
			$this->db->where('game_id', $game_id);
			$this->db->update('gametwo', $data);
			$this->session->set_flashdata('message', 'You Have susessfully Upadated - '.$game_id.'!');
			redirect('gametwo_admin/update_game');
			// echo "<pre>";
			// print_r($data);
		}
		else{
			redirect('gametwo_admin/update_game');
		}
	}
}