<?php
	class Game_model extends CI_Model{
		function get_games(){
			$query = $this->db->get('games');  
        return $query; 
		}
		public function fetch_game($id){
			$query = $this->db->get_where('games', array('id' => $id));
			return $query->result();
		}
		function check_answer($id, $game_answer){
			$this->db->where('id', $id);
			$this->db->where('game_answer', $game_answer);
			$query = $this->db->get('games');
			if ($query->num_rows() > 0) {
				return true;
			} else {
				return false;

			}
			
		}
	}