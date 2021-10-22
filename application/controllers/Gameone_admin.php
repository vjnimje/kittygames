<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gameone_admin extends CI_Controller {

	public function index()
	{
		echo "Gameone_admin";
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
			$this->load->model('game_one');
			$data['h']= $this->game_one->get_games();
			$error = '';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/gameone');
			$this->load->view('admin/footer.php');

		} else {
			redirect('admin');

		}	
	}
		public function update_game_list(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("game_id", "Game ID", 'required');
		$this->form_validation->set_rules("answer", "Game Answer", 'required');
		$this->form_validation->set_rules("status", "Game Answer", 'required');
		$this->form_validation->set_rules('blur_image', 'Blur Image ', 'file_required');
		$this->form_validation->set_rules('original_image', 'Original Image', 'file_required');
		if ($this->form_validation->run()) {

			if(!empty($_FILES['blur_image']['name'])){
	        	$blur_name 						= time().$_FILES['blur_image']['name'];
	            $config['file_name']			= str_replace(' ', '_', $blur_name);
	            $config['upload_path']          = './assets/upload/gameone/';
		        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
		        $config['max_size']             = 5000;
		        $config['max_width']            = 5000;
		        $config['max_height']           = 5000;
		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);
		        $blur_data = $this->upload->data();
		        $blurimage = $blur_data['file_name'];
	        }
	        else{
	        	$blurimage='';
	        }
	        if(!empty($_FILES['original_image']['name'])){
	        	$original_name 					= time().$_FILES['original_image']['name'];
	            $config['file_name']			= str_replace(' ', '_', $original_name);
	            $config['upload_path']          = './assets/upload/gameone/';
		        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
		        $config['max_size']             = 5000;
		        $config['max_width']            = 5000;
		        $config['max_height']           = 5000;
		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);
		        $original_data = $this->upload->data();
		        $originalimage = $original_data['file_name'];
	        }
	        else{
	        	$originalimage='';
	        }

			// $this->load->model('dashboard_model');
			$data = array(
				'game_id' =>$this->input->post('game_id'),
				'blur_image' => $blurimage,
				'answer' =>$this->input->post('answer'),
				'original_image' => $originalimage,
				'status' =>$this->input->post('status')
			);
			$this->update_blur_image($blurimage);
			$this->update_original_image($originalimage);
			$game_id = $this->input->post('game_id');
			$this->db->where('game_id', $game_id);
			$this->db->update('gameone', $data);
			$this->session->set_flashdata('message', 'You Have susessfully Upadated - '.$game_id.'!');
			redirect('gameone_admin/update_game');
			// echo "<pre>";
			// print_r($data);
			// print_r($original_data);
			// print_r($blur_data);

		}
		else{
			redirect('gameone_admin/update_game');
		}
	}
	private function update_blur_image($blurimage){
		$config['file_name']			= $blurimage;
		$config['upload_path']          = './assets/upload/gameone/';
        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('blur_image'))
            {
                echo $this->upload->display_errors();  
            }
            else
            {
                $this->update_game();
            }
	}
	private function update_original_image($originalimage){
		$config['file_name']			= $originalimage;
		$config['upload_path']          = './assets/upload/gameone/';
        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('original_image'))
            {
                echo $this->upload->display_errors();  
            }
            else
            {
                $this->update_game();
            }
	}
}