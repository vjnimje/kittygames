<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gameone extends CI_Controller {

	public function index()
	{
		$this->load->model('game_one');
		$data['h']= $this->game_one->get_games();
		$this->load->view('header', $data);
		$this->load->view('game1/game');
		$this->load->view('footer');
	}
	public function play(){
		

		$formdata = $this->input->post('game_button');
		$id = $formdata;
	    $game = $this->db->query("SELECT * FROM games WHERE id = '".$id."'");
	     if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('header',$data);
				$this->load->view('game1/game1');
				$this->load->view('footer');
			}
			else{
				$this->session->set_flashdata('error', 'Invalid Username And Password');
				redirect('gameone');
			}
	    
	}
	public function result(){
		$given_answer = $this->input->post('game_answer');
		$id = $this->input->post('game_id');
		$game = $this->db->query("SELECT game_answer,game_image FROM games WHERE game_id = '".$id."'");
			if ($game->num_rows()>0) {
				foreach ($game->result() as $key) {
				$original_answer = $key->game_answer;
				$original_image = $key->game_image;
				}
				if (strcmp($original_answer, $given_answer) !== 0) {
					$this->session->set_flashdata('message', 'You Lost this game !');			
				} else {
					 $this->session->set_flashdata('message', 'Congratulations ! You Won this game !');
				}

				$data['given_answer'] = $given_answer;
				$data['original_answer'] = $original_answer;
				$data['original_image'] = $original_image;
				$this->load->view('header',$data);
				$this->load->view('game1/result');
				$this->load->view('footer');
			}
			else{
				echo "Answer Not found !";
			}

			
	}
}