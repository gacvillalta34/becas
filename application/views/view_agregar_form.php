<div id="main-content">
			<div class="container-fluid">
			<div class="section-heading">
					</div>
				<form action="procesos" method="post">
					<div class="tab-content content-profile">
					<!-- AGREGAR -->
					<div class="profile-section">
							<h2 class="profile-heading"><div align="center">AGREGAR DATOS</h2></div>
							<div class="clearfix">
							<!-- LEFT SECTION -->
									<div class="left">
									<div class="form-group">
											<label>TIPO DE PROCESO:</label>
											<select class="form-control" name="est">
												<option value="">-- SELECCIONE EL PROCESO--</option>
												<option value="NUEVO INGRESO">NUEVO INGRESO</option>
												<option value="RENOVACIÓN">RENOVACIÓN</option>
												<option value="REINTEGRO">REINTEGRO</option>
												</select>
										</div>
										<div class="form-group">
											<label>NOMBRES Y APELLIDOS:</label>
											<input type="text"  autocomplete="off" class="form-control" name="nom-apell" required/>
										</div>
										<div class="form-group">
											<label>EDAD:</label>
											<input type="text"  autocomplete="off" class="form-control" name="age" required/>
										</div>
										<div class="form-group">
											<label>GENERO:</label>
											<div>
												<label class="fancy-radio">
													<input name="gender2" value="MASCULINO" type="radio" required/>
													<span><i></i>MASCULINO</span>
												</label>
												<label class="fancy-radio">
													<input name="gender2" value="FEMENINO" type="radio" required/>
													<span><i></i>FEMENINO</span>
												</label>
											</div>
										</div>
										<div class="form-group">
											<label>DUI O CARNET DE MINORIDAD:</label>
											<input type="text"  autocomplete="off" class="form-control" name="dui_carnet" required/>
										</div>
										<div class="form-group">
											<label>DIRECCION:</label>
											<input type="text"  autocomplete="off" class="form-control" name="dir" required/>
										</div>
									</div>
									<!-- END LEFT SECTION -->
									<!-- RIGHT SECTION -->
									<div class="right">
										<div class="form-group">
											<label>UNIVERSIDAD:</label>
											<select class="form-control" name="univer" required/>
												<option value="">-- SELECCIONE UNIVERSIDAD--</option>
												<option value="UNAB">UNAB</option>
												<option value="UGB">UGB</option>
												<option value="IEPROES">IEPROES</option>
												<option value="UMA">UMA</option>
												<option value="ITCA">ITCA</option>
												<option value="UNIVO">UNIVO</option>
											</select>
										</div>
										<div class="form-group">
											<label>CARRERA:</label>
											<select class="form-control" name="carr" required/>
												<option value="">-- SELECCIONE CARRERA--</option>
												<option value="">-- UNIVO--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$univo = "UNIVO";
												$query1 = "SELECT * FROM universidades WHERE nombre_universidad = '$univo'";
												$resultado1 = mysql_query($query1);
												while($fila1 = mysql_fetch_array($resultado1))
												{
												?>
												<option value="<?php echo " $fila1[carrera]";?>"><?php echo " $fila1[carrera]"; }?></option>
												<option value="">-- UGB--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$ugb = "UGB";
												$query2 = "SELECT * FROM universidades WHERE nombre_universidad = '$ugb'";
												$resultado2 = mysql_query($query2);
												while($fila2 = mysql_fetch_array($resultado2))
												{
												?>
												<option value="<?php echo " $fila2[carrera]";?>"><?php echo " $fila2[carrera]"; }?></option>
												<option value="">-- UMA--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$uma = "UMA";
												$query3 = "SELECT * FROM universidades WHERE nombre_universidad = '$uma'";
												$resultado3 = mysql_query($query3);
												while($fila3 = mysql_fetch_array($resultado3))
												{
												?>
												<option value="<?php echo " $fila3[carrera]";?>"><?php echo " $fila3[carrera]"; }?></option>
												<option value="">-- IEPROES--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$ieproes = "IEPROES";
												$query4 = "SELECT * FROM universidades WHERE nombre_universidad = '$ieproes'";
												$resultado4 = mysql_query($query4);
												while($fila4 = mysql_fetch_array($resultado4))
												{
												?>
												<option value="<?php echo " $fila4[carrera]";?>"><?php echo " $fila4[carrera]"; }?></option>
												<option value="">-- ITCA--</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$itca = "ITCA";
												$query5 = "SELECT * FROM universidades WHERE nombre_universidad = '$itca'";
												$resultado5 = mysql_query($query5);
												while($fila5 = mysql_fetch_array($resultado5))
												{
												?>
												<option value="<?php echo " $fila5[carrera]";?>"><?php echo " $fila5[carrera]"; }?></option>
												<option value="">-- UNAB --</option>
												<?php
												$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
												mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
												mysql_query ("SET NAMES 'utf8'");
												$unab = "UNAB";
												$query6 = "SELECT * FROM universidades WHERE nombre_universidad = '$unab'";
												$resultado6 = mysql_query($query6);
												while($fila6 = mysql_fetch_array($resultado6))
												{
												?>
												<option value="<?php echo " $fila6[carrera]";?>"><?php echo " $fila6[carrera]"; }?></option>
											</select>
										</div>
										<div class="form-group">
											<label>AÑO ACADEMICO:</label>
											<input type="text"  autocomplete="off" class="form-control" name="año_aca" required/>
										</div>
										<div class="form-group">
											<label>CELULAR:</label>
											<input type="text"  autocomplete="off" class="form-control" name="cel" required/>
										</div>
										<div class="form-group">
											<label>CORREO:</label>
											<input type="text"  autocomplete="off" class="form-control" name="email" required/>
										</div>
										<div class="form-group">
											<label>OBSERVACIONES:</label>
											<input type="text"  autocomplete="off" class="form-control" name="obs" required/>
										</div>
										<div class="form-group">
											<label>AÑO DE INGRESO:</label>
											<input type="text"  autocomplete="off" class="form-control" name="año_ing" required/>
										</div>
										</div>
										<!-- END RIGHT SECTION -->
									</div>
									<div align="center"><p class="margin-top-30">
									<input type="submit" class="btn btn-primary" value="GUARDAR" name="enviar78"/>
									<button type="button" class="btn btn-default"><a href="inicio">ATRAS</span></a></button>
								</p></div>
								</div>				
						<!-- FINAL DE AGREGAR -->
							</div>
							</div>
						</div>		
					</form>