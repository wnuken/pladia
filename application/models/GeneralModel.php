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

    public function getMunicipios($params){
        $this->db->select('id_munipo, municipio');
        $this->db->where($params);
        $query = $this->db->get('municipios');
        $result = $query->result_array();
        return $result;
    }
}