<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

  <?= $this->session->flashdata('pesan'); ?>

  <div class="card">
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $users['nama']; ?>">
          <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="nama">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $users['username']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nama">Password Lama</label>
          <input type="password" class="form-control" id="passwordlama" name="passwordlama" placeholder="Password">
          <?= form_error('passwordlama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="nama">Password Baru</label>
          <input type="password" class="form-control" id="passwordbaru1" name="passwordbaru1" placeholder="Password">
          <?= form_error('passwordbaru1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="nama">Verifikasi Password Baru</label>
          <input type="password" class="form-control" id="passwordbaru2" name="passwordbaru2" placeholder="Verifikasi Password">
          <?= form_error('passwordbaru2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <a href="<?= base_url('users') ?>" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary"> <i class="fas fa-edit"></i> Ubah</button>

      </form>
    </div>
  </div>
</div>