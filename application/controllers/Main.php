<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
	public function audio()
	{
		$id = '01';
	    $game = $this->db->query("SELECT * FROM gameone WHERE id = '".$id."'");
	     if ($game->num_rows()>0) {
				$data = array();
			    $data['game']=$game;
			    $this->load->view('audio',$data);
			}
			else{
				$this->session->set_flashdata('error', 'No Games Found !');
				redirect('game');
			}
		
	}
	public function file_upload(){
		$this->load->view('file_upload');
	}
	public function file_upload_test(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('blur_image', 'Blur Image ', 'file_required');
		if ($this->form_validation->run()) {
			if(!empty($_FILES['testfile']['name'])){
				$blur_name 						= time().$_FILES['testfile']['name'];
	            $config['file_name']			= str_replace(' ', '_', $blur_name);
	            $config['upload_path']          = './assets/upload/';
		        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG","MP3","mp3","MP4","mp4");
		        $config['max_size']             = 5000;
		        $this->load->library('upload', $config);
		       $data = array('upload_data' => $this->upload->data());
		        $file_type = $data['upload_data']['file_type'];
		        echo "<pre>";
	                print_r($data);
			    if ( ! $this->upload->do_upload('testfile'))
	            {
	                echo $this->upload->display_errors();  
	            }
	            else
	            {
	                echo "you have sucesfully uploded media";
	                echo $file_type;
	                echo "<pre>";
	                print_r($this->upload->data());

	            }
		 	}
		 	else{
		 	echo "file not found!";
			}
		}
		else{
			redirect('main/file_upload');
		}
	}
}