<div class="main-panel">
  <div class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> View Payslip</span></li>
      </ol>
    </nav>
    <!-- DataTable -->
    <div class="card">
      <div class="card-body test-card">
        
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> View Payslip</h6>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <span><?php if($this->session->flashdata('employee')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
                <thead>
                  <tr>
                      <th>Payslip Date</th>

                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
                  <?php

                        foreach ($files as $frow) {

                          echo '<tr>';
                          echo '<td>'.$frow->payslipdate.'</td>';
                          /* echo '<td><a href="Viewpayslip/preview" id="'.$frow->payslipID.'" >View</a></td>' ;*/
                          echo '<td><a class="btn btn-outline-warning btn-fw" href="Viewpayslip/preview?id='.$frow->payslipID.'" >View</a></td>' ;
                         /* echo '<td><object data="data:application/pdf;base64,'.base64_encode($frow['payslip'] ).'" type="application/pdf" style="height:200px;width:60%"></object></td>';*/
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
              