
<?php if($this->session->userdata('userdata')==NULL) redirect(base_url()); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mercury Global Services | Payroll Management System</title>
  <link rel="stylesheet" href="<?=base_url(); ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/select2/select2.min.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/jquery-toast-plugin/jquery.toast.min.css">
  <link rel="shortcut icon" href="<?=base_url(); ?>assets/images/favicon.png" />
  <link rel="stylesheet" href="<?=base_url(); ?>assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-toast-plugin/jquery.toast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/toastDemo.js"></script>

  <style>
      .btn-fixed-size {
          width: 100px !important;
      }
  </style>

</head>
<body class="sidebar-absolute sidebar-hidden">
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>Dashboard">         
          <span class="logo-lg"><img style="width: 200px; height: 40px;" src="<?php echo base_url(); ?>assets/images/mercury_global_logo.png"></span>
        <a class="navbar-brand brand-logo-mini"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <?php if($this->session->userdata('userdata')['photo']==""){
                  echo '<img src="uploads/profileimg.png" alt="profile" class="img-lg rounded-circle"/>';
                }else{
                  echo '<img src="uploads/'.$this->session->userdata('userdata')['photo'].'" alt="profile" class="img-lg rounded-circle"/>';
                }
               ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
               <?php echo anchor('Profile', '<i class="mdi mdi-face ml-4"></i>
              <span class="menu-title">Profile</span>', 'class="nav-link"'); ?>
               <?php echo anchor('Login/logout', '<i class="mdi mdi-logout ml-4"></i>
              <span class="menu-title">Logout</span>', 'class="nav-link"'); ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      
      <?php $this->view('Template/Sidebar'); ?>