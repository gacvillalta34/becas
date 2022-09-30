<!doctype html>
<html lang="en">
<head>
	<title>EDITAR</title>
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
			<div id="main-content">
			<div class="container-fluid">
			<div class="section-heading">
					</div>
				<form action="procesos" method="post">
					<div class="tab-content content-profile">
					<!-- AGREGAR -->
					<div class="profile-section">
							<h2 class="profile-heading"><div align="center">DATOS A EDITAR</h2></div>
							<div class="clearfix">
							<!-- LEFT SECTION -->
									<div class="left">
									<div class="form-group">
												<label class="fancy-checkbox">
													<input name="nom_apel_est_doc_cel" value="generales" type="checkbox"/>
													<span><i></i>TODOS LOS DATOS</span>
												</label>
												<br>
											</div>
										</div>
									<!-- END LEFT SECTION -->
									<!-- RIGHT SECTION -->
									<!-- EDITAR OTROS
									<div class="right">
									<div class="form-group">
									<form action="procesos" method="post">
										<label class="fancy-checkbox">
													<input name="uni_car_año_pro_no" value="academicos" type="checkbox"/>
													<span><i></i>DATOS ACADEMICOS</span>
												</label>
											</div>
										</div>
										<!-- END RIGHT SECTION -->
									</div>
			               <div align="center"><p class="margin-top-30">
									<input type="submit" class="btn btn-primary" value="EDITAR"/>
									<button type="button" class="btn btn-default"><a href="inicio">ATRAS</span></a></button>
								</p></div>
								</div>				
						<!-- FINAL DE AGREGAR -->
							</div>
							</div>
						</div>		
					</form>
				   </div>
		<!-- END MAIN CONTENT -->
		<!-- END WRAPPER -->
		<?php
		include 'view_scripts_footer.php';
		?>
	</body>
	</html>