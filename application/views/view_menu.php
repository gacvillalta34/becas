<!-- LEFT SIDEBAR -->
		<div id="left-sidebar" class="sidebar">
			<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
				<span class="sr-only"></span>
				<i class="fa fa-angle-left"></i>
			</button>
			<br>
			<div class="sidebar-scroll">
				<div class="user-account">
					<img src="plantilla/Logo/logo-cedij.jpeg" class="img-responsive img-circle user-photo" alt="User Profile Picture" height="80" width="80">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">
						<strong>
					<?php
		$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
				$usuario = $_SESSION["usuario"];
				$query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
				$resultado = mysql_query($query);
					$row = @mysql_fetch_array($resultado);
					$_SESSION["funcion"] = $row['funcion']; 
				    echo $_SESSION["funcion"];				
		 ?>
		   </strong></a>	
				</div>
				</div>
				<nav id="left-sidebar-nav" class="sidebar-nav">
					<ul id="main-menu" class="metismenu">
						<li class=""><a href="inicio"><i class="fa fa-home" aria-hidden="true"></i> <span>INICIO</span></a></li>
						<li class=""><a href="" class="has-arrow" aria-expanded="false"><i class="fa fa-university" aria-hidden="true">
							</i><span>UNIVERSIDADES</span></a>
							<ul aria-expanded="true">
								<li class=""><a href="nuevounab">UNAB</a></li>
								<li class=""><a href="nuevougb">UGB</a></li>
								<li class=""><a href="nuevoitca">ITCA</a></li>
								<li class=""><a href="nuevoieproes"><span>IEPROES</span></a></li>
								<li class=""><a href="nuevouma"><span>UMA</span></a></li>
								<li class=""><a href="nuevounivo"><span>UNIVO</span></a></li>
							</ul>
						</li>
						<li class=""><a href="" class="has-arrow" aria-expanded="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
						<span>INSTITUTOS</span></a>
							<ul aria-expanded="true">
								<li class=""><a href="ins_gerardo_barrios">INSTITUTO GERARDO BARRIOS</a></li>
							</ul>
						</li>
						<li class=""><a href="" class="has-arrow" aria-expanded="false"><i class="fa fa-product-hunt" aria-hidden="true"></i>
							<span>PROCESOS</span></a>
							<ul aria-expanded="true">
								<li class=""><a href="agregar">AGREGAR</a></li>
								<li class=""><a href="editar">EDITAR</a></li>
								<li class=""><a href="eliminar"><span>ELIMINAR</span></a></li>
							</ul>
						</li>
						<li><a href='panel' class="alert"><i class="fa fa-sign-out" aria-hidden="true"></i><span>SALIR</span></a></li>
						<script type="text/javascript">
						$(".alert").on('click', function(e){
				e.preventDefault();
				var href = this.href;
				alertify.confirm("¿QUIERES CERRAR SESION?", function (e) {
					if (e) {
						window.location.href = href;
					}
				});
			});
			</script>
                                 </ul>
							</li>						
						</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->