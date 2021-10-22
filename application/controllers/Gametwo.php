<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gametwo extends CI_Controller {

		public function index()
	{
		$this->load->model('game_two');
		$data['a']= $this->game_two->get_active_games();
		$data['i']= $this->game_two->get_inactive_games();
		$this->load->view('header',$data);
		$this->load->view('gametwo/game');
		$this->load->view('footer');
	}
	public function play(){
		$formdata = $this->input->post('game_button');
		$id = $formdata;
	    $game = $this->db->query("SELECT * FROM gametwo WHERE id = '".$id."'");
	     if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('header',$data);
				$this->load->view('gametwo/play');
				$this->load->view('footer');
			}
			else{
				$this->session->set_flashdata('error', 'No Games Found !');
				redirect('game');
			}
	    	$data = array(
				'game_id' =>$id,
				'status' =>'0'
			);
			$this->db->where('game_id', $id);
			$this->db->update('gametwo', $data);
	}
	public function result(){
		$id = $this->input->post('game_id');
		$game = $this->db->query("SELECT * FROM gameone WHERE game_id = '".$id."'");
			if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('header',$data);
				$this->load->view('gameone/result');
				$this->load->view('footer');	
			}
			else{
				echo "Answer Not found !";
			}
		$data = array(
				'game_id' =>$id,
				'status' =>'0'
			);
		$this->db->where('game_id', $id);
		$this->db->update('gameone', $data);	
	}
	function reset(){
		$id = array('01','02','03','04','05');
		foreach ($id as $key) {
			$data = array(
				'game_id'=>$key,
				'status'=> '1'
				);
		$this->db->where('game_id', $key);
		$this->db->update('gameone', $data);
		}
		$this->index();
	}

}