<?php

class Accesorios extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function accesorios()
	{
		$data['page_id'] = 29;
		$data['page_tag'] = "Accesorios ";
		$data['page_title'] = "Accesorios - Infortec";
		$data['page_name'] = "Accesorios";
		$data['page_functions_js'] = "functions_productos.js";
		$data['page_accesorios'] = $this->model->getAccesorios();
		$this->views->getView($this, "accesorios", $data);
	}

}
?>