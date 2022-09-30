<link rel="shortcut icon" href="plantilla/Logo/logo-cedji.jpeg">
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
    class Procesos extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'inicio', 'mensaje');
	$this->load->view("view_procesos");
	}
	}
	//AGREGAR
	$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	 mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
     mysql_query ("SET NAMES 'utf8'");
	 if(isset($_POST['enviar78']))
    { 
	 //AGREGAR ESTUDIANTES
     $nombres = $_POST['nom-apell'];
     $edad = $_POST['age'];
     $genero = $_POST['gender2'];
     $direccion = $_POST['dir'];
     $dui_o_carnet = $_POST['dui_carnet'];
     $universidad = $_POST['univer'];
     $carrera = $_POST['carr'];
     $año_academico = $_POST['año_aca'];
     $celular = $_POST['cel'];
     $correo = $_POST['email'];
     $observaciones = $_POST['obs'];
	 $año_in = $_POST['año_ing'];
	 $estado = $_POST['est'];
	 $registros = @mysql_query("SELECT * FROM estudiantes WHERE Dui_carnet_minoridad = '$dui_o_carnet'",
	 $conect)or die("Problemas al realizar la consulta:".mysql_error());
	 if($registro = @mysql_fetch_array($registros)){
	 echo '<script> alert("Dui o carnet ya registrado.");</script>';
	 echo '<script> window.location="inicio"; </script>';
	 }
	  else
	 {
	 $reg = (strlen($nombres) *strlen($edad) *strlen($genero)* strlen($dui_o_carnet)
	 * strlen($direccion) * strlen($universidad) * strlen($carrera)
	 * strlen($año_academico) * strlen($celular) * strlen($correo)* strlen($observaciones)
	 * strlen($año_in) * strlen($estado)) or die ("No se han llenado todos los campos");
	 //Ingresar datOS a la tabla
	 mysql_query("INSERT INTO estudiantes (nombre, edad, genero, dui_carnet_minoridad, direccion, 
	institucion_ingreso, carrera, year_academico, celular, correo, observaciones, year_ingreso, estado)
	 VALUES ('$nombres', '$edad','$genero','$dui_o_carnet','$direccion','$universidad','$carrera','$año_academico'
	 ,'$celular','$correo','$observaciones','$año_in','$estado')",$conect) or die (mysql_error());
     echo '   
     <script> alert("El registro ha sido guardado.");</script>';
 	 echo '<script> window.location="agregar"; </script>';
	 }
	 }
	 ?>
		<!-- END MAIN CONTENT -->
		 <?php
		 //EDITAR
	 $conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	 mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
     mysql_query ("SET NAMES 'utf8'");
	if(isset($_POST['enviar6'])){
	$dui1 = $_POST['dui_carnet3'];
    $nombres1 = $_POST['nom-apell3'];
    $edad1 = $_POST['age3'];
	$act_car_dui1 = $_POST['act_dui_3'];
    $direccion1 = $_POST['dir3'];
	$celular1 = $_POST['cel3'];
	$correo1 = $_POST['correo3'];
	$universidad1 = $_POST['univer3'];
	$año_aca1 = $_POST['año_aca3'];
	$carrera1 = $_POST['carr3'];
	$observaciones1 = $_POST['obs3'];
	$estado1 = $_POST['est3'];
	$registro = mysql_query("SELECT * FROM estudiantes WHERE dui_carnet_minoridad = '$dui1'", $conect)
	or die("Problemas al realizar la consulta:".mysql_error());
	$mod= mysql_query("UPDATE estudiantes SET nombre = '$nombres1', edad = '$edad1',
	dui_carnet_minoridad = '$act_car_dui1', direccion = '$direccion1', institucion_ingreso ='$universidad1', carrera = '$carrera1',
	year_academico = '$año_aca1', celular = '$celular1', correo = '$correo1', observaciones = '$observaciones1',
	estado = '$estado1' WHERE dui_carnet_minoridad = '$dui1'", $conect);
       if($registro = @mysql_fetch_array($registro)){
	 
		echo '<script> alert("Registro modificado.");</script>';
		echo '<script> window.location="inicio"; </script>';
	 }
	 else {
		 echo '<script> alert("Registro no modificado.");</script>';
		 echo '<script> window.location="editar"; </script>';
	 }
	 //FIN EDITAR DATOS GENERALES
	}
	 ?>
	 <?php
	 //ELIMINAR
	 $conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	 mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
     mysql_query ("SET NAMES 'utf8'");
	 if(isset($_POST['eliminar']))
    { 
    $dui_car = $_POST['dui_carnet_min'];
	$registro = @mysql_query("SELECT * FROM estudiantes WHERE dui_carnet_minoridad ='$dui_car'", $conect)
	or die ("Problemas al realizar la consulta:".mysql_error());
	 $eliminated = mysql_query("DELETE FROM estudiantes WHERE dui_carnet_minoridad ='$dui_car'", $conect)
	or die("Problemas al realizar la consulta:".mysql_error());
	$registros = mysql_query("SELECT * FROM estudiantes WHERE dui_carnet_minoridad ='$dui_car'", $conect)
	or die("Problemas al realizar la consulta:".mysql_error());
	 if($registros = mysql_fetch_array($registro)){
	 echo '<script> alert("Dui o carnet eliminado.");</script>';
	 echo '<script> window.location="inicio"; </script>';
	 
	 }
	 else{
	 echo '<script> alert("Dui o carnet no encontrado.");</script>';
	 echo '<script> window.location="eliminar"; </script>';
	 }
	}
	 ?> 