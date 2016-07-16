<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('GeneralModel');
	}
	
	public function index(){

		if(is_numeric($this->session->rol) && $this->session->rol == 1){
			$data["controller"] = "home";
			$data["view"] = "home";
			$data["segment"] = 'dashboard';
			$this->load->view('layout',$data);
		}else{
			redirect("/");
		}
		
	}


	public function formulario(){

		if(is_numeric($this->session->rol) && $this->session->rol == 1){
			$data["controller"] = "home";
			$data["view"] = "home";
			$data["segment"] = 'identificacion';
			$this->load->view('layout',$data);
		}else{
			redirect("/");
		}
		
	}


}