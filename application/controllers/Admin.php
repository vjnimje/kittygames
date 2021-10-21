<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('username') != '') {
			redirect('admin/dashboard');
		}
		else{
		$data['title']="Login";
		$this->load->view('admin/login',$data);			
		}
		// $data['title']="Login";
		// $this->load->view('admin/login',$data);
	}
	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			//true
			// echo "Login Successful!";
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$this->load->model('login_model');
			if ($this->login_model->can_login($username, $password)) {
				$session_data = array(
					'username' => $username
					// 'name' => $name
				);
				$this->session->set_userdata($session_data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid Username And Password');
				redirect('admin/index');
			}
			
		}
		else
		{
			//false
			$this->index();
		}
	}
	function enter(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');

			echo '<h2>Welcome-'.$this->session->userdata('username'). '</h2>';

			echo '<a href="'.base_url().'/login/logout">Logout</a>';
		} else {
			redirect('login');
		}
		
	}
	function logout(){
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', 'You Have susessfully Logged Out!');
		redirect('admin');

	}
	function dashboard(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');
			$this->load->model('login_model');
			$user = $this->login_model->get_profile($username);
			$data = array();
			$data['user'] = $user;
			$data['title']= "Dashboard";
			$data['username'] = $this->session->userdata('username');
			$this->load->model('dashboard_model');
			$data['h']= $this->dashboard_model->get_games();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer.php');

		} else {
			redirect('admin');

		}		
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
			$this->load->model('dashboard_model');
			$data['h']= $this->dashboard_model->get_games();
			$error = '';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/update_ground');
			$this->load->view('admin/footer.php');

		} else {
			redirect('admin');

		}	
	}
	function update_game_list(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("game_id", "Game ID", 'required');
		$this->form_validation->set_rules("game_name", "Game Name", 'required');
		$this->form_validation->set_rules("game_link", "Game Link", 'required');
		$this->form_validation->set_rules("game_answer", "Game Answer", 'required');
		$this->form_validation->set_rules("game_option_answer", "Game Option Answer", 'required');
		$this->form_validation->set_rules('game_image', 'Upload Game', 'file_required');
		if ($this->form_validation->run()) {

			if(!empty($_FILES['game_image']['name'])){
	        	$new_name 			= time().$_FILES['game_image']['name'];
	            $config['file_name']		= str_replace(' ', '_', $new_name);
	            $config['upload_path']          = './assets/upload/game/';
		        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
		        $config['max_size']             = 5000;
		        $config['max_width']            = 5000;
		        $config['max_height']           = 5000;
		        $this->load->library('upload', $config);
		        $upload_data = $this->upload->data();
		        $filename = $upload_data['file_name'];
	        }
	        else{
	        	$filename='';
	        }

			$this->load->model('dashboard_model');
			$data = array(
				'game_id' =>$this->input->post('game_id'),
				'game_name' =>$this->input->post('game_name'),
				'game_link' =>$this->input->post('game_link'),
				'game_image' => $filename,
				'game_answer' =>$this->input->post('game_answer'),
				'game_option_answer' =>$this->input->post('game_option_answer')
				
			);
			$this->update_game_image();
			$game_id = $this->input->post('game_id');
			$this->db->where('game_id', $game_id);
			$this->db->update('games', $data);
			$this->session->set_flashdata('message', 'You Have susessfully Upadated - '.$game_id.'!');
			redirect('admin/update_game');
			

		}
		else{
			redirect('admin/update_game');
		}
	}
	private function update_game_image(){
		$config['upload_path']          = './assets/upload/game/';
        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('game_image'))
            {
                // $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();  
            }
            else
            {
                $this->update_game();
            }
	}
}