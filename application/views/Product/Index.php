<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Select Option using Codeigniter and Ajax</title>
    <link href="<?=base_url(); ?>assets/css/vertical-layout-light/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
 
      <div class="row justify-content-md-center">
        <div class="col col-lg-6">
            <h3>Product Form:</h3>
            <form>
                   <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" name="departmentID" id="department" required>
                        <option value="">No Selected</option>
                        <?php foreach($results['department'] as $row):?>
                        <option value="<?php echo $row->departmentID;?>"><?php echo $row->description;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sub Category</label>
                    <select class="form-control" id="employee" name="employeeID" required>
                        <option>No Selected</option>
 
                    </select>
                  </div>
            </form>
        </div>
      </div>
 
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#department').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('product/get_employeename');?>",
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
</body>
</html>