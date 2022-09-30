	<?php
	class Conect extends Ci_Model
    {
        public function index(){
	class conectar{
		private $servidor="localhost:3306";
		private $usuario="";
		private $bd="bacas-2021-nuevo-ingreso";
		private $password="";
		public function conexion(){
		$conex = mysqli_connect($this->servidor, $this->usuario,$this->password, $this->bd);
		return $conex;
			}
		}
		$obj = new conectar();
		if($obj->conexion){
		echo "Conectado exitosamente.";
		}
		else{
			echo "Fallo en la conexion";
		}
		}
	}
	?>