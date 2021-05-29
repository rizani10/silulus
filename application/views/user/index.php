<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title> <?= $judul; ?> </title>
  <style>
    body,
    html {
      height: 100%;
    }

    .bg {
      background-image: url("assets/img/img3.jpg");
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/cuan.png') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body>
  <div class="bg">
    <div class="container">

      <table class="table">
        <tr>
          <td style="text-align: center;"><img src="<?= base_url('assets/img/') . $pengaturan['logo_sekolah']; ?>" height="116" />
            <h3><b><?= $pengaturan['nama_sekolah']; ?></b></h3>
            <p>PENGUMUMAN KELULUSAN</p>
          </td>
        </tr>
      </table>

      <div id="clock" class="lead"></div>
      <div id="xpengumuman" class="xpengumuman">

        <form action="<?= base_url(); ?>" method="post">
          <div class="input-group">
            <input type="text" name="cari" class="form-control" placeholder="Masukkan NISN atau NIS Anda ... "><br><br>
          </div>
          <div class="input-group">
            <button type="submit" class="btn btn-primary">Cari</button>
          </div>
        </form> <br><br>
        <?php if (validation_errors()) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?= validation_errors(); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <script src="<?= base_url('assets/js/jquery.countdown.min.js'); ?>"></script>
  <script type="text/javascript">
    var skrg = Date.now();
    $('#clock').countdown("<?= $pengaturan['tgl_pengumuman']; ?>", {
        elapse: true
      })
      .on('update.countdown', function(event) {
        var $this = $(this);
        if (event.elapsed) {
          $("#xpengumuman").show();
          $("#clock").hide();
        } else {
          $this.html(event.strftime(
            '<h1 style="font-size: medium; text-align:center"><strong>PENGUMUMAN DILAKSANAKAN DALAM</strong></h1><br><h1 style="font-size: medium; text-align:center"><strong>%D (hari): %H (jam) : %M (menit) : %S(detik)</strong></h1>'));
          $("#xpengumuman").hide();
        }
      });
  </script>
</body>


</html>