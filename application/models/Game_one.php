<?php
	class Game_one extends CI_Model{
		function get_games(){
			$query = $this->db->get('gameone');
        	return $query; 
		}
		function get_active_games(){
			$this->db->where('status', '1');
			$query = $this->db->get('gameone');
        	return $query; 
		}
		function get_inactive_games(){
			$this->db->where('status', '0');
			$query = $this->db->get('gameone');
        	return $query; 
		}
		public function fetch_game($id){
			$query = $this->db->get_where('gameone', array('id' => $id));
			return $query->result();
		}
		function check_answer($id, $game_answer){
			$this->db->where('id', $id);
			$this->db->where('game_answer', $game_answer);
			$query = $this->db->get('gameone');
			if ($query->num_rows() > 0) {
				return true;
			} else {
				return false;

			}
			
		}
		function play_game($id, $status){
			$this->db->where('id', $id);
			$this->db->where('status', $status);
			$query = $this->db->get('gameone');
			if ($query->num_rows() > 0) {
				return true;
			} else {
				return false;

			}
		}
	}