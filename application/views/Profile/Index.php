  <style type="text/css">
  

.card {
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}

.card {
  border: 0;
  margin-bottom: 30px;
  margin-top: 30px;
  border-radius: 6px;
  color: #333333;
  background: #fff;
  width: 100%;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.card [class*="card-header-"]:not(.card-header-icon):not(.card-header-text):not(.card-header-image) {
  border-radius: 3px;
  margin-top: -20px;
  padding: 15px;
}

.card .card-header-primary .card-icon,
.card .card-header-primary:not(.card-header-icon):not(.card-header-text),
.card .card-header-primary .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 0, 0, 0.12);
}

.card .card-header-primary .card-icon,
.card .card-header-primary .card-text,
.card .card-header-primary:not(.card-header-icon):not(.card-header-text),
.card.bg-primary,
.card.card-rotate.bg-primary .front,
.card.card-rotate.bg-primary .back {
  background: linear-gradient(60deg, #f29d56, #f29d56);
}

.card [class*="card-header-"] {
  margin: 0px 15px 0;
  padding: 0;
  position: relative;
}

.card .card-header {
  z-index: 3 !important;
}

.card [class*="card-header-"],
.card[class*="bg-"] {
  color: #fff;
}

.card .card-header {
  border-bottom: none;
  background: transparent;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #fff;
  border-bottom: 1px solid #eeeeee;
}

.card-profile {
  margin-top: 30px;
  text-align: center;
}

.card-profile .card-avatar {
  max-width: 130px;
  max-height: 130px;
}

.card-profile .card-avatar {
  margin: -50px auto 0;
  border-radius: 50%;
  overflow: hidden;
  padding: 0;
  box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

</style>


  <div class="main-panel">
    <div class="content-wrapper">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Profile</span></li>
        </ol>
      </nav>
      <!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card-body" >
                      <div class="text-center">
                        <?php if($this->session->userdata('userdata')['photo']==""){
                          echo '<img src="uploads/profileimg.png" alt="profile" class="img-lg rounded-circle mb-3 text-center"/>';
                        }else{
                          echo '<img src="uploads/'.$this->session->userdata('userdata')['photo'].'" alt="profile" class="img-lg rounded-circle mb-3 text-center"/>';
                        }
                         ?>
                        <div class="mb-3">
                          <h3><?php echo $this->session->userdata('userdata')['fullname'] ?></h3>
                        </div>
                        <p class="w-75 mx-auto mb-1"><?php echo $this->session->userdata('userdata')['positionDesc']; ?></p>
                        <p class="w-75 mx-auto mb-3"><?php echo $this->session->userdata('userdata')['departmentDesc']; ?></p>                       
                      </div>
                   </div>
                  </div>
                </div>
              </div>
            </div> -->

                   
              <div class="content-wrapper">
                <div class="row">
                  <div class="col-md-4 grid-margin stretch-card">
                    <!-- <div class="card">
                      <div class="card-body">
                        <div class="row"> -->
                          <div class="col-lg-12">

                            <div class="card card-profile">
                <div class="card-avatar">
                  <?php if($this->session->userdata('userdata')['photo']==""){
                      echo '<img src="uploads/profileimg.png" alt="profile" class="img-lg rounded-circle   avatar border-gray"/>';
                    }else{
                      echo '<img src="uploads/'.$this->session->userdata('userdata')['photo'].'" alt="profile" class="img-lg rounded-circle avatar border-gray"/>';
                    }
                  ?>
                </div>
                <div class="card-body">
                  <h3><?php echo $this->session->userdata('userdata')['fullname'] ?></h3>
                  <h6 class="card-category"><?php echo $this->session->userdata('userdata')['username'] ?></h6>
                  <p class="card-description">
                    <?php echo $this->session->userdata('userdata')['positionDesc']; ?>
                    <br>
                    <?php echo $this->session->userdata('userdata')['departmentDesc']; ?>
                  </p>
                </div>
              </div>

              <div class="card">

                <!-- <div class="row mt-4">

                  <div class="col ml-4">
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Status
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Address
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Contact No.
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Birthdate
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Civil Status
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Citizenship
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left mb-2">
                        Hired Date
                      </span>
                    </p>
                  </div>

                  <div class="col mr-4">
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['status'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['address'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['contactinfo'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['birthdate'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['civilstatus'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['citizenship'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left text-muted mb-2">
                        <?php echo $this->session->userdata('userdata')['hireddate'] ?>
                      </span>
                    </p>
                  </div>

                </div> -->

              <div class="py-4 mr-4 ml-4">
                    <p class="clearfix">
                      <span class="float-left">
                        Status
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['status'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Address
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['address'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Contact No.
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['contactinfo'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Birthdate
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['birthdate'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Civil Status
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['civilstatus'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Citizenship
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['citizenship'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Hired Date
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['hireddate'] ?>
                      </span>
                    </p>
                  </div>

                  </div>
                          </div>
                        <!-- </div>
                        
                      </div>
                    </div> -->
                  </div>


                  <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                <div class="card-header card-header-primary">
                  <h1 class="card-title" style="color: #fff;">Payroll Info</h1>
                </div>
                <div class="card-body ml-3 mr-3">
                  <!-- <div> -->
                    <!-- <div class="row"> -->
                      <div class="col form-group mt-2">
                        <label for="basicsalary">Basic Salary</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 8em; text-align: right;">
                         <?php echo $this->session->userdata('userdata')['dailyrate'] ?>
                        </div>
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 1.75em;">
                          ₱
                        </div>
                      </div>
                      <div class="col form-group">
                        <label for="dailyrate">Daily Rate</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 8em; text-align: right;">
                          <?php echo $this->session->userdata('userdata')['dailyrate'] ?>
                        </div>
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 1.75em;">
                          ₱
                        </div>
                      </div>
                      <div class="col form-group">
                        <label for="allowance">Allowance</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 8em; text-align: right;">
                         <?php echo $this->session->userdata('userdata')['allowance'] ?>
                        </div>
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 1.75em;">
                          ₱
                        </div>
                      </div>
                    <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div> -->
                    <!-- <div class="row"> -->
                      <div class="col form-group">
                        <label for="tinnumber">TIN</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 9.75em; text-align: left;">
                         <?php echo $this->session->userdata('userdata')['tinnumber'] ?>
                        </div>
                      </div>
                      <div class="col form-group">
                        <label for="sssnumber">SSS No.</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 9.75em; text-align: left;">
                         <?php echo $this->session->userdata('userdata')['sssnumber'] ?>
                        </div>
                      </div>
                    <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div>
 -->                    <!-- <div class="row"> -->
                      <div class="col form-group">
                        <label for="philhealthnumber">Philhealth No.</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 9.75em; text-align: left;">
                         <?php echo $this->session->userdata('userdata')['philhealthnumber'] ?>
                        </div>
                      </div>
                      <div class="col form-group">
                        <label for="pagibignumber">Pag-IBIG MID No.</label>
                        
                        <div class="badge badge-outline-warning float-right" style="font-size: 1.10em; width: 9.75em; text-align: left;">
                         <?php echo $this->session->userdata('userdata')['pagibignumber'] ?>
                        </div>
                      </div>
                    <!-- </div> -->
                  <!-- </div> -->
                </div>
              </div>
                  </div>
                </div>
              </div>



      <!-- <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="border-bottom text-center pb-4">
                    <?php if($this->session->userdata('userdata')['photo']==""){
                      echo '<img src="uploads/profileimg.png" alt="profile" class="img-lg rounded-circle mb-3"/>';
                    }else{
                      echo '<img src="uploads/'.$this->session->userdata('userdata')['photo'].'" alt="profile" class="img-lg rounded-circle mb-3"/>';
                    }
                     ?>
                    <div class="mb-3">
                      <h3><?php echo $this->session->userdata('userdata')['fullname'] ?></h3>
                    </div>
                    <p class="w-75 mx-auto mb-1"><?php echo $this->session->userdata('userdata')['positionDesc']; ?></p>
                    <p class="w-75 mx-auto mb-3"><?php echo $this->session->userdata('userdata')['departmentDesc']; ?></p>                       
                  </div>
                  <div class="py-4 mr-2">
                    <p class="clearfix">
                      <span class="float-left">
                        Status
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['status'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Address
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['address'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Contact No.
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['contactinfo'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Birthdate
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['birthdate'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Civil Status
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['civilstatus'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Citizenship
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['citizenship'] ?>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Hired Date
                      </span>
                      <span class="float-right text-muted">
                        <?php echo $this->session->userdata('userdata')['hireddate'] ?>
                      </span>
                    </p>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="mt-4 py-2 border-top border-bottom">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Payroll Info</h6>
                    </div>
                  </div>
                  
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        Basic Salary:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['basicsalary'] ?>
                    </p>
                  </div>
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        Daily Rate:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['dailyrate'] ?>
                    </p>
                  </div>
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        Allowance:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['allowance'] ?>
                    </p>
                  </div>
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        TIN No:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['tinnumber'] ?>
                    </p>
                  </div>
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        SSS No:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['sssnumber'] ?>
                    </p>
                  </div>
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        Philhealth No:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['philhealthnumber'] ?>
                    </p>
                  </div>
                  <div class="form-group row mt-4">
                    <span class="col-lg-3">
                        HDMF No:
                    </span>
                    <p class="col-lg-8">
                      <?php echo $this->session->userdata('userdata')['pagibignumber'] ?>
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>