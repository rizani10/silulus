<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Form tambah data kelulusan</h5>
      </div>
      <div class="card-body">
        <form action="<?= base_url('lulus/tambah'); ?>" method="POST">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= set_value('nama'); ?>">
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="nisn">NISN</label>
              <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="<?= set_value('nisn'); ?>">
              <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="nis">NIS</label>
              <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?= set_value('nis'); ?>">
              <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" class="form-control" id="sekolah_asal" placeholder="Sekolah Asal">
          </div> -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir'); ?>">
              <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="tgl_pengumuman">Tanggal Lahir</label>
              <input type="text" class="form-control" id="tgl_pengumuman" name="tgl_lahir" placeholder="Tanggal Lahir">
              <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="nama_orangtua">Nama Ayah</label>
              <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua" placeholder="Nama Ayah" value="<?= set_value('nama_orangtua'); ?>">
              <?= form_error('nama_orangtua', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="no_surat">No. Surat</label>
              <input type="text" class="form-control" id="no_surat" name="nomor_surat" placeholder="Nomor Surat" value="<?= set_value('nomor_surat'); ?>">
              <?= form_error('nomor_surat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="dikeluarkan">Dikeluarkan di</label>
              <input type="text" class="form-control" id="dikeluarkan" name="dikeluarkan" placeholder="Dikelurakannya Surat" value="<?= set_value('dikeluarkan'); ?>">
              <?= form_error('dikeluarkan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="tgl_keluar">Tanggal dikeluarkan surat</label>
              <input type="text" class="form-control" id="tgl_keluar" name="tgl_dikeluarkan" placeholder="Tanggal dikeluarkan surat" value="<?= set_value('tgl_dikeluarkan'); ?>">
              <?= form_error('tgl_dikeluarkan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="pai">Pendidikan Agama Islam dan Budi Pekerti</label>
              <input type="text" class="form-control" id="pai" name="pai" placeholder="Pendidikan Agama Islam dan Budi Pekerti" value="<?= set_value('pai'); ?>">
              <?= form_error('pai', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="pkn">Pendidikan Kewarganegaraan</label>
              <input type="text" class="form-control" id="pkn" name="pkn" placeholder="Pendidikan Kewarganegaraan" value="<?= set_value('pkn'); ?>">
              <?= form_error('pkn', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="b_ind">Bahasa Indonesia</label>
              <input type="text" class="form-control" id="b_ind" name="b_ind" placeholder="Bahasa Indonesia" value="<?= set_value('b_ind'); ?>">
              <?= form_error('b_ind', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="b_ing">Bahasa Inggris</label>
              <input type="text" class="form-control" id="b_ing" name="b_ing" placeholder="Bahasa Inggris" value="<?= set_value('b_ing'); ?>">
              <?= form_error('b_ing', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="mtk">Matematika</label>
              <input type="text" class="form-control" id="mtk" name="mtk" placeholder="Matematika" value="<?= set_value('mtk'); ?>">
              <?= form_error('mtk', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="ipa">Ilmu Pengetahuan Alam</label>
              <input type="text" class="form-control" id="ipa" name="ipa" placeholder="Ilmu Pengetahuan Alam" value="<?= set_value('ipa'); ?>">
              <?= form_error('ipa', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="ips">Ilmu Pengetahuan Sosial</label>
              <input type="text" class="form-control" id="ips" name="ips" placeholder="Ilmu Pengetahuan Sosial" value="<?= set_value('ips'); ?>">
              <?= form_error('ips', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="senbud">Seni Budaya</label>
              <input type="text" class="form-control" id="senbud" name="senbud" placeholder="Seni Budaya" value="<?= set_value('senbud'); ?>">
              <?= form_error('senbud', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="penjeskes">Pendidikan Olahraga dan Kesehatan</label>
              <input type="text" class="form-control" id="penjeskes" name="penjeskes" placeholder="Pendidikan Olahraga dan Kesehatan" value="<?= set_value('penjeskes'); ?>">
              <?= form_error('penjeskes', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="prakarya">Prakarya</label>
              <input type="text" class="form-control" id="prakarya" name="prakarya" placeholder="Prakarya" value="<?= set_value('prakarya'); ?>">
              <?= form_error('prakarya', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
              <label for="moluk">Moluk</label>
              <input type="text" class="form-control" id="moluk" name="moluk" placeholder="moluk">
              <?= form_error('moluk', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
              <label for="rata_rata">Rata - Rata</label>
              <input type="text" class="form-control" id="rata_rata" name="rata_rata" placeholder="Rata - Rata" value="<?= set_value('rata_rata'); ?>">
              <?= form_error('rata_rata', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
              <label for="jk"> Keterangan Lulus</label><br>
              <label class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan_lulus" value="Lulus">
                <span class="form-check-label">
                  Lulus
                </span><br><br>
              </label>
              <label class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan_lulus" value="Tidak Lulus">
                <span class="form-check-label">
                  Tidak Lulus
                </span>
              </label>
            </div>
          </div>
          <div class="float-right">
            <a href="<?= base_url('lulus') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->