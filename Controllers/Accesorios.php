<?php 

	class Accesorios extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Accesorios()
		{
			$data['page_id'] = 15;
			$data['page_tag'] = "Accesorios de computadoras";
			$data['page_title'] = "Accesorios - Infortec";
			$data['page_name'] = "accesorios";
			$data['page_functions_js'] = "functions_accesorios.js";
			$this->views->getView($this,"accesorios",$data);
		}

	}
 ?>