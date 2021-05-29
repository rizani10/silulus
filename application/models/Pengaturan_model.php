<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan_model extends CI_Model
{
  public function update()
  {

    $data['pengaturan'] = $this->db->get('pengaturan')->row_array();

    $upload_gambar = $_FILES['logo_instansi']['name'];
    if ($upload_gambar) {
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']     = '1024';
      $config['upload_path'] = './assets/img/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('logo_instansi')) {
        $old_image = $data['pengaturan']['logo_instansi'];
        unlink(FCPATH . 'assets/img/' . $old_image);
        $new_image = $this->upload->data('file_name');
        $this->db->set('logo_instansi', $new_image);
      } else {

        echo $this->upload->display_errors();
      }
    }

    $ttd_kepsek = $_FILES['ttd_kepsek']['name'];
    if ($ttd_kepsek) {
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']     = '1024';
      $config['upload_path'] = './assets/img/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('ttd_kepsek')) {
        $old_image = $data['pengaturan']['ttd_kepsek'];
        unlink(FCPATH . 'assets/img/' . $old_image);
        $new_image = $this->upload->data('file_name');
        $this->db->set('ttd_kepsek', $new_image);
      } else {

        echo $this->upload->display_errors();
      }
    }

    $logo_sekolah = $_FILES['logo_sekolah']['name'];
    if ($logo_sekolah) {
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']     = '1024';
      $config['upload_path'] = './assets/img/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('logo_sekolah')) {
        $old_image = $data['pengaturan']['logo_sekolah'];
        unlink(FCPATH . 'assets/img/' . $old_image);
        $new_image = $this->upload->data('file_name');
        $this->db->set('logo_sekolah', $new_image);
      } else {

        echo $this->upload->display_errors();
      }
    }

    $data = [
      'pemerintah' => $this->input->post('pemerintah'),
      'dinas'   => $this->input->post('dinas'),
      'alamat'   => $this->input->post('alamat'),
      'thn_pembelajaran'   => $this->input->post('thn_pembelajaran'),
      'nama_sekolah'   => $this->input->post('nama_sekolah'),
      'nama_kepsek'   => $this->input->post('nama_kepsek'),
      'nip'   => $this->input->post('nip'),
      'tgl_pengumuman'   => $this->input->post('tgl_pengumuman')
    ];

    $this->db->set($data);
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pengaturan');
  }
}
