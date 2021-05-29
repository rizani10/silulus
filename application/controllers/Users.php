<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Users_model');
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

    $data['users'] = $this->db->get('tb_user')->result_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|is_unique[tb_user.username]', [
      'min_length' => 'Username terlalu pendek, minimal 5 huruf',
      'is_unique'  => 'Username sudah terdaftar'
    ]);

    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
      'min_length' => 'Password terlalu pendek, minimal 5 huruf',
      'matches'    => 'Password tidak sama'
    ]);

    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]', [
      'min_length' => 'Password terlalu pendek, minimal 5 huruf',
      'matches'    => 'Password tidak sama'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data['judul'] = 'Daftar User';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('users/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Users_model->insertData();
      $this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
      redirect('users');
    }
  }

  public function Edit()
  {
    $this->Users_model->editUsers();
    $this->session->set_flashdata('pesan', '
      	<div class="alert alert-success alert-dismissible fade show" role="alert">
      		<strong>Data berhasil diubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
      			<span aria-hidden="true">&times;</span>
      		</button>
      	</div>
      	');
    redirect('users');
  }

  public function hapus($id)
  {
    $this->db->delete('tb_user', ['id' => $id]);
    $this->session->set_flashdata('pesan', '
      	<div class="alert alert-success alert-dismissible fade show" role="alert">
      		<strong>Data berhasil dihapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
      			<span aria-hidden="true">&times;</span>
      		</button>
      	</div>
      	');
    redirect('users');
  }
}
