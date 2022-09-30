<div id="main-content">
			<div class="container-fluid">
					<div class="tab-content content-profile">
					<!-- AGREGAR -->
					<div class="tab-pane fade in active" id="add">
							<div class="profile-section">
							<div class="clearfix">
								<div class="row">
					<div class="row">
					<div class="col-md-6">
						<div class="panel-content">
							<div id="demo-pie-chart-7" class="ct-chart">CANTIDAD DE HOMBRES BECADOS</div>
							<?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$masculino = "MASCULINO";
								$result5 = mysql_query("SELECT COUNT(genero) AS total5 FROM estudiantes WHERE genero = '$masculino'");
								$data5 =mysql_fetch_assoc($result5);
								?>
								<script>
	$(function() {
		var options;
		var data = {
			labels: ['M'],
			series: [
				[<?php echo $data5['total5'];?>],
			]
		};
		
		// pie chart
		var dataPie = {
			series: [<?php echo $data5['total5'];?>]
		};

		var labels = ['HOMBRES'];
		var sum = function(a, b) {
			return a + b;
		};

		new Chartist.Pie('#demo-pie-chart-7', dataPie, {
			height: "270px",
			labelInterpolationFnc: function(value, idx) {;
			return labels[idx] + ' (' + value + ')';
			}
			});
		});
		</script>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel-content">
							<div id="demo-pie-chart-8" class="ct-chart">CANTIDAD DE MUJERES BECADAS</div>
							<?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$femenino = "FEMENINO";
								$result8 = mysql_query("SELECT COUNT(genero) AS total8 FROM estudiantes WHERE genero = '$femenino'");
								$data8 =mysql_fetch_assoc($result8);
								?>
								<script>
	$(function() {
		var options;
		var data = {
			labels: ['F'],
			series: [
				[<?php echo $data8['total8'];?>],
			]
		};
		
		// pie chart
		var dataPie = {
			series: [<?php echo $data8['total8'];?>]
		};

		var labels = ['MUJERES'];
		var sum = function(a, b) {
			return a + b;
		};

		new Chartist.Pie('#demo-pie-chart-8', dataPie, {
			height: "270px",
			labelInterpolationFnc: function(value, idx) {;
			return labels[idx] + ' (' + value + ')';
			}
			});
		});
		</script>
						</div>
					</div>
				</div>
				</div>
					<div class="dashboard-section">
					<div class="section-heading clearfix">
					<a href="" class="right">CANTIDAD DE BECADOS:</a>
					</div>
					<div class="panel-content">
						<div class="row margin-bottom-15">
							<div class="col-md-8 col-sm-7 left">
								<div id="demo-line-chart" class="ct-chart"></div>
							</div>
							<div class="col-md-4 col-sm-5 right">
								<div class="row margin-bottom-30">
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">UNIVO:</span>
									<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "UNIVO";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">UNAB:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "UNAB";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">UGB:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "UGB";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">UMA:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "UMA";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">IEPROES:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "IEPROES";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">ITCA:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "ITCA";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">I. GERARDO BARRIOS:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "INSTITUTO GERARDO BARRIOS";
								$result1 = mysql_query("SELECT COUNT(*) AS total FROM estudiantes WHERE institucion_ingreso = '$uni'");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									<div class="col-xs-4">
										<p class="text-right text-larger"><span class="text-muted">TOTAL DE BECADOS:</span>
											<br><strong><?php
								$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
								mysql_select_db("becas",$conect)or die("No se encontró la base de datos");
								mysql_query ("SET NAMES 'utf8'");
								$uni = "IEPROES";
								$result1 = mysql_query("SELECT COUNT(Id) AS total FROM estudiantes");
								$data1=mysql_fetch_assoc($result1);
								echo $data1['total'];?></strong></p>
									</div>
									</div>
							</div>
						</div>
					</div>
					<!-- FINAL 2021 -->
				<!-- END CAMPAIGN -->
								</div>
							</div>
								</div>
							  </div>
							</div>
				<!-- CAMPAIGN -->
				<!-- 2021 -->
							 </div>
						 </div>
						 <script>
	$(function() {
		var options;

		// donut chart
		var dataDonut = {
			series: [20, 10, 30, 40]
		};

		new Chartist.Pie('#demo-donut-chart', dataDonut, {
			height: "270px",
			donut: true,
			donutWidth: 60,
			donutSolid: true,
			startAngle: 270,
			showLabel: true
		});
	});
	</script>