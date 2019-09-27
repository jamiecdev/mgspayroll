
<div class="main-panel">
  <div class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Upload Payslip</span></li>
      </ol>
    </nav>
    
    <div class="row grid-margin">
                  <div class="col-lg-12">
              <div class="card">
                <div class="card-body test-card">

                  <h4 class="card-title mb-3">Upload Payslip</h4>
                  <form id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('Uploadpayslip/addpayslip'); ?>">
                  <div class="form-group">
                        <div class="row">
                          
                          <div class="col form-group">
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
                         <!-- <select class="form-control select2" name="departmentID" id="description" required>
                            <option value="">No Selected</option>
                            <?php foreach($results['department'] as $row):?>
                            <option value="<?php echo $row->departmentID;?>"><?php echo $row->description;?></option>
                            <?php endforeach;?>
                         </select> -->
                        </div>

                        <div class="col form-group">
                          <label>Employee Name</label>
                            <select class="form-control select2" id="employee" name="employeeID" required>
                              <option value=""></option>
                            </select>
                        </div>

                        <div class="col form-group">
                          <label>Payslip</label>
                          <input type="file" name="userImage" id="payslip" class="file-upload-default" accept="application/pdf" required>
                          <div class="input-group col-xs-6">
                            <input type="text" class="form-control file-upload-info" disabled>
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-warning" type="button">Choose File</button>
                            </span>
                            <input type="submit" name="action" id="action" class="btn btnUpload btn-success btn-icon-text ml-2" value="Upload" /> 
                            <!-- <input type="submit" name="action" id="action" class="btn btn-success btn-icon-text ml-2" value="Upload"/>  -->
                          </div>
                        </div>

                       <!--  <div class="col form-group">
                          <label>w</label>
                          
                        </div> -->

                        
                        </div>

                  </div>
                  <!-- <div class="modal-footer">
        <input type="submit" name="action" id="action" class="btn btnUpload btn-warning btn-rounded" value="Upload" /> 
        </div> -->
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
                          echo '<td>'.$frow->firstname.' '.$frow->lastname.'</td>';
                          echo '<td>'.$frow->positiondescription.'</td>';
                          echo '<td>'.$frow->description.'</td>';
                          echo '<td>'.$frow->payslipuploaded.'</td>';
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

<!-- <button class="btn btn-outline-success" onclick="showSwal(\'warning-message-and-cancel\')">Click here!</button> -->

<!-- <button class="btn btn-outline-primary" onclick="showSwal("warning-message-and-cancel")">Click here!</button> -->

<!-- <a class="btn btn-outline-danger btn-fw" onclick="showSwal('warning-message-and-cancel')" style="margin-right: 50px;" href="Uploadpayslip/deletedata?id='.$frow->payslipID.'" >Delete</a>
                          <button class="btn btn-outline-success" onclick="showSwal('warning-message-and-cancel')">Click here!</button> -->
