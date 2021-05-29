<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lulus extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kelulusan_model');
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

    $data['kelulusan'] = $this->Kelulusan_model->detail();
    $data['judul'] = 'Data Kelulusan';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('lulus/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {

    // session
    $data['tb_user'] = $this->db->get_where('tb_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim|numeric');
    $this->form_validation->set_rules('nis', 'NIS', 'required|trim|numeric');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
    $this->form_validation->set_rules('nama_orangtua', 'Nama Ayah', 'required|trim');
    $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required|trim');
    $this->form_validation->set_rules('dikeluarkan', 'Dikeluarkan', 'required|trim');
    $this->form_validation->set_rules('tgl_dikeluarkan', 'Tanggal Dikeluarkan', 'required|trim');
    $this->form_validation->set_rules('pai', 'Pendidikan Agama Islam dan Budi Pekerti', 'required|trim|numeric');
    $this->form_validation->set_rules('pkn', 'Pendidikan Kewarganegaraan', 'required|trim|numeric');
    $this->form_validation->set_rules('b_ind', 'Bahasa Indonesia', 'required|trim|numeric');
    $this->form_validation->set_rules('b_ing', 'Bahasa Inggris', 'required|trim|numeric');
    $this->form_validation->set_rules('mtk', 'Matematika', 'required|trim|numeric');
    $this->form_validation->set_rules('ipa', 'Ilmu Pengatahuan Alam', 'required|trim|numeric');
    $this->form_validation->set_rules('ips', 'Ilmu Pengatahuan Sosial', 'required|trim|numeric');
    $this->form_validation->set_rules('senbud', 'Seni Budaya', 'required|trim|numeric');
    $this->form_validation->set_rules('penjeskes', 'Pendidikan Olahraga dan Kesehatan', 'required|trim|numeric');
    $this->form_validation->set_rules('prakarya', 'Prakarya', 'required|trim|numeric');
    $this->form_validation->set_rules('moluk', 'Muatan Lokal', 'required|trim|numeric');
    $this->form_validation->set_rules('rata_rata', 'Rata - Rata', 'required|trim|numeric');
    if ($this->form_validation->run() == FALSE) {
      $data['judul'] = 'Data Kelulusan';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar');
      $this->load->view('lulus/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Kelulusan_model->tambahData();
      $this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
      redirect('lulus');
    }
  }

  public function delete()
  {
    $nis = $_POST['nis']; // Ambil data NIS yang dikirim oleh view.php melalui form submit
    $this->Kelulusan_model->delete($nis); // Panggil fungsi delete dari model
    $this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		');
    redirect('lulus');
  }

  public function editData($id)
  {

    // session
    $data['tb_user'] = $this->db->get_where('tb_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // ambil data berdasarkan id
    $data['kelulusan'] = $this->db->get_where('tb_surat', ['id' => $id])->row_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim|numeric');
    $this->form_validation->set_rules('nis', 'NIS', 'required|trim|numeric');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
    $this->form_validation->set_rules('nama_orangtua', 'Nama Ayah', 'required|trim');
    $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required|trim');
    $this->form_validation->set_rules('dikeluarkan', 'Dikeluarkan', 'required|trim');
    $this->form_validation->set_rules('tgl_dikeluarkan', 'Tanggal Dikeluarkan', 'required|trim');
    $this->form_validation->set_rules('pai', 'Pendidikan Agama Islam dan Budi Pekerti', 'required|trim|numeric');
    $this->form_validation->set_rules('pkn', 'Pendidikan Kewarganegaraan', 'required|trim|numeric');
    $this->form_validation->set_rules('b_ind', 'Bahasa Indonesia', 'required|trim|numeric');
    $this->form_validation->set_rules('b_ing', 'Bahasa Inggris', 'required|trim|numeric');
    $this->form_validation->set_rules('mtk', 'Matematika', 'required|trim|numeric');
    $this->form_validation->set_rules('ipa', 'Ilmu Pengatahuan Alam', 'required|trim|numeric');
    $this->form_validation->set_rules('ips', 'Ilmu Pengatahuan Sosial', 'required|trim|numeric');
    $this->form_validation->set_rules('senbud', 'Seni Budaya', 'required|trim|numeric');
    $this->form_validation->set_rules('penjeskes', 'Pendidikan Olahraga dan Kesehatan', 'required|trim|numeric');
    $this->form_validation->set_rules('prakarya', 'Prakarya', 'required|trim|numeric');
    $this->form_validation->set_rules('rata_rata', 'Rata - Rata', 'required|trim|numeric');
    if ($this->form_validation->run() == FALSE) {


      $data['judul'] = 'Data Kelulusan';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar');
      $this->load->view('lulus/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Kelulusan_model->editData();
      $this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
      redirect('lulus');
    }
  }

  public function lihatData($id)
  {
    // session
    $data['tb_user'] = $this->db->get_where('tb_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // ambil data berdasarkan id
    $data['kelulusan'] = $this->db->get_where('tb_surat', ['id' => $id])->row_array();

    $data['judul'] = 'Lihat Data Kelulusan';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('lulus/lihat', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($id)
  {

    // session
    $data['tb_user'] = $this->db->get_where('tb_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $this->db->delete('tb_surat', ['id' => $id]);
    $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
	      </div>
        ');
    redirect('lulus');
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

  public function lampiran()
  {
    $data = [
      'eksport' => $this->Kelulusan_model->detail(),
      'pengaturan' => $this->db->get('pengaturan')->row_array()

    ];
    $this->load->view('report/lampiran', $data);
  }
}

/* End of file Lulus.php */
