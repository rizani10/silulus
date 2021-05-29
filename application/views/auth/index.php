<!doctype html>
<html lang="en">

<head>
  <title><?= $judul; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/cuan.png') ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Silahkan Login</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-user-o"></span>
            </div>
            <h3 class="text-center mb-4">Login</h3>
            <?= $this->session->flashdata('pesan'); ?>
            <form action="" method="POST" class="login-form">
              <div class="form-group">
                <input type="text" class="form-control rounded-left" name="username" placeholder="Username">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>`
              </div>
              <div class="form-group">
                <input type="password" class="form-control rounded-left" name="password" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>`
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/popper.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>