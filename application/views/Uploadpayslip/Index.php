
<div class="main-panel">
  <div class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Upload Payslip</span></li>
      </ol>
    </nav>
    
    <?php if($this->session->flashdata('error')!=""){ ?>
      <div class="alert alert-warning" role="alert" style="font-size: 0.75rem" alert-dismissible >
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color:#b87741; font-size: 1.2rem; line-height: 1.2;">×</button>
        <?php echo $this->session->flashdata('error'); ?>
      </div>
    <?php } ?>
    <div class="row grid-margin">
                  <div class="col-lg-12">
              <div class="card">
                <div class="card-body test-card">

                  <h4 class="card-title mb-3">Upload Payslip</h4>
                  <form id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('Uploadpayslip/addpayslip'); ?>">
                  <div class="form-group">
                        <div class="row">
                          
                          <!-- <div class="col form-group">
                              <label for="departmentID">Department</label>
                              <select class="form-control select2" id="description" name="departmentID" style="width: 100%;" required>
                                <option value=""></option>
                                  <?php
                                  foreach($results['department'] as $department)
                                  {
                                  echo '<option value="'.$department->departmentID.'">'.$department->description.'</option>';
                                  }
                                  ?>  
                              </select>
                        </div> -->

                        <!-- <div class="col form-group">
                          <label for="employeeID">Employee Name</label>
                            <select class="form-control select2" id="employee" name="employeeID" style="width: 100%;" required>
                              <option value=""></option>
                            </select>
                        </div> -->
                        <div class="col form-group">
                          <label for="payslipdate">Payslip Date</label>
                          <input id="payslipdate" type="date" name="payslipdate" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col form-group">
                          <label for="payslip">Payslip</label>
                          <input type="file" name="userImage[]" id="payslip" class="file-upload-default" accept="application/pdf" multiple="">
                          <div class="input-group col-xs-6">
                            <input type="text" class="form-control file-upload-info" disabled>
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-warning" type="button">Choose File</button>
                            </span>
                            <input type="submit" name="action" id="action" class="btn btnUpload btn-success btn-icon-text ml-2" value="Upload" /> 
                            <!-- <input type="submit" name="action" id="action" class="btn btn-success btn-icon-text ml-2" value="Upload"/>  -->
                          </div>
                          <label id="error" class="error mt-2 text-danger"></label>
                        </div>

                      </div>
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
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-file-document-box"></i> List of Payslip</h6>
            </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table"><!-- 
                                         <button class="btn btn-outline-success" onclick="showSwal('warning-message-and-cancel')">Click here!</button> -->
                <span><?php if($this->session->flashdata('employee')=="success") echo '<script type="text/javascript"> showSuccessToast(); </script>';?></span>
                <thead>
                  <tr>
                      <th style="width: 40px ! important;">Employee No.</th>
                      <th>Employee Name</th>
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
                          echo '<td>'.str_pad($frow->employeeID, 6, "0", STR_PAD_LEFT);'</td>';
                          echo '<td>'.$frow->firstname.' '.$frow->lastname.'</td>';
                          echo '<td>'.$frow->positiondescription.'</td>';
                          echo '<td>'.$frow->description.'</td>';
                          echo '<td>'.date("F d, Y",strtotime($frow->payslipdate)).'</td>';
                          echo '<td><a href="Viewpayslip/preview?auth='.$frow->encryptID.'&id='.$frow->payslipID.'" target="_blank" ><button type="button" class="btn btn-outline-warning btn-fw" style="margin-right: 10px;"><i class="mdi mdi-eye btn-icon-prepend"></i>Preview</button></a>
                          <a class="btn btn-outline-danger btn-fw" style="margin-right: 50px;" href="Uploadpayslip/deletedata?id='.$frow->payslipID.'" ><i class="mdi mdi-close btn-icon-prepend"></i>Delete</a></td>';

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

<div class="modal fade" id="loader" tabindex="-1" role="dialog" aria-labelledby="loaderModalLabel" aria-hidden="true" style="background-color: rgba(0,0,0,.85);">
  <div class="modal-dialog" role="document" style="margin-top: 0 !important;">
      <!-- <img src="<?php echo base_url(); ?>assets/images/loader2.gif" /> -->
      <div class="loader" style="margin-bottom: 60px;"></div>
      <div style="color:white; font-size: 1rem;">Uploading payslip</div>
  </div>
</div>
 <script>
  $(function () {
    $('.select2').select2();

    $('#description').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Uploadpayslip/get_employeename');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].employeeID+'>'+data[i].firstname+'</option>';
                        }
                        $('#employee').html(html);
 
                    }
                });
                return false;
            }); 
  });
</script>

<style>
    .modal {
      text-align: center;
      padding: 0!important;
    }

    .modal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }

    .loader {
  margin: 100px auto;
  font-size: 13px;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load5 1.1s infinite ease;
  animation: load5 1.1s infinite ease;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.5), -1.8em -1.8em 0 0em rgba(255,255,255, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.5), 1.8em -1.8em 0 0em rgba(255,255,255, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.5), 2.5em 0em 0 0em rgba(255,255,255, 0.7), 1.75em 1.75em 0 0em #ffffff, 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.5), 1.75em 1.75em 0 0em rgba(255,255,255, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.5), 0em 2.5em 0 0em rgba(255,255,255, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.5), -1.8em 1.8em 0 0em rgba(255,255,255, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.5), -2.6em 0em 0 0em rgba(255,255,255, 0.7), -1.8em -1.8em 0 0em #ffffff;
  }
}
@keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.5), -1.8em -1.8em 0 0em rgba(255,255,255, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.5), 1.8em -1.8em 0 0em rgba(255,255,255, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.5), 2.5em 0em 0 0em rgba(255,255,255, 0.7), 1.75em 1.75em 0 0em #ffffff, 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.5), 1.75em 1.75em 0 0em rgba(255,255,255, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(255,255,255, 0.2), -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.5), 0em 2.5em 0 0em rgba(255,255,255, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(255,255,255, 0.2), -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.5), -1.8em 1.8em 0 0em rgba(255,255,255, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(255,255,255, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255,255,255, 0.2), 1.8em -1.8em 0 0em rgba(255,255,255, 0.2), 2.5em 0em 0 0em rgba(255,255,255, 0.2), 1.75em 1.75em 0 0em rgba(255,255,255, 0.2), 0em 2.5em 0 0em rgba(255,255,255, 0.2), -1.8em 1.8em 0 0em rgba(255,255,255, 0.5), -2.6em 0em 0 0em rgba(255,255,255, 0.7), -1.8em -1.8em 0 0em #ffffff;
  }
}

</style>

<!-- <button class="btn btn-outline-success" onclick="showSwal(\'warning-message-and-cancel\')">Click here!</button> -->

<!-- <button class="btn btn-outline-primary" onclick="showSwal("warning-message-and-cancel")">Click here!</button> -->

<!-- <a class="btn btn-outline-danger btn-fw" onclick="showSwal('warning-message-and-cancel')" style="margin-right: 50px;" href="Uploadpayslip/deletedata?id='.$frow->payslipID.'" >Delete</a>
                          <button class="btn btn-outline-success" onclick="showSwal('warning-message-and-cancel')">Click here!</button> -->
