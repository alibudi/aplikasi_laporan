<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananModel extends CI_Model {

	public function getData(){
		$sql = $this->db->get('tbl_pemesanan');
		return $sql->result();
	}
	

	public function getDataById($id){
		$this->db->where('id',$id);
		$sql = $this->db->get('tbl_laporan');
		return $sql->row();
	}
 public function getAll()
     {
          $this->db->select('*');
          $this->db->from('tbl_laporan');

          return $this->db->get();
     }
	public function addData($data){
		$sql = $this->db->insert('tbl_pemesanan',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}

	public function updateData($id,$data){
		$this->db->where('id',$id);
		$sql = $this->db->update('tbl_laporan',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}

	public function deleteData($id){
		$this->db->where('id',$id);
		$sql = $this->db->delete('tbl_laporan');
		if($sql){
			return true;
		} else{
			return false;
		}
	}

}