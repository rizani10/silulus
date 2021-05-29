<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Lihat data kelulusan</h5>
      </div>
      <div class="card-body">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $kelulusan['nama']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="<?= $kelulusan['nisn']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?= $kelulusan['nis']; ?>" readonly>
          </div>
        </div>
        <!-- <div class="form-group">
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" class="form-control" id="sekolah_asal" placeholder="Sekolah Asal">
          </div> -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $kelulusan['tempat_lahir']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="tgl_pengumuman">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tgl_pengumuman" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $kelulusan['tgl_lahir']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="nama_orangtua">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua" placeholder="Nama Ayah" value="<?= $kelulusan['nama_orangtua']; ?>" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="no_surat">No. Surat</label>
            <input type="text" class="form-control" id="no_surat" name="nomor_surat" placeholder="Nomor Surat" value="<?= $kelulusan['nomor_surat']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="dikeluarkan">Dikeluarkan di</label>
            <input type="text" class="form-control" id="dikeluarkan" name="dikeluarkan" placeholder="Dikelurakannya Surat" value="<?= $kelulusan['dikeluarkan']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="tgl_pengumuman">Tanggal dikeluarkan surat</label>
            <input type="text" class="form-control" id="tgl_pengumuman" name="tgl_dikeluarkan" placeholder="Tanggal dikeluarkan surat" value="<?= $kelulusan['tgl_dikeluarkan']; ?>" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="pai">Pendidikan Agama Islam dan Budi Pekerti</label>
            <input type="text" class="form-control" id="pai" name="pai" placeholder="Pendidikan Agama Islam dan Budi Pekerti" value="<?= $kelulusan['pai']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="pkn">Pendidikan Kewarganegaraan</label>
            <input type="text" class="form-control" id="pkn" name="pkn" placeholder="Pendidikan Kewarganegaraan" value="<?= $kelulusan['pkn']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="b_ind">Bahasa Indonesia</label>
            <input type="text" class="form-control" id="b_ind" name="b_ind" placeholder="Bahasa Indonesia" value="<?= $kelulusan['b_ind']; ?>" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="b_ing">Bahasa Inggris</label>
            <input type="text" class="form-control" id="b_ing" name="b_ing" placeholder="Bahasa Inggris" value="<?= $kelulusan['b_ing']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="mtk">Matematika</label>
            <input type="text" class="form-control" id="mtk" name="mtk" placeholder="Matematika" value="<?= $kelulusan['mtk']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="ipa">Ilmu Pengetahuan Alam</label>
            <input type="text" class="form-control" id="ipa" name="ipa" placeholder="Ilmu Pengetahuan Alam" value="<?= $kelulusan['ipa']; ?>" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="ips">Ilmu Pengetahuan Sosial</label>
            <input type="text" class="form-control" id="ips" name="ips" placeholder="Ilmu Pengetahuan Sosial" value="<?= $kelulusan['ips']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="senbud">Seni Budaya</label>
            <input type="text" class="form-control" id="senbud" name="senbud" placeholder="Seni Budaya" value="<?= $kelulusan['senbud']; ?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="penjeskes">Pendidikan Olahraga dan Kesehatan</label>
            <input type="text" class="form-control" id="penjeskes" name="penjeskes" placeholder="Pendidikan Olahraga dan Kesehatan" value="<?= $kelulusan['penjeskes']; ?>" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="prakarya">Prakarya</label>
            <input type="text" class="form-control" id="prakarya" name="prakarya" placeholder="Prakarya" value="<?= $kelulusan['prakarya']; ?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="rata_rata">Rata - Rata</label>
            <input type="text" class="form-control" id="rata_rata" name="rata_rata" placeholder="Rata - Rata" value="<?= round($kelulusan['rata_rata']); ?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="jk"> Keterangan Lulus</label><br>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="keterangan_lulus" value="Lulus" <?php if ($kelulusan['keterangan_lulus'] == 'Lulus') echo 'checked' ?>>
              <span class="form-check-label">
                Lulus
              </span><br><br>
            </label>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="keterangan_lulus" value="Tidak Lulus" <?php if ($kelulusan['keterangan_lulus'] == 'Tidak Lulus') echo 'checked' ?>>
              <span class="form-check-label">
                Tidak Lulus
              </span>
            </label>
          </div>
        </div>
        <div class="float-right">
          <a href="<?= base_url('lulus'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->