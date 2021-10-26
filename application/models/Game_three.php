<?php
	class Game_three extends CI_Model{
		function get_games(){
			$query = $this->db->get('gamethree');
        	return $query; 
		}
		function get_active_games(){
			$this->db->where('status', '1');
			$this->db->group_by('topic');
			$query = $this->db->get('gamethree');
        	return $query; 
		}
		function get_inactive_games(){
			$this->db->where('status', '0');
			$query = $this->db->get('gamethree');
        	return $query; 
		}
		public function fetch_game($id){
			$query = $this->db->get_where('gamethree', array('id' => $id));
			return $query->result();
		}
		function play_game($id, $status){
			$this->db->where('id', $id);
			$this->db->where('status', $status);
			$query = $this->db->get('gamethree');
			if ($query->num_rows() > 0) {
				return true;
			} else {
				return false;

			}
		}
	}