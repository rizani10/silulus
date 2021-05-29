<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $this->form_validation->set_rules('cari', 'Cari', 'required|numeric', [
      'required' => 'Silahkan isi data yang diminta',
      'numeric'  => 'Isi menggunakan angka'
    ]);

    // panggil table pengaturan
    $data['pengaturan'] = $this->db->get('pengaturan')->row_array();

    if ($this->form_validation->run() == FALSE) {
      $data['judul'] = 'Pengumuman Kelulusan';
      $this->load->view('user/index', $data);
    } else {
      $cari = $this->input->post('cari');
      $data['kelulusan'] = $this->User_model->cari($cari);
      $data['judul'] = 'Hasil Pencarian';
      $this->load->view('user/cari', $data);
    }
  }

  public function print($nisn)
  {

    // panggil table pengaturan
    $data['pengaturan'] = $this->db->get('pengaturan')->row_array();

    $data['kelulusan'] = $this->db->get_where('tb_surat', ['nisn' => $nisn])->row_array();
    $this->load->view('report/cetakSk', $data);
  }

  public function printSKHU($nisn)
  {

    // panggil table pengaturan
    $data['pengaturan'] = $this->db->get('pengaturan')->row_array();

    $data['kelulusan'] = $this->db->get_where('tb_surat', ['nisn' => $nisn])->row_array();
    $this->load->view('report/cetakSKHU', $data);
  }

}
