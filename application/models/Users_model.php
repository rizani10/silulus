<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
  public function insertData()
  {
    $data = [
      'nama'     => htmlspecialchars($this->input->post('nama'), true),
      'username' => htmlspecialchars($this->input->post('username'), true),
      'password' => htmlspecialchars(password_hash($this->input->post('password1'), PASSWORD_DEFAULT), true)
    ];

    $this->db->insert('tb_user', $data);
  }

  public function editUsers()
  {
    $data = [
      'nama'     => htmlspecialchars($this->input->post('nama'), true),
      'username' => htmlspecialchars($this->input->post('username'), true),
      'password' => htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT), true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tb_user', $data);
  }
}
