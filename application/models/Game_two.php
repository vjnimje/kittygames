<?php
	class Game_two extends CI_Model{
		function get_games(){
			$query = $this->db->get('gametwo');
        	return $query; 
		}
		function get_active_games(){
			$this->db->where('status', '1');
			$query = $this->db->get('gametwo');
        	return $query; 
		}
		function get_inactive_games(){
			$this->db->where('status', '0');
			$query = $this->db->get('gametwo');
        	return $query; 
		}
		public function fetch_game($id){
			$query = $this->db->get_where('gametwo', array('id' => $id));
			return $query->result();
		}
		function play_game($id, $status){
			$this->db->where('id', $id);
			$this->db->where('status', $status);
			$query = $this->db->get('gametwo');
			if ($query->num_rows() > 0) {
				return true;
			} else {
				return false;

			}
		}
	}