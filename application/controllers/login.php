 <link rel="shortcut icon" href="plantilla/Logo/logo-cedij.jpeg">
<?php
session_start();
$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
	if(isset($_SESSION['usuario'])) {
	session_destroy();
	echo 'Cerraste sesión';
	}
	else{
	}	 
		 ?>
<?php
class Login extends Ci_Controller
    {
        public function index(){
             $data = array ('title' => 'Home', 'mensaje');
			 $this->load->view("view_login");
		   }
        }
		//Validación de inicio de sesión
		//Conexión y validación de usuario_clientes
	$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$password =sha1($_POST['pw']);
				$log = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'");			
				if (@mysql_num_rows($log)>0){										
					$row = @mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario'];  
				  	echo "Iniciando sesión para ".$_SESSION["usuario"]." <p>";
					echo '<script> window.location="inicio"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="login"; </script>';
				}		
			}	
		?>