  <div class="main-panel">
  <div class="content-wrapper">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Manage Department</span></li>
        </ol>
      </nav>
    
        <div class="card">
      <div class="card-body test-card">
        
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Set Up Department</h6>
            </div>
            <div class="mt-3 mt-md-0">
              <button class="btn btn-warning btn-rounded btn-sm" id="add_button" data-toggle="modal" data-target="#setupdepartmentModal"><i class="mdi mdi-plus-circle-outline"></i> New Department</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <span><?php if($this->session->flashdata('error')=="used"){
                   echo '<script type="text/javascript"> showDeptWarningToast(); </script>';
                }else if($this->session->flashdata('error')=="exists"){
                  echo '<script type="text/javascript"> showDeptExistToast(); </script>';
                }
                ?>
                </span>
                <span><?php if($this->session->flashdata('department')=="dept") echo '<script type="text/javascript"> showDepartmentToast(); </script>';?></span>
                <thead>
                  <tr>
                      <th>Department</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
                  <?php
                        foreach ($records as $r) {

                          echo '<tr>';
                          echo '<td>'.$r->description.'</td>';
                          echo '<td><label class="badge badge-success">'.$r->departmentstatus.'</label></td>'; 
                          echo '<td><button type="button" name="Update" id="'.$r->departmentID.'" class="btn btn-outline-warning department-edit" data-target="#setupdepartmentModal">View</button></td>' ;
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

<div class="modal fade" id="setupdepartmentModal" tabindex="-1" role="dialog" aria-labelledby="setupdepartmentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" action="<?php echo site_url('Department/department_action'); ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="setupdepartmentModalLabel">New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="description">Department Name</label>
        <input type="text" class="form-control input" id="description" name="description" autocomplete="off" required>
        </div>
        <div class="form-check form-check-flat form-check-primary">
          <label class="form-check-label">
            <input type="hidden" name="departmentstatus" id="departmentstatus" value="Inactive">
            <input type="checkbox" name="departmentstatus" id="departmentstatus" value="Active" >
           Active
          </label>
        </div>
      </div>
       <div class="modal-footer">
              <input type="hidden" name="departmentID" id="departmentID" />  
              <input type="submit" name="action" id="action" class="btn btn-warning btn-rounded" value="Add" />   
          </div>
    </div>
     </form>
  </div>
</div>
<script>
  $(function () {
    $('.select2').select2();
  });

</script>
