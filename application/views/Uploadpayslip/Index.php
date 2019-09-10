
<div class="main-panel">
  <div class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Upload Payslip</span></li>
      </ol>
    </nav>
    <!-- <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload Payslip</h4>
                  <form class="form-sample" id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('Uploadpayslip/addpayslip'); ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Fullname</label>
                          <select class="form-control select2 col-sm-9" name="employeeID" id="employeeID">
                          <?php
                          foreach($results['fullname'] as $user)
                          {
                            echo '<option value="'.$user->employeeID.'">'.$user->firstname. ' '.$user->lastname.'</option>';
                          }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
        <input type="submit" name="action" id="action" class="btn btn-primary" value="Upload" /> 
        </div>
                        </form>
                        </div>
                      </div>
                    </div>  -->           
        
    <!-- DataTable -->
    <div class="row grid-margin">
                  <div class="col-lg-12">
              <div class="card">
                <div class="card-body test-card">

                  <h4 class="card-title mb-3">Upload Payslip</h4>
                  <form id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('Uploadpayslip/addpayslip'); ?>">
                  <div class="form-group">
                        <div class="row">
                          <div class="col">
                          <label for="gender">Department</label>
                          <select class="form-control select2" name="department" style="width: 100%;">
                            <?php
                            foreach($results['department'] as $department)
                            {
                            echo '<option value="'.$department->description.'">'.$department->description.'</option>';
                            }
                            ?>  
                          </select>
                        </div>
                        <div class="col">
                          <label>Employee Name</label>
                          <select class="form-control select2" name="employeeID" id="employeeID" style="width: 100%;">
                          <?php
                          foreach($results['fullname'] as $user)
                          {
                            echo '<option value="'.$user->employeeID.'">'.$user->firstname. ' '.$user->lastname.'</option>';
                          }
                          ?>
                          </select>
                        </div>
                        
                        <div class="col">
                          <label for="payslip">Payslip</label>
                          <input type="file" class="form-control" name="userImage" id="payslip" value="Choose File" />
                        </div>
                        </div>
                  </div>
                  <div class="modal-footer">
        <input type="submit" name="action" id="action" class="btn btn-warning" value="Upload" /> 
        </div>
      </form>
                </div>
              </div>
            </div>
          </div>
    <div class="card">
      <div class="card-body test-card">
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Upload Payslip</h6>
            </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table"><!-- 
                                         <button class="btn btn-outline-success" onclick="showSwal('warning-message-and-cancel')">Click here!</button> -->
                <span><?php if($this->session->flashdata('employee')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
                <thead>
                  <tr>
                      <!-- <th>Employee Name</th> -->
                      <!-- <th>Employee Name</th> -->
                      <th>Position</th>
                      <th>Department</th>
                      <th>Payslip Date</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">

                  <?php
                        foreach ($results['payslip'] as $frow) {

                          echo '<tr>';
                          /*echo '<td>'.$frow->employeename.'</td>';*/
                          echo '<td>'.$frow->datecreated.'</td>';
                          echo '<td>'.$frow->department.'</td>';
                          echo '<td>'.$frow->datecreated.'</td>';
                          echo '<td><a class="btn btn-outline-warning btn-fw" style="margin-right: 10px;" href="Viewpayslip/preview?id='.$frow->payslipID.'" >View</a>
                          <a class="btn btn-outline-danger btn-fw" style="margin-right: 50px;" href="Uploadpayslip/deletedata?id='.$frow->payslipID.'" >Delete</a></td>';

                        }
                      ?>
                </tbody>
              </table>
            </div>
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
<!-- <button class="btn btn-outline-primary" onclick="showSwal("warning-message-and-cancel")">Click here!</button> -->

<!-- <a class="btn btn-outline-danger btn-fw" onclick="showSwal('warning-message-and-cancel')" style="margin-right: 50px;" href="Uploadpayslip/deletedata?id='.$frow->payslipID.'" >Delete</a>
                          <button class="btn btn-outline-success" onclick="showSwal('warning-message-and-cancel')">Click here!</button> -->
