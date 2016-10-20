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

	public function exportarexcel(){
		$this->load->library('ExcelLibrary');
		$phpexcel = new PHPExcel();

		$result = $this->GeneralModel->getReports();

		foreach ($result as $key => $value) {
			$r2[$key] = json_decode($value['dataform'], TRUE);
			$this->formatReport($r2[$key]);
		}

		/*print('<pre>');
		print_r($r2);
		print('</pre>');
		die(); */

		$phpexcel->getProperties()->setCreator("Arkos Noem Arenom")
		->setLastModifiedBy("Arkos Noem Arenom")
		->setTitle("Office 2007 XLSX Test Document")
		->setSubject("Office 2007 XLSX Test Document")
		->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
		->setKeywords("office 2007 openxml php")
		->setCategory("Test result file");


    // agregamos información a las celdas
		$phpexcel->setActiveSheetIndex(0)
		->setCellValue('A1', 'Reporte Pladia - Identificación y vivienda')
		->setCellValue('B3', 'Código')
		->setCellValue('C3', 'Fecha Carga')
		->setCellValue('D3', 'Nombre Encuestado')
		->setCellValue('E3', 'Télefono Encuestado')
		->setCellValue('F3', 'Departamento')
		->setCellValue('G3', 'Municipio')
		->setCellValue('H3', 'Corregimiento')
		->setCellValue('I3', 'Sector rural')
		->setCellValue('J3', 'Territorio')
		->setCellValue('K3', 'Nombre Territorio')
		->setCellValue('L3', 'Total de hogares en la vivienda')
		->setCellValue('M3', 'Número del en la vivienda')
		->setCellValue('N3', 'Inundaciones')
		->setCellValue('O3', 'Avalanchas')
		->setCellValue('P3', 'Desbordamiento de rios,quebradas')
		->setCellValue('Q3', 'Deslizamientos')
		->setCellValue('R3', 'Vendavales')
		->setCellValue('S3', 'Otro desastre natural')
		->setCellValue('T3', 'Otro desastre natural Cantidad')
		->setCellValue('U3', 'Ha vivido siempre en este municipio')
		->setCellValue('V3', 'Desde que año')
		->setCellValue('W3', 'Razón para venir a municipio')
		->setCellValue('X3', 'Razón para venir a municipio otra')
		->setCellValue('Y3', 'Tipo de vivienda')
		->setCellValue('Z3', 'Material de las paredes exteriores')
		->setCellValue('AA3', 'Matarial predominante en los pisos')
		->setCellValue('AB3', 'Energía Electrica')
		->setCellValue('AC3', 'Gas natural')
		->setCellValue('AD3', 'Alcantarillado')
		->setCellValue('AE3', 'Basuras')
		->setCellValue('AF3', 'Acueducto')
		->setCellValue('AG3', 'Estrato');

		foreach ($r2 as $key => $value) {
			$thekey = $key + 4;
			$phpexcel->setActiveSheetIndex(0)
			->setCellValue('B' . $thekey, ((isset($value['idform'])?$value['idform']:'')))
			->setCellValue('C' . $thekey, ((isset($value['fecha'])?$value['fecha']:'')))
			->setCellValue('D' . $thekey, ((isset($value['nombreencuestado'])?$value['nombreencuestado']:'')))
			->setCellValue('E' . $thekey, ((isset($value['telefonoencuestado'])?$value['telefonoencuestado']:'')))
			->setCellValue('F' . $thekey, ((isset($value['departamento'])?$value['departamento']:'')))
			->setCellValue('G' . $thekey, ((isset($value['municipio'])?$value['municipio']:'')))
			->setCellValue('H' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('I' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('J' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('K' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('L' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('M' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('N' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('O' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('P' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('Q' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('R' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('S' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('T' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('U' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('V' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('W' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('X' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('Y' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('Z' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AA' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AB' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AC' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AD' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AE' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AF' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')))
			->setCellValue('AG' . $thekey, ((isset($value['corregimiento'])?$value['corregimiento']:'')));
		}
		


    // Renombramos la hoja de trabajo
		$phpexcel->getActiveSheet()->setTitle('Identificación y vivienda');

		$phpexcel->createSheet();
		// agregamos información a las celdas
		$phpexcel->setActiveSheetIndex(1)
		->setCellValue('A1', 'Hello')
		->setCellValue('B2', 'world!')
		->setCellValue('C1', 'Hello')
		->setCellValue('D2', 'world!');
		$phpexcel->getActiveSheet()->setTitle('Simple1');

    // configuramos el documento para que la hoja
    // de trabajo número 0 sera la primera en mostrarse
    // al abrir el documento
		$phpexcel->setActiveSheetIndex(0);


    // redireccionamos la salida al navegador del cliente (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="01simple.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
		$objWriter->save('php://output');
	}

	private function formatReport(& $params){
		$params['fecha'] = strftime("%Y/%m/%d", $params['idform']);
		$this->GeneralModel->getDepartamentoById($params);
		$this->GeneralModel->getMunicipioById($params);
	}


}