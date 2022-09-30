<!doctype html>
<html lang="en">
<head>
	<title>INICIO</title>
	<?php 
	include 'view_style.php';
	?>	
	</head>
	<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
					</div>
				<!-- logo -->
				<!-- end logo -->
					<?php 
					include 'view_notify_clear.php';
					?>					
					</div>					
					</nav>
		<!-- END NAVBAR -->
 		<?php
		include 'view_menu.php';
		?>
		<?php
		include 'view_agregar_form.php';
		?>
		<!-- END MAIN CONTENT -->
		</div>
		<!-- END WRAPPER -->
		<?php
		include 'view_scripts_footer.php';
		?>
	</body>
	</html>