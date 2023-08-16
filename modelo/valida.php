<?php  
	/**
	 * 
	 */
	class valida
	{
		//cambio desde git
		//cambio git 2
		// cambio git 3
		private $response = array();
		private $rutatemp = "temp/";
		public function __construct()
		{			
		}
		public function CreaRespuesta($codigo, $mensaje = "", $objeto = null){
			switch ($codigo) {
				//Cambio 1
				//cambio 2 
				case '0':
					$this->response["codigo_respuesta"] = 0;
					$this->response["mensaje"] = "Ok";
					$this->response["listaobjetos"] = $objeto;
					break;				
				case '-1':
					$this->response["codigo_respuesta"] = -1;
					$this->response["mensaje"] = $mensaje;
					break;
			}
		}

		public function ObtenerResponse(){
			//Aqui se retorna la respuesta
		}

		public function ExportarJson($nombreArchivo){			
			file_put_contents($this->rutatemp .$nombreArchivo, json_encode($this->response), FILE_APPEND | LOCK_EX);
		}
	}
?>
