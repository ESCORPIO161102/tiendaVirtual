<?php 

	class Laptops extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function laptops()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Laptos ";
			$data['page_title'] = "Laptos - Infortec";
			$data['page_name'] = "Laptops";
			$data['page_functions_js'] = "functions_productos.js";
			$this->views->getView($this,"laptops",$data);
		}

	}
 ?>