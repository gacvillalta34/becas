<!doctype html>
<html lang="en">
<head>
	<title>DESARROLLADOR</title>
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
			<div align="center">
			<form>
					<div class="tab-content content-profile">
						<!-- MY PROFILE -->
						<div class="tab-pane fade in active" id="myprofile">
							<div class="profile-section">
								<h2 class="profile-heading">DESARROLADO POR:</h2>
								<h1>AARÓN CONTRERAS</h1>
								<img src="plantilla/images/aaron_contreras.jpg"
								alt="User Profile Picture" height="380" width="380">
					
							</div>
							</div>
						<!-- ACCOUNT -->
						<div class="tab-pane fade" id="account">
							<div class="profile-section">
								<div class="clearfix">
									<!-- LEFT SECTION -->
									<div class="left">
										<h2 class="profile-heading">Account Data</h2>
										</div>
									</div>
									<!-- END RIGHT SECTION -->
								</div>
							</div>
						</div>
						<!-- END ACCOUNT -->
					</div>
				</form>
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