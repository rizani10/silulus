<?php
defined('BASEPATH') or exit('No direct script access allowed');

// panggil Spout
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Upload extends CI_Controller
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

    $data['kelulusan'] = $this->db->get('tb_surat')->result_array();
    $data['judul'] = 'Upload Data';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('upload/index', $data);
    $this->load->view('templates/footer');
  }

  public function excel()
  {
    $config['upload_path']          = './assets/excel/';
    $config['allowed_types']        = 'xlsx|xls';
    $config['file_name']            = 'doc' . time();

    $this->load->library('upload', $config);
    // proses upload
    if ($this->upload->do_upload('importexcel')) {
      // ambil file nya
      $file = $this->upload->data();
      $reader = ReaderEntityFactory::createXLSXReader();

      // buka excel di upload path
      $reader->open('assets/excel/' . $file['file_name']);
      // looping
      foreach ($reader->getSheetIterator() as $sheet) {
        // beri numer
        $numRows = 1;
        foreach ($sheet->getRowIterator() as $row) {
          if ($numRows > 1) {
            $kelulusan = [
              'nama'            => $row->getCellAtIndex(1),
              'nisn'            => $row->getCellAtIndex(2),
              'nis'             => $row->getCellAtIndex(3),
              'tempat_lahir'    => $row->getCellAtIndex(4),
              'tgl_lahir'       => date($row->getCellAtIndex(5)),
              'nama_orangtua'   => $row->getCellAtIndex(6),
              'nomor_surat'     => $row->getCellAtIndex(7),
              'nomor_skhu'     => $row->getCellAtIndex(8),
              'dikeluarkan'     => $row->getCellAtIndex(9),
              'asal_sekolah'    => $row->getCellAtIndex(10),
              'pai'             => $row->getCellAtIndex(11),
              'pkn'             => $row->getCellAtIndex(12),
              'b_ind'           => $row->getCellAtIndex(13),
              'b_ing'           => $row->getCellAtIndex(14),
              'mtk'             => $row->getCellAtIndex(15),
              'ipa'             => $row->getCellAtIndex(16),
              'ips'             => $row->getCellAtIndex(17),
              'senbud'          => $row->getCellAtIndex(18),
              'penjeskes'       => $row->getCellAtIndex(19),
              'prakarya'        => $row->getCellAtIndex(20),
              'rata_rata'       => $row->getCellAtIndex(21),
              'keterangan_lulus' => $row->getCellAtIndex(22)
            ];

            // insert ke database dengan model
            $this->Kelulusan_model->insertData($kelulusan);
          }
          $numRows++;
        }
        // tutup reader
        $reader->close();
        // hapus file yg di upload
        unlink('assets/excel/' . $file['file_name']);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil di Upload</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
	      </div>
        ');
        redirect('lulus');
      }
    } else {
      echo "Error : " . $this->upload->display_errors();
    }
  }
}
