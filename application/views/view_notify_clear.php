<?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$query1 = "SELECT * FROM estudiantes_triggers order by Id desc limit 15";
								$resultado1 = mysql_query($query1);
								if($fila1 = mysql_fetch_array($resultado1))
												{
								?>
								<div class="navbar-center">
					<div align="center">
					<form action="crud" method="post">
					<div align="center">
					<input type="text" value="" name="search" class="btn btn-default" autocomplete="off" placeholder="INGRESE DUI O CARNET" required/>
					<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i>BUSCAR</button>
					<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="notification-dot"></span>
								</a>
								<ul class="dropdown-menu notifications">
									<li class="header"><strong>ULTIMOS CAMBIOS REALIZADOS</strong></li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-flag-checkered text-muted"></i>
												</div>
												<div class="media-body">
								<p class="text" value="<?php echo "$fila1[institucion_ingreso] $fila1[nombre] $fila1[cambio]";?>">
								<?php echo "$fila1[institucion_ingreso] - $fila1[nombre] - $fila1[cambio]";?><strong></strong> </p>
								</div>
								</div>
								</a>
								</li>
								</li>
								</ul>
								</ul>
					</form>
					</div>
					</div>					
					</div>	
					<?php } 
					else {
					?> 
					<div class="navbar-center">
					<div align="center">
					<form action="crud" method="post">
					<div align="center">
					<input type="text" value="" name="search" class="btn btn-default" autocomplete="off" placeholder="INGRESE DUI O CARNET" required/>
					<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i>BUSCAR</button>
					<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
								</a>
								<ul class="dropdown-menu notifications">
									<li class="header"><strong>NO HAY CAMBIOS REALIZADOS</strong></li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-flag-checkered text-muted"></i>
												</div>
								</div>
								</a>
								</li>
								</li>
								</ul>
								</ul>
					</form>
					</div>
					</div>					
					</div>	
					<?php } ?>		