<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul; ?></title>
  <style>
    body,
    html {
      height: 100%;
    }

    .id {
      background-image: url("assets/img/img3.jpg");
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/cuan.png') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
  <div class="id">
    <div class="container">
      <h2 style="text-align: center;">Hasil Pencarian</h2><br><br>
      <div class="card">
        <div class="card-body">
          <?php
          // $jumlah = count($kelulusan);
          if ($kelulusan > 0) : ?>
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading"><?= $kelulusan['nama']; ?> Anda Dinyatakan <strong><?= $kelulusan['keterangan_lulus']; ?></strong> </h4>
            </div>

            <table class="table table-bordered">
              <tr>
                <td width=35%>Nama Siswa</td>
                <td><?= $kelulusan['nama']; ?></td>
              </tr>
              <tr>
                <td>NISN</td>
                <td><?= $kelulusan['nisn']; ?></td>
              </tr>
              <tr>
                <td>NIS</td>
                <td><?= $kelulusan['nis']; ?></td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td><?= $kelulusan['tempat_lahir'] . ',' . $kelulusan['tgl_lahir']; ?></td>
              </tr>

            </table>
            <div class="float-right">
              <a href="<?= base_url('user') ?>" class="btn btn-secondary">Kembali</a>

              <a href="<?= base_url('lulus/print/') . $kelulusan['nisn']; ?>" class="btn btn-success" target="blank">Print Surat Keterangan Lulus</a>

              <a href="<?= base_url('lulus/printSKHU/') . $kelulusan['nisn']; ?>" class="btn btn-success" target="blank">Print SKHU Sementara</a>


            </div>

          <?php else : ?>
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">NISN atau NIS yang anda masukkan tidak ditemukan</h4>
              <p>Silahkan hubungi wali kelas atau administrator </p>
              <hr>
              <p class="mb-0"></p> <a href="<?= base_url('user'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>