<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Read_Model extends CI_Model{
public function getdata(){
$query=$this->db->select('FirstName,LastName,EmailId,ContactNumber,Address,id')
		              ->get('cloud_data');
		        return $query->result();      
	}

public function getuserdetail($uid){
		$ret=$this->db->select('FirstName,LastName,EmailId,ContactNumber,Address,id')
		              ->where('id',$uid)
		              ->get('cloud_data');
		        return $ret->row();    
	}


}
