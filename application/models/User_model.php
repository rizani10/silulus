<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function cari($cari)
  {
    $this->db->select('*');
    $this->db->from('tb_surat');
    $this->db->like('nisn', $cari);
    $this->db->or_like('nis', $cari);
    return $this->db->get()->row_array();
  }

  public function getAll()
  {
    return $this->db->get('tb_surat')->row_array();
  }
}
