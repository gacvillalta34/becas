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
	
		?>

<div align="center">
<table WIDTH="600" style="font-family:cambria;">
<H1 class=SaltoDePagina></h6>
<thead>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center"><h3>
<tr>
<th height="50"><div align="left"><h6>NOMBRE DE BECARIO/A: JOSSELINE ODALY AYALA VASQUEZ <?php echo " "; ?></font></h6>
<p>
<h6>DUI O CARNET: 0028040 <?php echo ""; ?>
EDAD: 17<?php echo ""; ?> AÑOS. &nbsp;&nbsp; 
TELEFONO: 7739-7664<?php echo ""; ?></h6> </font>
<p>
<h6>DOMICILIO: RESIDENCIAL LAS AGUILAS POL P #39<?php echo " "; ?></h6></font>
<p>
<h6>UNIVERSIDAD/INSTITUCION: UNAB<?php echo " "; ?> &nbsp;&nbsp;CARRERA: LIC. EN LABORATORIO CLINICO<?php echo " "; ?>

</h6></font></th>
</tr>
</div>
</thead>
</table>
</body>
</html>