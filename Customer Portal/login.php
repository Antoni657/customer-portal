<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page  dark-mode">
  <!-- <script>
    start_loader()
  </script> -->
  
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
      border-radius: 12px;
    }
    #card-title{
      background-color: #eab308;
    }

    <link rel="stylesheet" href="build\css\style.css" />
  </style>

  <div class="login-box" >
    <!-- /.login-logo -->
    <div class="card card-outline" id="card">
      <div class="card-header text-center bg-warning" id="card-title" >
        <a href="./" class="h1"><b>Welcome</b></a>
      </div>
      <div class="card-body">
      <p class="login-box-msg" style="font-size: 2rem;">Customer</p>

        <form id="clogin-frm" action="" method="post">
          <div class="input-group mb-3 ">
            <input type="text" class="form-control bg-transparent" autofocus name="client_code" placeholder="Customer Code">
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control bg-transparent" name="password" placeholder="Password">
          </div>
          <div class="column">
            <div class="d-flex align-items-center justify-content-center py-2">
              <a href="<?php echo base_url.'admin' ?>">Login as Admin</a>
            </div>
            <div class="d-flex align-items-center justify-content-center py-2">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>
        
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

  <!-- Add JavaScript for page reload after form submission -->
  <script>
    $(document).ready(function(){
      $('form#clogin-frm').submit(function(e){
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function(response) {
            // Reload page after form submission
            window.setTimeout(function() {
              window.location.href = 'homepage.php'; // Redirect to homepage after 2 seconds
            }, 0);
          },
          error: function() {
            // Handle error if needed
          }
        });
      });
    });
  </script>
</body>
</html>
