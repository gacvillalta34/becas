<link rel="shortcut icon" href="plantilla/Logo/logo-cedij.jpeg">
<?php
session_start();
$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
if(isset($_SESSION['usuario'])) {
		 ?>
</div>
</body>
</html>
<?php
}
else{
	echo '<script> window.location="login"; </script>';
}
?>
	<?php
    class Editar extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_procesos");
		
	}
	}
    ?>