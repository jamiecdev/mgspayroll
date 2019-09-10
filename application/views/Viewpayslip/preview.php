
              <?php
              	foreach ($files as $frow) {
	         		header("Content-type: application/pdf");
	         		header('Content-Disposition: inline; filename="payslip.pdf"');
	         		header('Content-Transfer-Encoding: binary');
	       		 	echo $frow->payslip;
	              }
              ?>

              