      <div class="main-panel">
        <div class="content-wrapper">
          <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Profile</span></li>
                      </ol>
                    </nav>
          <div class="row">
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
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>