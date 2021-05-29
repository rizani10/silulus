<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengaturan_model');
    if (!$this->session->userdata('username')) {
      redirect("auth");
    }
  }

  public function index()
  {
    // session
		$data['tb_user'] = $this->db->get_where('tb_user', [
			'username' => $this->session->userdata('username')
    ])->row_array();
    
    $data['judul'] = 'Pengaturan';
    // ambil data
    $data['pengaturan'] = $this->db->get('pengaturan')->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('pengaturan/index', $data);
    $this->load->view('templates/footer');
  }

  public function update()
  {

    $this->Pengaturan_model->update();
    redirect('pengaturan');
  }
}
