<!doctype html>
<html lang="en">
<head>
	<title>ELIMINAR</title>
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
		include 'view_eliminar_form.php';
		?>
			
				   </div>
		<!-- END MAIN CONTENT -->
		<!-- END WRAPPER -->
		<!-- Javascript -->
	<script src="plantilla/assets14/theme/assets/vendor/jquery/jquery.min.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/metisMenu/metisMenu.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
	<script src="plantilla/assets14/theme/assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js"></script>
	<script src="plantilla/assets14/theme/assets/scripts/common.js"></script>
	<script>
	$(function() {
		// photo upload
		$('#btn-upload-photo').on('click', function() {
			$(this).siblings('#filePhoto').trigger('click');
		});

		// plans
		$('.btn-choose-plan').on('click', function() {
			$('.plan').removeClass('selected-plan');
			$('.plan-title span').find('i').remove();

			$(this).parent().addClass('selected-plan');
			$(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
		});
	});
	</script>
	<div class="clearfix"></div>
		<footer>
			<p class="copyright"><a href="https://www.themeineed.com" target="_blank">Todos los derechos reservados &copy; 2022.</a>
			Página desarrollada por: Aarón Contreras.</p>
		</footer>
	</body>
	</html>