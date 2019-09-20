<div class="main-panel">
  <div class="content-wrapper">
    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Employee Records</span></li>
                      </ol>
                    </nav>
    <!-- DataTable -->
    <div class="card">
      <div class="card-body test-card">
        
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Employee Records</h6>
            </div>
            <div class="mt-3 mt-md-0">
              <button class="btn btn-sm text-muted border-0 dropdown-toggle px-0" type="button" id="dropdownMenuSizeButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px;" >Filter by </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                <h6 class="dropdown-header">Filter by</h6>
                <a class="dropdown-item" href="<?php echo base_url(); ?>Employee">All</a>
                <a class="dropdown-item" href="#">Active</a>
                <a class="dropdown-item" >Terminated</a>
                <a class="dropdown-item" >End of Contract</a>
                <a class="dropdown-item" >Resigned</a>
              </div>
              <button class="btn btn-warning btn-rounded btn-sm" id="add_button" data-toggle="modal" data-target="#addModal"><i class="mdi mdi-account-plus "></i> New Employee</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <span><?php if($this->session->flashdata('employee')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
                <thead>
                  <tr>
                      <th>User</th>
                      <th>Contact No.</th>
                      <th>Hired Date</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
                  <?php
                        foreach ($results['employee'] as $r) {

                          echo '<tr>';
                          echo '<td class="py-1 user-circle">
                            <img src="assets/images/faces/profileimg.png" alt="image"/>'.' '.$r->firstname.' '.$r->lastname.'</td>';
                          echo '<td>'.$r->contactinfo.'</td>'; 
                          echo '<td>'.$r->hireddate.'</td>';  
                          echo '<td><label class="badge badge-success">'.$r->status.'</label></td>'; 
                          echo '<td><button type="button" name="update" id="'.$r->employeeID.'" class="btn btn-outline-warning employee-edit" data-target="#addModal">View</button></td>' ;
                        }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

          <div class="modal fade" id="addModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
            
              <!-- Modal content-->
              <form id="commentForm" method="post" action="<?php echo site_url('Employee/employee_action'); ?>">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #f6f7fb;">
                  <h3 class="modal-title" id="ModalLabel">New Employee</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                  </button>
                </div>
                <fieldset>
                <div class="modal-body">
                  <div class="row grid-margin">
                  <div class="col-lg-12">

                    <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Employee Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Login Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-detail-tab" data-toggle="pill" href="#pills-detail" role="tab" aria-controls="pills-detail" aria-selected="false">Payroll Details</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="pills-tabContent">

                    <!-- EMPLOYEE INFO -->
                    <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab"> 

                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="firstname">First Name</label>
                          <input id="firstname" type="text" name="firstname" class="form-control input" autocomplete="off"  required>
                        </div>
                        <div class="col">
                          <label for="middlename">Middle Name</label>
                          <input id="middlename" type="text" name="middlename" class="form-control input" autocomplete="off">
                        </div>
                        <div class="col">
                          <label for="lastname">Last Name</label>
                          <input id="lastname" type="text" name="lastname" class="form-control input" autocomplete="off" required>
                        </div>
                        <div class="col">
                          <label for="gender">Gender</label>
                          <select class="form-control" name="gender" required>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="housenumber">Unit/House No.</label>
                          <input id="housenumber" type="text" name="housenumber" class="form-control input" autocomplete="off">
                        </div>
                        <div class="col">
                          <label for="streetname">Building/Street Name</label>
                          <input id="streetname" type="text" name="streetname" class="form-control input" autocomplete="off" required>
                        </div>
                        <div class="col">
                          <label for="barangay">Barangay</label>
                          <input id="barangay" type="text" name="barangay" class="form-control input" autocomplete="off" required>
                        </div>
                        <div class="col">
                          <label for="city">City/Municipality</label>
                          <input id="city" type="text" name="city" class="form-control input" autocomplete="off" required>
                        </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="birthdate">Birthdate</label>
                          <input id="birthdate" type="date" name="birthdate" class="form-control"  required>
                        </div>
                        <div class="col">
                          <label for="contactinfo">Contact No.</label>
                          <input id="contactinfo" type="text" name="contactinfo" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="col">
                          <label for="civilstatus">Civil Status</label>
                          <select class="form-control" name="civilstatus">
                            <option>Single</option>
                            <option>Married</option>
                          </select>
                        </div>
                          <div class="col">
                          <label for="citizenship">Citizenship</label>
                          <input id="citizenship" type="text" name="citizenship" class="form-control input" autocomplete="off" required>
                        </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="hireddate">Hired Date</label>
                          <input id="hireddate" type="date" name="hireddate" class="form-control"  required>
                        </div>
                        <div class="col">
                          <label for="gender">Department</label>
                          <select class="form-control select2" name="department" style="width: 100%;">
                            <?php
                            foreach($results['department'] as $department)
                            {
                            echo '<option value="'.$department->departmentID.'">'.$department->description.'</option>';
                            }
                            ?>  
                          </select>
                        </div>
                        <div class="col">
                          <label for="gender">Position</label>
                          <select class="form-control select2" name="position" style="width: 100%;">
                            <?php
                            foreach($results['position'] as $position)
                            {
                            echo '<option value="'.$position->posdescription.'">'.$position->posdescription.'</option>';
                            }
                            ?>
                          </select>
                        </div>
                        <div class="col">
                          <label for="status">Status</label>
                          <select class="form-control" name="status">
                            <option>Active</option>
                            <option>Terminated</option>
                            <option>End of Contract</option>
                            <option>Resigned</option>
                          </select>
                        </div>
                        </div>
                      </div>
                    </div>
                    <!-- EMPLOYEE INFO -->
                     <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab"> 

                  <form class="forms-group">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control input" id="username" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" class="form-control input" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                    <!-- <div class="form-group">
                      <label for="role">Role</label>
                      <input type="text" class="form-control" id="role_id" name="role_id" placeholder="role">
                    </div> -->
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="hidden" name="role_id" value="2">
                        <input type="checkbox" name="role_id" value="1">
                       Admin
                      </label>
                    </div>
                  </form>
                </div>


                    <!-- PAYROLL DETAILS -->
                    <div class="tab-pane fade" id="pills-detail" role="tabpanel" aria-labelledby="pills-detail-tab">
                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="basicsalary">Basic Salary</label>
                          <input id="basicsalary" type="number" name="basicsalary" class="form-control input" autocomplete="off"  required>
                        </div>
                        <div class="col">
                          <label for="dailyrate">Daily Rate</label>
                          <input id="dailyrate" type="number" name="dailyrate" class="form-control input" autocomplete="off" required>
                        </div>
                        <div class="col">
                          <label for="allowance">Allowance</label>
                          <input id="allowance" type="number" name="allowance" class="form-control input" autocomplete="off" required>
                        </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="tinnumber">Tin No.</label>
                          <input id="tinnumber" type="text" name="tinnumber" class="form-control input" autocomplete="off"  required>
                        </div>
                        <div class="col">
                          <label for="sssnumber">SSS No.</label>
                          <input id="sssnumber" type="text" name="sssnumber" class="form-control input" autocomplete="off">
                        </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                        <div class="col">
                          <label for="philhealthnumber">Philhealth No.</label>
                          <input id="philhealthnumber" type="text" name="philhealthnumber" class="form-control input" autocomplete="off"  required>
                        </div>
                        <div class="col">
                          <label for="pagibignumber">Pag-IBIG MID No.</label>
                          <input id="pagibignumber" type="text" name="pagibignumber" class="form-control input" autocomplete="off">
                        </div>
                        </div>
                      </div>
                      
                    </div>
                    <!-- PAYROLL DETAILS -->              

                  </div>

            
                    <div class="modal-footer">
                      <input type="hidden" name="employeeID" id="employeeID" />  
                      <input type="submit" name="action" id="action" class="btn btn-warning btn-rounded" value="Add" />   
                  </div>
                  </fieldset>
                </div>
                  </form>
                </div>
              </div>
            </fieldset>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
 <script>
  $(function () {
    $('.select2').select2();
  });
</script>
              