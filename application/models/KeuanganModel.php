<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeuanganModel extends CI_Model {

	public function getData(){

		$sql = $this->db->get('tbl_laporan');
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
		$sql = $this->db->insert('tbl_laporan',$data);
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

	public function beban()
	{
		$sql = $this->db->get('tbl_beban');
		return $sql->result();
	}
	public function saldo()
	{
		$sql = $this->db->get('saldo_awal');
		return $sql->result();
	}

	public function addSaldo($data){
		$sql = $this->db->insert('saldo_awal',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}
		public function addBeban($data){
		$sql = $this->db->insert('tbl_beban',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}

public function getDataBebanId($id){
		$this->db->where('id',$id);
		$sql = $this->db->get('tbl_beban');
		return $sql->row();
	}
	public function getDataSaldo($id){
		$this->db->where('id',$id);
		$sql = $this->db->get('saldo_awal');
		return $sql->row();
	}
	public function updateSaldo($saldo){
		$this->db->set('saldo',$saldo);
		$sql = $this->db->update('saldo_awal.saldo',$saldo);
		if($sql){
			return true;
		} else{
			return false;
		}
	}
	public function updateBeban($id,$data){
	
		$this->db->where('id',$id);
		$sql = $this->db->update('tbl_beban',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}

	public function getDataBeban($id){
	$this->db->select('tbl_beban.*');
	$this->db->select('saldo_awal.*');
	$this->db->from('tbl_beban');
	$this->db->join('saldo_awal','saldo_awal.id=tbl_beban.id');
	$this->db->where('tbl_beban.id',$id);
	$sql = $this->db->get()->row();
	return $sql;
	}

		public function getSaldo($id){
	$this->db->select('tbl_laporan.*');
	$this->db->select('tbl_saldo.*');
	$this->db->from('tbl_laporan');
	$this->db->join('tbl_saldo','tbl_saldo.id=tbl_laporan.id');
	$this->db->where('tbl_laporan.id',$id);
	$sql = $this->db->get()->row();
	return $sql;
	}
	public function transfer($query)
	{
		$query = $this->db->query('SELECT id, nilai FROM tbl_laporan');
		$sender = 'UPDATE tbl_saldo SET saldo = saldo - ? WHERE id = ?';

		$this->db->trans_start();
		$this->db->query($sender, array($query));
		$this->db->trans_complete();

		if ($this->db->trans_start() === false) {
			echo 'rolleback';
		} else {
			echo 'commited';
		}
	}

	public function get_tabung()
	{
		$this->db->where('type !=','pengeluaran');
		$this->db->order_by('id', 'desc');
		$sql = $this->db->get('tbl_laporan');
			return $sql;
	}

	public function get_nominal($type='tabungan')
	{
		$this->db->select('SUM(nilai) as nilai');
		$this->db->where('type', $type);
		$sql = $this->db->get('tbl_laporan');
			return $sql;
	}
}