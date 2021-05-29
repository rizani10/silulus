<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelulusan_model extends CI_Model
{
  public function insertData($kelulusan)
  {
    $jumlah = count($kelulusan);
    if ($jumlah > 0) {
      $this->db->replace('tb_surat', $kelulusan);
    }
  }

  public function tambahData()
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama'), TRUE),
      'nisn' => htmlspecialchars($this->input->post('nisn'), TRUE),
      'nis' => htmlspecialchars($this->input->post('nis'), TRUE),
      'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), TRUE),
      'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir'), TRUE),
      'nama_orangtua' => htmlspecialchars($this->input->post('nama_orangtua'), TRUE),
      'nomor_surat' => htmlspecialchars($this->input->post('nomor_surat'), TRUE),
      'dikeluarkan' => htmlspecialchars($this->input->post('dikeluarkan'), TRUE),
      'tgl_dikeluarkan' => htmlspecialchars($this->input->post('tgl_dikeluarkan'), TRUE),
      'pai' => htmlspecialchars($this->input->post('pai'), TRUE),
      'pkn' => htmlspecialchars($this->input->post('pkn'), TRUE),
      'b_ind' => htmlspecialchars($this->input->post('b_ind'), TRUE),
      'b_ing' => htmlspecialchars($this->input->post('b_ing'), TRUE),
      'mtk' => htmlspecialchars($this->input->post('mtk'), TRUE),
      'ipa' => htmlspecialchars($this->input->post('ipa'), TRUE),
      'ips' => htmlspecialchars($this->input->post('ips'), TRUE),
      'senbud' => htmlspecialchars($this->input->post('senbud'), TRUE),
      'penjeskes' => htmlspecialchars($this->input->post('penjeskes'), TRUE),
      'prakarya' => htmlspecialchars($this->input->post('prakarya'), TRUE),
      'moluk' => htmlspecialchars($this->input->post('moluk'), TRUE),
      'rata_rata' => htmlspecialchars($this->input->post('rata_rata'), TRUE),
      'keterangan_lulus' => htmlspecialchars($this->input->post('keterangan_lulus'), TRUE)
    ];


    $this->db->insert('tb_surat', $data);
  }

  public function editData()
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama'), TRUE),
      'nisn' => htmlspecialchars($this->input->post('nisn'), TRUE),
      'nis' => htmlspecialchars($this->input->post('nis'), TRUE),
      'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), TRUE),
      'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir'), TRUE),
      'nama_orangtua' => htmlspecialchars($this->input->post('nama_orangtua'), TRUE),
      'nomor_surat' => htmlspecialchars($this->input->post('nomor_surat'), TRUE),
      'dikeluarkan' => htmlspecialchars($this->input->post('dikeluarkan'), TRUE),
      'tgl_dikeluarkan' => htmlspecialchars($this->input->post('tgl_dikeluarkan'), TRUE),
      'pai' => htmlspecialchars($this->input->post('pai'), TRUE),
      'pkn' => htmlspecialchars($this->input->post('pkn'), TRUE),
      'b_ind' => htmlspecialchars($this->input->post('b_ind'), TRUE),
      'b_ing' => htmlspecialchars($this->input->post('b_ing'), TRUE),
      'mtk' => htmlspecialchars($this->input->post('mtk'), TRUE),
      'ipa' => htmlspecialchars($this->input->post('ipa'), TRUE),
      'ips' => htmlspecialchars($this->input->post('ips'), TRUE),
      'senbud' => htmlspecialchars($this->input->post('senbud'), TRUE),
      'penjeskes' => htmlspecialchars($this->input->post('penjeskes'), TRUE),
      'prakarya' => htmlspecialchars($this->input->post('prakarya'), TRUE),
      'moluk' => htmlspecialchars($this->input->post('moluk'), TRUE),
      'rata_rata' => htmlspecialchars($this->input->post('rata_rata'), TRUE),
      'keterangan_lulus' => htmlspecialchars($this->input->post('keterangan_lulus'), TRUE)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tb_surat', $data);
  }

  public function delete($nis)
  {
    $this->db->where_in('nis', $nis);
    $this->db->delete('tb_surat');
  }

  public function detail()
  {
    $this->db->select('*');
    $this->db->from('tb_surat');
    $this->db->order_by('nama', 'asc');
    return $this->db->get()->result_array();
  }
}
