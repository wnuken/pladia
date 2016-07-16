<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class GeneralModel extends CI_Model {

    function __construct(){        
        parent::__construct();
    }
    
        
    function userValidate($params){
    	$this->db->select('*');
    	$this->db->where($params);
        $this->db->limit(1);
        $query = $this->db->get('admin_user');
        $result = $query->row_array();
        return $result;
    }
}