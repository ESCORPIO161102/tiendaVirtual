<?php 

	class RecuperarContraseña extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function recuperarContraseña()
		{
			$data['page_tag'] = "RecuperarContraseña - Tienda Virtual";
			$data['page_title'] = "RecuperarContraseña";
			$data['page_name'] = "RecuperarContraseña";
			$data['page_functions_js'] = "functions_login.js";
			$this->views->getView($this,"recuperarContraseña",$data);
		}

	}
 ?>