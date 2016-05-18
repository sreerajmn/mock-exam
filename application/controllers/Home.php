<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->database();
	   $this->load->model("user_model");
	   $this->lang->load('basic', $this->config->item('language'));
		if($this->db->database ==''){
		redirect('install');	
		}
		
	 }

	public function index()
	{ 
            $data['title']= "Home";
            $data['page'] = 'home';
            //$this->load->view('header',$data);
            $this->load->view('main',$data);
            //$this->load->view('footer',$data);
	}	
}
