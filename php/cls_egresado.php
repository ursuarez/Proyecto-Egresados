<?php
	class Egresado
	{
		private $nombres;
		private $apellidos;
		private $fec_nac;
		private $calle;
		private $colonia;
		private $num_int;
		private $num_ext;
		private $cod_pos;
		private $cor_ele;
		private $tel_par;
		private $fb;

		public function __get($atributo)
		{
			return $this->$atributo;
		}

		public function __set($atributo,$valor)
		{
			$this->$atributo=$valor;
		}

		function guardar()
		{
			$sql="INSERT INTO registrados (nombres, 
											apellidos, 
											fec_nac, 
											calle, 
											colonia, 
											num_ext, 
											num_int, 
											cod_pos, 
											cor_ele, 
											tel_par, 
											fb) 

			VALUES ('$this->nombres', 
					'$this->apellidos', 
					'$this->fec_nac',
					'$this->calle', 
					'$this->colonia', 
					'$this->num_ext', 
					'$this->num_int', 
					'$this->cod_pos', 
					'$this->cor_ele', 
					'$this->tel_par', 
					'$this->fb')";
	mysqli_query($conn,$sql)or die('Error. '.mysqli_error());
		}
	}
?>