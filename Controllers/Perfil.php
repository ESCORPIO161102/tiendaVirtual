<?php 

	class Perfil extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function perfil()
		{
			$data['page_id'] = 16;
			$data['page_tag'] = "Perfil ";
			$data['page_title'] = "Informacion de Usuarios";
			$data['page_name'] = "Perfil";
			$data['page_functions_js'] = "functions_home.js";
			$this->views->getView($this,"perfil",$data);
		}

	}
 