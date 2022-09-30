<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="plantilla/Logo/logo-cedij.jpeg">
	<link rel="icon" type="plantilla/assets14/theme/image/png" sizes="96x96" href="plantilla/Logo/logo-cedij.jpeg">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="plantilla/Logo/logo-cedij.jpeg" alt="DiffDash" height="100" width="200"></div>
							<p class="lead">Iniciar sesión</p>
						</div>
						<form class="form-auth-small" action="login" method="post">
							<div class="form-group">
								<label for="signin-email" class="control-label sr-only">Usuario:</label>
								<input type="text" autocomplete="off" class="form-control" id="signin-user" placeholder="Ingrese usuario" name="user" required/>
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Contraseña:</label>
								<input type="password" autocomplete="off" class="form-control" id="signin-password" placeholder="Ingrese contraseña" name="pw" required/>
							</div>
							<div align="center"><button type="submit" class="btn btn-success" name="login">Ingresar</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
<div class="clearfix"></div>
		<footer>
			<p class="copyright"><a href="https://www.themeineed.com" target="_blank">Todos los derechos reservados &copy; 2022.</a>
			Página desarrollada por: Aarón Contreras.</p>
		</footer>
</html>
