<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong><?= validation_errors(); ?></strong>
    </div>
  <?php endif; ?>

  <?= $this->session->flashdata('pesan'); ?>

  <div class="card">
    <div class="card-body">
      <div class="float-right">
        <a href="" data-toggle="modal" data-target="#tambah" class="btn btn-primary" title="Tambah Data">
          <i class="fas fa-plus"></i>
        </a>
      </div><br><br>
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" id="table">
            <thead>
              <tr class="table-primary" style="text-align: center;">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($users as $u) : ?>
                <tr>
                  <td style="text-align: center;"><?= $i++; ?></td>
                  <td><?= $u['nama']; ?></td>
                  <td style="text-align: center;"><?= $u['username']; ?></td>
                  <td>
                    <a href="" data-toggle="modal" data-target="#edit<?= $u['id']; ?>" class="badge badge-warning">Edit</a>
                    <a href="" data-toggle="modal" data-target="#hapus<?= $u['id'];?>" class="badge badge-danger"> Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<!-- modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form tambah user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="nama">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="nama">Password</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="nama">Verifikasi Password</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Verifikasi Password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /modal tambah -->

<!-- modal edit -->
<?php foreach ($users as $u) : ?>
  <div class="modal fade" id="edit<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Form tambah user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('users/Edit') ?>" method="post">
          <input type="hidden" name="id" value="<?= $u['id']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $u['nama']; ?>">
            </div>
            <div class="form-group">
              <label for="nama">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $u['username']; ?>">
            </div>
            <div class="form-group">
              <label for="password">Password Baru</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password Baru">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- /modal edit -->

<!-- modal hapus semua -->
<?php foreach ($users as $u) : ?>
	<div class="modal fade" id="hapus<?= $u['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
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
					<a href="<?= base_url('users/hapus/') . $u['id']; ?>" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- modal hapus semua -->

