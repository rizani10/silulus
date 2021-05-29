<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <?= $this->session->flashdata('pesan'); ?>
  <div class="card">
    <div class="card-body">
      <a href="<?= base_url('lulus/lampiran') ?>" target="blank" class="btn btn-success btn-sm">
        <i class="fas fa-file-pdf"></i> Lampiran
      </a>
      <button type="button" id="btn-delete" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Hapus Semua Data</button>
      <div class="float-right">
        <a href="<?= base_url('upload') ?>" class="btn btn-success btn-sm" title="Upload Data">
          <i class="fas fa-upload"></i>
        </a>
        <a href="<?= base_url('lulus/tambah') ?>" class="btn btn-primary btn-sm" title="Tambah Data">
          <i class="fas fa-plus"></i>
        </a>
      </div><br><br>
      <div class="col-lg-12">
        <div class="table-responsive">
          <form method="post" action="<?= base_url('lulus/delete') ?>" id="form-delete">
            <table class="table table-bordered table-hover table-striped" id="table">
              <thead>
                <tr class="table-primary" style="text-align: center;">
                  <th style="width: 10px;"><input type="checkbox" id="check-all"></th>
                  <th scope="col" style="width: 20px;">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col" style="width: 35px;">NIS</th>
                  <th scope="col" style="width: 70px;">NISN</th>
                  <th scope="col" style="width: 100px;">Tempat Lahir</th>
                  <th scope="col" style="width: 120px;">Tanggal Lahir</th>
                  <th scope="col" style="width: 100px;">Nama Orang Tua</th>
                  <th scope="col" style="width: 170px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                foreach ($kelulusan as $kl) : ?>
                  <tr>
                    <td><input type='checkbox' class='check-item' name='nis[]' value="<?= $kl['nis']; ?>"></td>
                    <td style="text-align: center;"><?= $i++; ?></td>
                    <td><?= $kl['nama']; ?></td>
                    <td style="text-align: center;"><?= $kl['nis']; ?></td>
                    <td style="text-align: center;"><?= $kl['nisn']; ?></td>
                    <td style="text-align: center;"><?= $kl['tempat_lahir']; ?></td>
                    <td style="text-align: center;"><?= $kl['tgl_lahir']; ?></td>
                    <td><?= $kl['nama_orangtua']; ?></td>
                    <td>

                      <a href="" data-toggle="modal" data-target="#print<?= $kl['nisn']; ?>" class="badge badge-success">Print</a>

                      <a href="" data-toggle="modal" data-target="#hapus<?= $kl['id']; ?>" class="badge badge-danger"> Hapus</a>

                      <a href="<?= base_url('lulus/editData/') . $kl['id']; ?>" class="badge badge-warning">Edit</a>

                      <a href="<?= base_url('lulus/lihatData/') . $kl['id']; ?>" class="badge badge-info"> Lihat</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- modal print -->
<?php foreach ($kelulusan as $kl) : ?>
  <div class="modal fade" id="print<?= $kl['nisn']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Print ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href="<?= base_url('lulus/print/') . $kl['nisn']; ?>" target="blank" class="btn btn-info center">Surat Keterangan Lulus</a>
          <a href="<?= base_url('lulus/printSKHU/') . $kl['nisn']; ?>" target="blank" class="btn btn-primary center">SKHU Sementara</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- modal print -->

<!-- modal hapus semua -->
<?php foreach ($kelulusan as $kl) : ?>
  <div class="modal fade" id="hapus<?= $kl['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus data kelulusan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
          <p class="mb-0">Apa anda yakin ingin menghapus data ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="<?= base_url('lulus/hapus/') . $kl['id']; ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- modal hapus semua -->