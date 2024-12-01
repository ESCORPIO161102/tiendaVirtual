<?php 

	class NewUser extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function NewUser()
		{
			$data['page_tag'] = "NewUser - Tienda Virtual";
			$data['page_title'] = "NewUser";
			$data['page_name'] = "NewUser";
			$data['page_functions_js'] = "function_users.js";
			$this->views->getView($this,"newUser",$data);
		}

	}
 ?>