<!doctype html>
<html lang="en">
<head>
	<title>RESULTADOS</title>
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
					<!-- INICIO DE LA FUNCION BUSCAR POR ID O CARNET-->
					<?php
					$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
					mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
					mysql_query ("SET NAMES 'utf8'");
					if(isset($_POST['search']))
					{
					$buscar = $_POST['search'];
					$registros1 = @mysql_query("SELECT * FROM estudiantes WHERE dui_carnet_minoridad = '$buscar'");
					if($fila = @mysql_fetch_array($registros1)){
					echo '<script> alert("Registro encontrado.");</script>';							
					?>
					<div id="main-content">
					<div class="container-fluid">
					<div class="section-heading">
					</div>
					<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#" role="tab" data-toggle="tab"><?php echo " $fila[institucion_ingreso] "; ?></a></li>
					</ul>
					<form action="crud" method="post"> 
					<div class="tab-content content-profile">
					<!-- UGB -->
					<div class="tab-pane fade in active" id="1">
					<div class="profile-section">
					<div class="clearfix">
					<table width="1000" border="4" style="font-family:courier;">
					<thead>
							<tr>
							<th>Nombres:</th>
							<td><?php echo " $fila[nombre] ";?></td>
							</tr>
							<tr>
							<th>Edad:</th>
							<td><?php echo " $fila[edad] ";?></td>
							</tr>
							<tr>
							<th>Genero:</th>
							<td><?php echo " $fila[genero] ";?></td>
							</tr>
							<tr>
							<th>Dui o carnet de minoridad:</th>
							<td><?php echo " $fila[dui_carnet_minoridad] ";?></td>
							</tr>
							<tr>
							<th>Dirección:</th>
							<td><?php echo " $fila[direccion] ";?></td>
							</tr>
							<tr>
							<th>Institución de ingreso:</th>
							<td><?php echo " $fila[institucion_ingreso] ";?></td>
							</tr>
							<tr>
							<th>Carrera:</th>
							<td><?php echo " $fila[carrera] ";?></td>
							</tr>
							<tr>
							<th>Año acádemico:</th>
							<td><?php echo " $fila[year_academico] ";?></td>
							</tr>
							<th>Celular:</th>
							<td><?php echo " $fila[celular] ";?></td>
							</tr>
							<tr>
							<th>Correo:</th>
							<td><?php echo " $fila[correo] ";?></td>
							</tr>
							<tr>
							<th>Observaciones:</th>
							<td><?php echo " $fila[observaciones] ";?></td>
							</tr>
							<tr>
							<th>Año de ingreso:</th>
							<td><?php echo " $fila[year_ingreso] ";?></td>
							</tr>
							<tr>
							<th>Estado:</th>
							<td><?php echo " $fila[estado] ";?></td>
							</tr>
							</thead>
							</table>
							<!--<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<i class="fa fa-check-circle"></i> Your settings have been succesfully saved
							</div>-->
							<div align="center"><p class="margin-top-30">
							<button type="button" class="btn btn-default"><a href="agregar">AGREGAR</button></a>
							<button type="button" class="btn btn-default"><a href="editar">EDITAR</button></a>
							<button type="button" class="btn btn-default"><a href="eliminar">ELIMINAR</button></a>
							<button type="button" class="btn btn-default"><a href="nuevounab">ATRAS</button></a>
							</p></div>	
                            </div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<?php
							}
							else {
							echo '<script> alert("El registro no se encuentra.");</script>';
							echo '<script> window.location="inicio"; </script>';
							}
							}
							?> 			
					</form>
					<!-- FIN DE BUSQUEDA POR DUI O CARNET -->
					<!-- INICIO BUSQUEDA TODAS LAS UNIVERSIDADES -->
					<?php
					$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
					mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
					mysql_query ("SET NAMES 'utf8'");
					if(isset($_POST['estudian']))
					{
					$buscar1 = $_POST['estudian'];
					$buscar2 = $_POST['estudian2'];
					$buscar3 = $_POST['estudian3'];
					$buscar4 = $_POST['estudian4'];
					$registros1 = @mysql_query("SELECT * FROM estudiantes WHERE id = '$buscar1' OR id = '$buscar2' OR id = '$buscar3' OR id = '$buscar4'");
					if($fila = @mysql_fetch_array($registros1)){
					echo '<script> alert("Registro encontrado.");</script>';							
					?>
					<div id="main-content">
					<div class="container-fluid">
					<div class="section-heading">
					</div>
					<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#" role="tab" data-toggle="tab"><?php echo " $fila[institucion_ingreso] "; ?></a></li>
					</ul>
					<form action="crud" method="post"> 
					<div class="tab-content content-profile">
					<!-- UNAB -->
					<div class="tab-pane fade in active" id="1">
					<div class="profile-section">
					<div class="clearfix">
					<table width="1000" border="4" style="font-family:courier;">
					<thead>
							<tr>
							<th>Nombres:</th>
							<td><?php echo " $fila[nombre] ";?></td>
							</tr>
							<tr>
							<th>edad:</th>
							<td><?php echo " $fila[edad] ";?></td>
							</tr>
							<tr>
							<th>Genero:</th>
							<td><?php echo " $fila[genero] ";?></td>
							</tr>
							<tr>
							<th>Dui o carnet de minoridad:</th>
							<td><?php echo " $fila[dui_carnet_minoridad] ";?></td>
							</tr>
							<tr>
							<th>Dirección:</th>
							<td><?php echo " $fila[direccion] ";?></td>
							</tr>
							<tr>
							<th>Institución de ingreso:</th>
							<td><?php echo " $fila[institucion_ingreso] ";?></td>
							</tr>
							<tr>
							<th>Carrera:</th>
							<td><?php echo " $fila[carrera] ";?></td>
							</tr>
							<tr>
							<th>Año acádemico:</th>
							<td><?php echo " $fila[year_academico] ";?></td>
							</tr>
							<th>Celular:</th>
							<td><?php echo " $fila[celular] ";?></td>
							</tr>
							<tr>
							<th>Correo:</th>
							<td><?php echo " $fila[correo] ";?></td>
							</tr>
							<tr>
							<th>Observaciones:</th>
							<td><?php echo " $fila[observaciones] ";?></td>
							</tr>
							<tr>
							<th>Año de ingreso:</th>
							<td><?php echo " $fila[year_ingreso] ";?></td>
							</tr>
							<tr>
							<th>Estado:</th>
							<td><?php echo " $fila[estado] ";?></td>
							</tr>
							</thead>
							</table>
							<div align="center"><p class="margin-top-30">
							<button type="button" class="btn btn-default"><a href="nuevounab">ATRAS</button></a>
							</p></div>	
                            </div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<?php
							}
							else {
							echo '<script> alert("El registro no se encuentra.");</script>';
							echo '<script> window.location="inicio"; </script>';
							}
							}
							?> 			
					</form>
					<!-- FIN BUSQUEDA TODAS LAS UNIVERSIDADES -->
					<!-- END MAIN CONTENT -->
					<!-- END WRAPPER -->
					<?php
		include 'view_scripts_footer.php';
		?>
</body>
</html>
