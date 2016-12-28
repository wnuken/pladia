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
			if(isset($r2[$key]['departamento']))
				$this->GeneralModel->getDepartamentoById($r2[$key]);
			if(isset($r2[$key]['municipio']))
				$this->GeneralModel->getMunicipioById($r2[$key]);
			if(isset($r2[$key]['idform']))
				$r2[$key]['fechaform'] = date("Y/m/d", $r2[$key]['idform']);
			
			if(isset($r2[$key]['area']))
				$r2[$key]['area'] = json_decode($r2[$key]['area'], TRUE);
			if(isset($r2[$key]['areacultivo']))
				$r2[$key]['areacultivo'] = json_decode($r2[$key]['areacultivo'], TRUE);
			if(isset($r2[$key]['arrobascosecha']))
				$r2[$key]['arrobascosecha'] = json_decode($r2[$key]['arrobascosecha'], TRUE);

			if(isset($r2[$key]['destinoproduc1']))
				$r2[$key]['destinoproduc1'] = json_decode($r2[$key]['destinoproduc1'], TRUE);
			if(isset($r2[$key]['destinoproduc2']))
				$r2[$key]['destinoproduc2'] = json_decode($r2[$key]['destinoproduc2'], TRUE);
			if(isset($r2[$key]['destinoproduc3']))
				$r2[$key]['destinoproduc3'] = json_decode($r2[$key]['destinoproduc3'], TRUE);
			if(isset($r2[$key]['explota']))
				$r2[$key]['explota'] = json_decode($r2[$key]['explota'], TRUE);

			if(isset($r2[$key]['fuenteproduccion2']))
				$r2[$key]['fuenteproduccion2'] = json_decode($r2[$key]['fuenteproduccion2'], TRUE);
			if(isset($r2[$key]['fuenteproduccion3']))
				$r2[$key]['fuenteproduccion3'] = json_decode($r2[$key]['fuenteproduccion3'], TRUE);
			if(isset($r2[$key]['fuenteproduccion4']))
				$r2[$key]['fuenteproduccion4'] = json_decode($r2[$key]['fuenteproduccion4'], TRUE);

			if(isset($r2[$key]['pecuario']))
				$r2[$key]['pecuario'] = json_decode($r2[$key]['pecuario'], TRUE);

			if(isset($r2[$key]['presona']))
				$r2[$key]['presona'] = json_decode($r2[$key]['presona'], TRUE);

				
			// []
			}

		//var_dump($r2[6]['departamento']);
		//die();

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