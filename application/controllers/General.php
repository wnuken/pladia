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

	public function save(){
		$result = array();
		$input = $this->input->get(NULL, TRUE);

		$params['idform'] = $input['idform'];
		$params['iduser'] = $input['iduser'];
		$params['dataform'] = json_encode($input);
		
		$result['id'] = $this->GeneralModel->saveForm($params);

		$response = json_encode($result);

		echo $response;	
	}

	public function getform(){
		$result = array();
		$params = $this->input->get(NULL, TRUE);

		if(isset($params['idform']))
			$result = $this->GeneralModel->getForm($params);

		if(isset($result['dataform'])){
			$response = $result['dataform'];
			$this->getViewDirect($response);
		}
		

	}

	public function getreports(){
		$result = array();
		$params = $this->input->get(NULL, TRUE);

		$result = $this->GeneralModel->getReports();

		foreach ($result as $key => $value) {
			$r2[$key] = json_decode($value['dataform'], TRUE);
		}

		// var_dump($result);

		$response = array(
			'dataform' => $r2, 
			'messge' => 'forms',
			'status' => TRUE);
		
		$this->getView($response);
	}

	private function getView($params)
	{	
		if(is_numeric($this->session->rol)){
			$data['data']['elements'] = $params;
			$this->load->view('/template/json_response',$data);
		}else{
			redirect('./');
		}
	}

	private function getViewDirect($params)
	{	
		if(is_numeric($this->session->rol)){
			$data['data'] = $params;
			$this->load->view('/template/json_file',$data);
		}else{
			redirect('./');
		}
	}
}