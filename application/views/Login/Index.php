
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mercury Global Services | Payroll Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/mdi/css/materialdesignicons.min.css">
<!--     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
  
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
               <img src="assets/images/mercury_global_logo.png" style="height: 80px; width: 380px;" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
                  <span class="text-danger"></span>
              <form method="post" action="<?php echo base_url(); ?>Login/login_validation">
                <span class="text-danger"><?php echo $this->session->flashdata("error"); ?> </span> 
                <span><?php if($this->session->flashdata('login')=="sucess") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-warning"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="username" id="exampleInputEmail" placeholder="Username">
                  </div>
                </div>
              

                 <div class="form-group">
                  <label>Password</label>
                  <div class="input-group" id="show_hide_password">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-warning"></i>
                      </span>
                    </div>
                    <input class="form-control form-control-lg border-left-0 border-right-0 pwd" name="password" type="password" placeholder="Password">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-left-0">
                      <a href=""><i class="mdi mdi-eye text-warning"></i></a>
                      </span>
                    </div>
                  </div>
                </div>


                <!-- <div class="form-group">

      <label>Password:</label>
      
      <input type="password" id="password" name="password" class="form-control" data-toggle="password">
    </div> -->
                <div class="my-2 d-flex justify-content-between align-items-center">
                
                  
                </div>
                <div class="my-3">
                  <input type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" name="insert" value="Login">
                </div>
               
               
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
  
    <!-- form end -->
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>assets/js/template.js"></script>
  <script src="<?php echo base_url();?>assets/js/settings.js"></script>
  <script src="<?php echo base_url();?>assets/js/todolist.js"></script>
   <script src="<?php echo base_url();?>assets/js/bootstrap-show-password.min.js"></script>

  <!-- endinject -->
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    

    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "mdi-eye" );
            $('#show_hide_password i').removeClass( "mdi-eye-off" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "mdi-eye" );
            $('#show_hide_password i').addClass( "mdi-eye-off" );
        }
    });
    
});
</script>