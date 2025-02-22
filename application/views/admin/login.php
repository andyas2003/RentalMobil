<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css'); ?>">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger alert-transparent">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
          <div class="alert alert-danger alert-transparent">
            <?php echo $error; ?>
          </div>
        <?php endif; ?>

        <form action="<?php echo site_url('admin/login'); ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username"
              value="<?php echo set_value('username'); ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js'); ?>"></script>
  <script>
    $(document).ready(function () {
      setTimeout(function () {
        $('.alert-transparent').fadeOut('slow');
      }, 3000);
    });
  </script>
</body>
</html>