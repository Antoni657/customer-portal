<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page  dark-mode">
  <script>
    start_loader()
  </script>
  <style>
    body{
      background-image: url("<?php echo validate_image($_settings->info('cover')) ?>");
      background-size:cover;
      background-repeat:no-repeat;
    }
    .login-title{
      text-shadow: 2px 2px black
    }
    #card {
  background-color: rgba(3, 40, 48, 0.8);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
  /* background-color: #032830; */
  border-radius: 12px;
}
#card-title{
 background-color: #eab308; 
 
  
}
  </style>
  
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline" id="card">
    <div class="card-header text-center bg-warning" id="card-title">
      <a href="./" class="h1"><b>Welcome</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="font-size: 2rem;">Admin </p>

      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control bg-transparent" autofocus name="username" placeholder="Username">

        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control bg-transparent" name="password" placeholder="Password">

        </div>
        <div class="column">
          <div class="d-flex align-items-center justify-content-center py-2">
            <a href="<?php echo base_url. 'homepage.php'?>">Login as Customer</a>
          </div>
          <!-- /.col -->
          <div class="d-flex align-items-center justify-content-center py-2">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>