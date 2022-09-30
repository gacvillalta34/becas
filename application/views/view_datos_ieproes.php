<div id="main-content">
			<div class="container-fluid">
			<div class="section-heading">
			<div class="row">
					<div class="col-md-6">
						<?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								$result7 = @mysql_query("SELECT COUNT(*) AS total7 FROM estudiantes WHERE institucion_ingreso = 'IEPROES'");
								$data7 =@mysql_fetch_assoc($result7);
							?>
							<div class="panel-content">
							<div id="demo-pie-chart8" class="ct-chart">CANTIDAD DE BECADOS IEPROES: <?php echo $data7['total7'] ?></div>
						</div>
					 </div>
					</div>
					</div>
				<form action="crud" method="post">
					<div class="tab-content content-profile">
					<!-- AGREGAR -->
					<div class="profile-section">
							<h2 class="profile-heading"><div align="center">IEPROES</h2></div>
							<div class="clearfix">
							<!-- LEFT SECTION -->
									<div class="left">
									<div class="form-group">
											<label>1 - 100:</label><!-- limit 0,86 -->
											<select class="form-control" name="estudian">
												<option value="">-- SELECCIONE ESTUDIANTE--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$ieproes = "IEPROES";
												$query1 = "SELECT * FROM estudiantes WHERE institucion_ingreso = '$ieproes' LIMIT 0, 100";
												$resultado1 = mysql_query($query1);
												while($fila1 = mysql_fetch_array($resultado1))
												{
												?>
												<option value="<?php echo " $fila1[id] $fila1[nombre]";?>"><?php echo " $fila1[id] - $fila1[nombre]";}?></option></select>
										</div>
										<div class="form-group">
											<label>201 - 300:</label>
											<select class="form-control" name="estudian2">
												<option value="">-- SELECCIONE ESTUDIANTE--</option>
												<option value="">-- IEPROES--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$ieproes = "IEPROES";
												$query1 = "SELECT * FROM estudiantes WHERE institucion_ingreso = '$ieproes' LIMIT 200, 300";
												$resultado1 = mysql_query($query1);
												while($fila1 = mysql_fetch_array($resultado1))
												{
												?>
												<option value="<?php echo " $fila1[id] $fila1[nombre]";?>"><?php echo " $fila1[id] - $fila1[nombre]";}?></option></select>
										</div>
										</div>
										<div class="right">
										<div class="form-group">
											<label>101 - 200:</label>
											<select class="form-control" name="estudian3">
												<option value="">-- SELECCIONE ESTUDIANTE--</option>
												<option value="">-- IEPROES--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$ieproes = "IEPROES";
												$query1 = "SELECT * FROM estudiantes WHERE institucion_ingreso = '$ieproes' LIMIT 100, 200";
												$resultado1 = mysql_query($query1);
												while($fila1 = mysql_fetch_array($resultado1))
												{
												?>
												<option value="<?php echo " $fila1[id] $fila1[nombre]";?>"><?php echo " $fila1[id] - $fila1[nombre]";}?></option></select>
										</div>
										
										<div class="form-group">
											<label>301 - 400:</label>
											<select class="form-control" name="estudian4">
												<option value="">-- SELECCIONE ESTUDIANTE--</option>
												<option value="">-- IEPROES--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$ieproes = "IEPROES";
												$query1 = "SELECT * FROM estudiantes WHERE institucion_ingreso = '$ieproes' LIMIT 300, 400";
												$resultado1 = mysql_query($query1);
												while($fila1 = mysql_fetch_array($resultado1))
												{
												?>
												<option value="<?php echo " $fila1[id] $fila1[nombre]";?>"><?php echo " $fila1[id] - $fila1[nombre]";}?></option></select>
										</div>
									</div>
									<!-- END LEFT SECTION -->
									<!-- RIGHT SECTION -->
								
										<!-- END RIGHT SECTION -->
									</div>
									<div align="center"><p class="margin-top-30">
									<input type="submit" class="btn btn-primary" name="ver" value="VER">
									<button type="button" class="btn btn-default"><a href="inicio">ATRAS</button></a>
								</p></div>
								</div>				
						<!-- FINAL DE AGREGAR -->
							</div>
							</div>
						</div>		
					</form>