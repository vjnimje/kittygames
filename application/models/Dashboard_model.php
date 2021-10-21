<?php
	class Dashboard_model extends CI_Model{
		function get_games(){
			$query = $this->db->get('games');  
         return $query; 
		}
	}