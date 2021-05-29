<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <?= form_open_multipart('upload/excel'); ?>
        <div class="form-group">
          <label for="importexcel">Silahkan Masukkan File</label>
          <input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">
          <small class="text-danger"><strong>Type file "XLS, XLSX"</strong></small>
        </div>
        <a href="<?= base_url('assets/excel/contoh/contohFormat.xlsx') ?>">Download Format Excel</a>
        <div class="float-right">
          <a href="<?= base_url('lulus') ?>" class="btn btn-secondary">Batal</a>
          <button type="submit" class="btn btn-primary">Upload Data</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->