<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">

		<?php if($this->session->userdata('userdata')['role_id']=="2"){ 
		?>

		<!---Dashboard Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Dashboard', '<i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>', 'class="nav-link"'); ?>
        </li>
        
        <!---View Payslip Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Viewpayslip', '<i class="mdi mdi-clipboard-text-outline menu-icon"></i>
              <span class="menu-title">View Payslip</span>', 'class="nav-link"'); ?>
        </li>
        <?php }else{ ?>

        <!---Dashboard Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Dashboard', '<i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>', 'class="nav-link"'); ?>
        </li>

        <!---Employee Records Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Employee', '<i class="mdi mdi-account-box-outline menu-icon"></i>
              <span class="menu-title">Employee Records</span>', 'class="nav-link"'); ?>
        </li>

        <!---Upload Payslip Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Uploadpayslip', '<i class="mdi mdi-cloud-upload menu-icon"></i>
              <span class="menu-title">Upload Payslip</span>', 'class="nav-link"'); ?>
        </li>

        <!---View Payslip Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Viewpayslip', '<i class="mdi mdi-clipboard-text-outline menu-icon"></i>
              <span class="menu-title">View Payslip</span>', 'class="nav-link"'); ?>
        </li>

		<!---File Maintenance Sidebar---->
		<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#filemaintenance" aria-expanded="false" aria-controls="filemaintenance">
			<i class="mdi mdi mdi-folder-open menu-icon"></i>
			<span class="menu-title">File Maintenance</span>
			<i class="menu-arrow"></i>
		</a>
		</li>

		<div class="collapse" id="filemaintenance">
			<ul class="nav flex-column sub-menu">			
			<li class="nav-item"><?php echo anchor('Department', ' Department ', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('Position', ' Position ', 'class="nav-link"'); ?></li>
			</ul>
		</div>
		<?php } ?>
	</ul>
</nav>

