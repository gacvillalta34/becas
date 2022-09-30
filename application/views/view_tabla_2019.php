<html>
<head>
<style>
 H1.SaltoDePagina
 {
     PAGE-BREAK-AFTER: always
 }
</style>
</head>
<body>
<br>
<?php
	$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	mysql_select_db("becas-2021-nuevo-ingreso",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
	$query = "SELECT * FROM estudiantes";
	$resultado = mysql_query($query);
	//LIMIT 190,314
	while($fila = mysql_fetch_array($resultado))
	{
		?>
<div align="center">
<table width="1000" border="2" style="font-family:courier;">
<H1 class=SaltoDePagina></h3>
<div align="center"><h3><img src="plantilla/images/logo-alcaldía.jpg" height="80" width="150">
PROGRAMA DE BECAS "BECA JOVEN" <img src="plantilla/Logo/logo-cedij.jpeg" height="80" width="150"><br>
CENTRO DE ENCUENTRO PARA EL DESARROLLO INTEGRAL JUVENIL (CEDI JUVENIL)<br>
ALCALDIA DE SAN MIGUEL</h3> </div>
<thead>
<tr>
<td height="5" bgcolor= "beige"><div align="center"><h3>FICHA DE SOLICITUD DE BECA
<br>
</tr>
<tr>
<th height="50"><div align="left"><h3>Nombre:<?php echo $fila['Nombres']?></font></h3></th>
</tr>
<tr>
<th height="50"><div align="left"><h3>Género: <?php echo $fila['Genero'] ?> </h3></th>
</tr>
<tr>
<br><th height="50"><div align="left"><h3>Número de DUI o Carnet de minoridad:<?php echo $fila['Dui_o_carnet_minoridad'] ?></h3></th>
</tr>
<tr>
<br><th height="50"><div align="left"><h3>Dirección:<?php echo $fila['Dirección'] ?></h3></th>
</tr>
<tr><th height="50"><div align="left"><h3>Universidad:<?php echo $fila['Institucion_educativa_ingreso'] ?></h3></th>
</tr>
<tr><th height="50"><div align="left"><h3>Carrera:<?php echo $fila['Carrera'] ?></h3></th>
</tr>
<tr><th height="50"><div align="left"><h3>Año de ingreso:<?php echo $fila['Año_ingreso'] ?></h3></th>
</tr>
<tr>
<th height="50"><div align="left"><h3>Estado:<?php echo $fila['Estado'] ?></h3></th>
</tr>
<tr>
<?php
	}
?></div>
</thead>
</table>
</body>
</html>