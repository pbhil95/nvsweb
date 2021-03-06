<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      max-width: 500px;
    }
  </style>
  <title>NVS WEB</title>
</head>

<body>
  <br>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="">

        <h2>Login in</h2>

        <?php if (session()->getFlashdata('msg')) : ?>
          <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
          </div>
        <?php endif; ?>
        <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
          <div class="form-group mb-3">
            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
          </div>
          <div class="form-group mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-success">Signin</button>
          </div>
        </form>
        <br>
        <div class=""><a href="<?php echo site_url('/signup') ?>" class="btn btn-dark mb-2">Register Here </a></div>
      </div>

    </div>
  </div>
</body>

</html>