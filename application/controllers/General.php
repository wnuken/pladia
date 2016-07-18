<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('GeneralModel');
	}
	
	public function index(){
		$this->session->sess_destroy();
		$data["controller"] = "login";
		$data["view"] = "login";
		$this->load->view('layout',$data);
	}

	public function validate(){
		$params = $this->input->get(NULL, TRUE);

		$result = $this->GeneralModel->userValidate($params);

		if($result !== NULL){
			$this->session->rol = $result['rol_id'];
			$this->session->id_user = $result['user_id'];

			$validate = array(
				'status' => TRUE,
				'message' => "error login"
				);


			$response = json_encode($validate);

			
		}else{
			$error = array(
				'status' => FALSE,
				'message' => "error login"
				);
			$response = json_encode($error);
		}

		echo $response;	
	}

	public function getselectelements(){
		$result = array();
		$params = $this->input->get(NULL, TRUE);
		if($params['elements'] == 'departamentos'){
			$result['elements'] = $this->GeneralModel->getDepartamentos();
		}else if($params['elements'] == 'municipios'){
			$paramsMucpo['cod_dpto'] = $params['cod_dpto'];
			$result['elements'] = $this->GeneralModel->getMunicipios($paramsMucpo);
		}

		$response = json_encode($result);

		echo $response;	
	}
}