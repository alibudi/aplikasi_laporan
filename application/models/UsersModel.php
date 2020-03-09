<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model
{
    public function modelmember()
    {
        $this->db->select('*');
        $this->db->order_by('username', 'ASC');
        $query = $this->db->get('users');
        return $query->result();
    }
   
    public function jumlah()
    {
       $query = $this->db->get('users');
       if($query->num_rows()>0)
       {
         return $query->num_rows();
       }
       else
       {
         return 0;
       }
    }
    public function modelgroups()
    {
        $this->db->select('*');
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('groups');
        return $query->result();
    }

    public function memberedit($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }
    public function groupsedit($id)
    {

        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('groups');
        return $query->result();
    }
    public function groups_update($id,$data_array)
    {
        $this->db->where('id', $id);
        $this->db->update('groups',$data_array);
        return true;
    }
    
}