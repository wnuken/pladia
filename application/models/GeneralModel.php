<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class GeneralModel extends CI_Model {

    function __construct(){        
        parent::__construct();
    }
    
        
    public function userValidate($params){
    	$this->db->select('*');
    	$this->db->where($params);
        $this->db->limit(1);
        $query = $this->db->get('admin_user');
        $result = $query->row_array();
        return $result;
    }

    public function getDepartamentos(){
        $this->db->select('id_dpto, departamento');
        $query = $this->db->get('departamentos');
        $result = $query->result_array();
        return $result;
    }

    public function getDepartamentoById(& $params){
        $this->db->where('id_dpto',$params['departamento']);
        $this->db->select('id_dpto, departamento');
        $query = $this->db->get('departamentos');
        $result = $query->row_array();
        $params['departamento'] = $result['departamento'];
    }

    public function getMunicipios($params){
        $this->db->select('id_munipo, municipio');
        $this->db->where($params);
        $query = $this->db->get('municipios');
        $result = $query->result_array();
        return $result;
    }

    public function getMunicipioById( &$params){
        $this->db->where('id_munipo',$params['municipio']);
        $this->db->select('id_munipo, municipio');
        $query = $this->db->get('municipios');
        $result = $query->row_array();
        $params['municipio'] = $result['municipio'];
    }

    public function getForm($params)
    {
      $this->db->select('dataform');
      $this->db->where('idform',$params['idform']);
      $this->db->limit(1);
      $query = $this->db->get('formularios');
      $result = $query->row_array();
      return $result;
    }

    public function getReports()
    {
      $this->db->select('dataform');
      $query = $this->db->get('formularios');
      $result = $query->result_array();
      return $result;
    } 

   

    public function saveForm($params){
      $this->db->where('idform',$params['idform']);
      //$this->db->where('iduser',$params['iduser']);
      $q = $this->db->get('formularios');

      if( $q->num_rows() > 0 ){
         $this->db->where('idform',$params['idform']);
        // $this->db->where('iduser',$params['iduser']);
         $resultInsert = $this->db->update('formularios',$params);
      }else{
         $resultInsert = $this->db->insert('formularios', $params);
      }

      if($resultInsert === TRUE){
         $this->db->select('idform');
         $this->db->where('idform',$params['idform']);
         //$this->db->where('iduser',$params['iduser']);
         $this->db->limit(1);
         $query = $this->db->get('formularios');
         $result = $query->row_array();
         $result = $result['idform'];
      }else{
         $result = FALSE;
      }
      return $result;
   }
}