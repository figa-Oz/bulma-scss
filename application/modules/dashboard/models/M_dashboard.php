<?php if(!defined('BASEPATH')) exit('Tidak ada akses langsung yang diizinkan');

class M_dashboard extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  // public function takeUser($username, $password, $status, $level ){
  public function takeUser($username, $password, $status ){
    $this->db->select('*');
    $this->db->from('admins');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('status', $status);
    // $this->db->where('level', $level);
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function userData($username){
    $this->db->select('id');
    $this->db->select('username');
    $this->db->select('name');
    $this->db->where('username', $username);
    $query = $this->db->get('admins');
    return $query->row();
  }
}
