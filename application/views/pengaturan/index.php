<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 m-sm-2 text-gray-800"><?= $judul; ?></h1>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <?= form_open_multipart('pengaturan/update'); ?>
        <input type="hidden" name="id" value="<?= $pengaturan['id']; ?>">
        <div class="form-group">
          <label for="pemerintah">Nama Pemerintah</label>
          <input type="text" class="form-control" id="pemerintah" name="pemerintah" value="<?= $pengaturan['pemerintah']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="dinas">Dinas Kabupaten / Kota</label>
          <input type="text" class="form-control" id="dinas" name="dinas" value="<?= $pengaturan['dinas']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nama_sekolah">Nama Sekolah</label>
          <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $pengaturan['nama_sekolah']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pengaturan['alamat']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="thn_pembelajaran">Tahun Pembelajaran</label>
          <input type="text" class="form-control" id="thn_pembelajaran" name="thn_pembelajaran" value="<?= $pengaturan['thn_pembelajaran']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nama_kepsek">Nama Kepala Sekolah</label>
          <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" value="<?= $pengaturan['nama_kepsek']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nip">NIP Kepala Sekolah</label>
          <input type="text" class="form-control" id="nip" name="nip" value="<?= $pengaturan['nip']; ?>" readonly>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">Logo Instansi</div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-2">
                <img src="<?= base_url('assets/img/') . $pengaturan['logo_instansi']; ?>" class="img-thumbnail">
              </div>
              <div class="col-sm-8">
                <div class="custom-file">
                  <input type="file" class="logo_instansi" name="logo_instansi" id="logo_instansi" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">Tanda Tangan Kepala Sekolah</div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-2">
                <img src="<?= base_url('assets/img/') . $pengaturan['ttd_kepsek']; ?>" class="img-thumbnail">
              </div>
              <div class="col-sm-8">
                <div class="custom-file">
                  <input type="file" class="ttd_kepsek" name="ttd_kepsek" id="ttd_kepsek"  class="form-control" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">Logo Sekolah</div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-2">
                <img src="<?= base_url('assets/img/') . $pengaturan['logo_sekolah']; ?>" class="img-thumbnail">
              </div>
              <div class="col-sm-8">
                <div class="custom-file">
                  <input type="file" class="logo_sekolah" name="logo_sekolah" id="logo_sekolah" class="form-control" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="tgl_pengumuman">Tanggal Pengumuman</label>
          <input type="text" class="form-control" id="tgl" name="tgl_pengumuman" value="<?= $pengaturan['tgl_pengumuman']; ?>" readonly>
        </div>
        <div class="form-group">
          <div class="float-right">
            <button type="submit" id="btnDisable" class="btn btn-primary" disabled="disabled">
              <i class="fas fa-save"></i> Simpan</button>
            <button type="button" id="btEnable" class="btn btn-warning"> <i class="fas fa-edit"></i> Edit</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- /.container-fluid -->