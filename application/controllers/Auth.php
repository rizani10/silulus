<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run()  == FALSE) {
      $data['judul'] = 'Halaman Login';
      $this->load->view('auth/index', $data);
    } else {
      // methode private buat ambil data inputan
      $this->_login();
    }
  }


  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // ambil data di database
    $tb_user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

    // cek username ada atau tidak didatabse
    if ($tb_user) {
      // jika terdaftar cek password
      if (password_verify($password, $tb_user['password'])) {
        // jika password benar buat session
        $data = [
          'username' => $tb_user['username']
        ];
        $this->session->set_userdata($data);
        redirect('home');
      } else {
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Password salah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Username tidak terdaftar</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Kamu telah keluar dari aplikasi</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            ');
    redirect('auth');
  }
}
