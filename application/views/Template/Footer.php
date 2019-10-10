  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/data-table.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/modal-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bt-maxLength.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/select2/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/alerts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/avgrund.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/sweetalert/sweetalert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/jquery.avgrund/jquery.avgrund.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/inputmask/jquery.inputmask.bundle.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/inputmask.js"></script>
</body>
  <script  type="text/javascript">  
    $(document).ready(function(){
      var ctr=0;
    
      $('.input').keydown(function(e){
          if(e.target.selectionStart === 0){
            if(e.which == 32){
              return false;
            }
          }

          if(e.which == 32){
            ctr+=1
          }
          else{
            ctr=0;
          }

          if(ctr>1){
            e.preventDefault();
          }
      });

      $('.btnUpload').unbind('click').bind('click', function(event){
        
        document.getElementById("error").innerHTML = "";
        if($('.file-upload-default')[0].files.length==0){
          document.getElementById("error").innerHTML = "*This field is required.";
          event.preventDefault();
          return;
        }

        $('#loader').modal({backdrop: 'static', keyboard: false});
        /*event.preventDefault();*/
        /*fileName = $('input[type=file]').val();
        dots = fileName.split(".");

        //get the part AFTER the LAST period.
        fileType = "." + dots[dots.length-1];
        if(fileType!=".pdf"){
          showUploadError();
          event.preventDefault();
        }*/
      });

      $('#contactinfo').mask('0000-000-0000');

      $('#tinnumber').mask('000-000-000');

      $('#sssnumber').mask('00-0000000-0');

      $('#philhealthnumber').mask('00-000000000-0');

      $('#pagibignumber').mask('0000-0000-0000');

      $('#addModal').on("hidden.bs.modal", function() {
        $(this).find('form').trigger('reset');
        $('.modal-title').text("New Employee");
        $('.form-group').removeClass('has-danger');
        $("label.error").hide();
        $(".error").removeClass("error");
        $('#employeeID').val("");  
        $('#action').val("Add");  
      });

      $('#setupdepartmentModal').on("hidden.bs.modal", function() {
        $(this).find('form').trigger('reset');
        $('.modal-title').text("New Department");
        $('.form-group').removeClass('has-danger');
        $("label.error").hide();
        $(".error").removeClass("error"); 
        $('#departmentID').val("");  
        $('#action').val("Add");  
      });

      $('#setuppositionModal').on("hidden.bs.modal", function() {
        $(this).find('form').trigger('reset');
        $('.modal-title').text("New Position");
        $('.form-group').removeClass('has-danger');
        $("label.error").hide();
        $(".error").removeClass("error");  
        $('#positionID').val("");  
        $('#action').val("Add");  
      }); 

      $(".profilepic").on('click',function() {
        $('#empID').val($(this).attr("id"));
        $('#uploadpicture').modal('show');
      });

      $(".reveal").on('click',function() {
          var $pwd = $(".pwd");
          if ($pwd.attr('type') === 'password') {
              $pwd.attr('type', 'text');
          } else {
              $pwd.attr('type', 'password');
          }
      });

        $('.table').on('click','.department-edit',function () {                  
           var departmentID = $(this).attr("id");  
         $.ajax({  
              url:"<?php echo base_url(); ?>Department/fetch_single_dept",  
              method:"POST",  
              data:{departmentID:departmentID},  
              dataType:"json",  
              success:function(data)  
              {  
                   $('#setupdepartmentModal').modal('show');
                   $('#description').val(data.description); 
                   $("input[value='" + data.departmentstatus + "']").prop('checked', true); 
                   $('.modal-title').text("Update Department");  
                   $('#departmentID').val(departmentID);  
                   $('#action').val("Update");  
              }  
         })  
      });

      $('.table').on('click','.position-edit',function () {        
                  
           var positionID = $(this).attr("id");  
         $.ajax({  
              url:"<?php echo base_url(); ?>Position/fetch_single_position",  
              method:"POST",  
              data:{positionID:positionID},  
              dataType:"json",  
              success:function(data)  
              {  
                   $('#setuppositionModal').modal('show');
                   $('#departmentID').val(data.departmentID);
                   $('#description').val(data.departmentID);
                   $('#description').change();
                   $('#positiondescription').val(data.positiondescription);  
                   $('.modal-title').text("Update Position");  
                   $('#positionID').val(positionID);  
                   $('#action').val("Update");  
              }  
         })  
      });


      $('.table').on('click','.employee-edit',function () { 
                  
           var employeeID = $(this).attr("id");  
         $.ajax({  
              url:"<?php echo base_url(); ?>Employee/fetch_single_user",  
              method:"POST",  
              data:{employeeID:employeeID},  
              dataType:"json",  
              success:function(data)  
              {  
                   $('#addModal').modal('show');
                   $('#status').val(data.status);  
                   $('#firstname').val(data.firstname);
                   $('#middlename').val(data.middlename); 
                   $('#lastname').val(data.lastname);
                   $('#gender').find(data.gender).text();
                   $('#gender').val(data.gender); 
                   $('#housenumber').val(data.housenumber);
                   $('#streetname').val(data.streetname);
                   $('#barangay').val(data.barangay);
                   $('#city').val(data.city);  
                   $('#birthdate').val(data.birthdate);  
                   $('#contactinfo').val(data.contactinfo);   
                   $('#civilstatus').val(data.civilstatus);
                   $('#citizenship').val(data.citizenship);
                   $('#hireddate').val(data.hireddate);
                   $('#description').val(data.departmentID);
                   $('#description').change();
                   $('#hiddenPosition').val(data.positionID);
                   $('#basicsalary').val(data.basicsalary);
                   $('#dailyrate').val(data.dailyrate);
                   $('#allowance').val(data.allowance);
                   $('#tinnumber').val(data.tinnumber);
                   $('#sssnumber').val(data.sssnumber);
                   $('#philhealthnumber').val(data.philhealthnumber);
                   $('#username').val(data.username);
                   $('#password').val(data.password);
                   $("input[value='" + data.role_id + "']").prop('checked', true); 
                   $('#role_id').val(data.role_id);
                   $('#photo').val(data.photo);
                   $('#pagibignumber').val(data.pagibignumber); 
                   $('.modal-title').text("Update Employee");  
                   $('#employeeID').val(employeeID);  
                   $('#action').val("Update");  
              }  
         })  
      });

    });  
  </script> 
</html>

