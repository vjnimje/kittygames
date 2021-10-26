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
			$this->load->model('game_three');
			$data['h']= $this->game_three->get_games();
			$error = '';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/gamethree');
			$this->load->view('admin/footer.php');

		} else {
			redirect('admin');

		}	
	}
	public function update_game_list(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("game_id", "Game ID", 'required');
		$this->form_validation->set_rules("topic", "Topic", 'required');
		$this->form_validation->set_rules("questions", "Game Questions", 'required');
		$this->form_validation->set_rules("g_option", "Options", 'required');
		$this->form_validation->set_rules("answer", "Answer", 'required');
		$this->form_validation->set_rules("status", "Game Status", 'required');
		if ($this->form_validation->run()) {

			$data = array(
				'game_id' =>$this->input->post('game_id'),
				'topic' =>$this->input->post('topic'),
				'questions' =>$this->input->post('questions'),
				'g_option' =>$this->input->post('g_option'),
				'answer' =>$this->input->post('answer'),
				'status' =>$this->input->post('status')
			);
			$game_id = $this->input->post('game_id');
			$this->db->where('game_id', $game_id);
			$this->db->update('gamethree', $data);
			$this->session->set_flashdata('message', 'You Have susessfully Upadated - '.$game_id.'!');
			redirect('gamethree_admin/update_game');
			// echo "<pre>";
			// print_r($data);
		}
		else{
			redirect('gamethree_admin/update_game');
		}
	}
}