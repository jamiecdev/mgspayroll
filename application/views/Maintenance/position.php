<div class="main-panel">
  <div class="content-wrapper">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Manage Position</span></li>
        </ol>
      </nav>
    
        <div class="card">
      <div class="card-body test-card">
        
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Set Up Position</h6>
            </div>
            <div class="mt-3 mt-md-0">
              <button class="btn btn-warning btn-rounded btn-sm" id="add_button" data-toggle="modal" data-target="#setuppositionModal"><i class="mdi mdi-plus-circle-outline"></i> New Position</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <span><?php if($this->session->flashdata('position')=="pos") echo '<script type="text/javascript"> showPositionToast() </script>';?></span>
                <thead>
                  <tr>
                      <th>Department</th>
                      <th>Position</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
                  <?php
                        foreach ($results['position'] as $r) {

                          echo '<tr>';
                          echo '<td>'.$r->description.'</td>'; 
                          echo '<td>'.$r->posdescription.'</td>';
                          echo '<td><button type="button" name="Update" id="'.$r->positionID.'" class="btn btn-outline-warning position-edit" data-target="#setuppositionModal">View</button></td>' ;
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

<div class="modal fade" id="setuppositionModal" tabindex="-1" role="dialog" aria-labelledby="setuppositionModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" action="<?php echo site_url('Position/position_action'); ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="setuppositionModalLabel">New Position</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
            <label>Department</label>
            <select class="form-control select2" name="departmentID" style="width: 100%;">
                            <?php
                            foreach($results['department'] as $department)
                            {
                            echo '<option value="'.$department->departmentID.'">'.$department->description.'</option>';
                            }
                            ?>  
                          </select>
            </div> 
        <div>
        <label for="posdescription">Position Name</label>
        <input type="text" class="form-control input" id="posdescription" name="posdescription" autocomplete="off" required>
        </div>
      </div>
       <div class="modal-footer">
              <input type="hidden" name="positionID" id="positionID" />  
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
