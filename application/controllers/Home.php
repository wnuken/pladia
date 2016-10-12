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
			$params = $this->input->get(NULL, TRUE);

			if(isset($params['idform']) && $params['idform'] != ''){
				$data["idform"] = $params["idform"];
			}else{
				$data["idform"] = strtotime("now");
			}

			$data["id_user"] = $this->session->id_user;
			$data["controller"] = "home";
			$data["view"] = "home";
			$data["segment"] = 'formulario';
			$this->load->view('layout',$data);
		}else{
			redirect("/");
		}
		
	}

	public function reportes(){
		if(is_numeric($this->session->rol) && $this->session->rol == 1){
			$data["id_user"] = $this->session->id_user;
			$data["controller"] = "home";
			$data["view"] = "home";
			$data["segment"] = 'reportes';
			$this->load->view('layout',$data);
		}else{
			redirect("/");
		}
	}

	public function opcionreporte(){
		if(is_numeric($this->session->rol) && $this->session->rol == 1){
			$data["id_user"] = $this->session->id_user;
			$data["controller"] = "home";
			$data["view"] = "home";
			$data["segment"] = 'opcion';
			$this->load->view('template/home/opcion',$data);
		}else{
			redirect("/");
		}
	}

	public function opciondescarga(){
		if(is_numeric($this->session->rol) && $this->session->rol == 1){
			$data["id_user"] = $this->session->id_user;
			$data["controller"] = "home";
			$data["view"] = "home";
			$data["segment"] = 'opcion';
			$this->load->view('template/home/opciondes',$data);
		}else{
			redirect("/");
		}
	}


}