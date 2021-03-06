<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamethree extends CI_Controller {

	public function index()
	{
		$this->load->model('game_three');
		$data['a']= $this->game_three->get_active_games();
		$data['i']= $this->game_three->get_inactive_games();
		$this->load->view('header',$data);
		$this->load->view('gamethree/game');
		$this->load->view('footer');
	}
	public function play(){
		$topic = $this->input->post('topic');
	    $game = $this->db->query("SELECT * FROM gamethree WHERE status ='1' AND topic = '".$topic."'");
	     if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('header',$data);
				$this->load->view('gamethree/play');
				$this->load->view('footer');
			}
			else{
				$this->session->set_flashdata('error', 'No Games Found !');
				redirect('game');
			}
	}
	public function g_option(){
		$id = $this->input->post('game_id');
	    $game = $this->db->query("SELECT * FROM gamethree WHERE game_id = '".$id."'");
	     if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('header',$data);
				$this->load->view('gamethree/options');
				$this->load->view('footer');
			}
			else{
				$this->session->set_flashdata('error', 'No Games Found !');
				redirect('game');
			}
	}
	public function result(){
		$id = $this->input->post('game_id');
	    $game = $this->db->query("SELECT * FROM gamethree WHERE game_id = '".$id."'");
	     if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('header',$data);
				$this->load->view('gamethree/result');
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
			$this->db->update('gamethree', $data);
	}
	function reset(){
		$id = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16');
		foreach ($id as $key) {
			$data = array(
				'game_id'=>$key,
				'status'=> '1'
				);
		$this->db->where('game_id', $key);
		$this->db->update('gamethree', $data);
		}
		$this->index();
	}
}