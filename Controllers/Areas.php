<?php 

	class Areas extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Areas()
		{
			$data['page_id'] = 8;
			$data['page_tag'] = "Areas del Hospital";
			$data['page_name'] = "area_usuario";
			$data['page_title'] = "Areas <small> Hospital Niño</small>";
			$data['page_functions_js'] = "functions_areas.js";
			$this->views->getView($this,"areas",$data);
		}

		public function getAreas()
		{
			$arrData = $this->model->selectAreas();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-primary btn-sm btnEditRol" onClick="fntEditRol('.$arrData[$i]['idarea'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" onClick="fntDelRol('.$arrData[$i]['idarea'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function getSelectAreas()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectAreas();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['status'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['idarea'].'">'.$arrData[$i]['nombrearea'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();		
		}

		public function getArea(int $idarea)
		{
			$intIdarea = intval(strClean($idarea));
			if($intIdarea > 0)
			{
				$arrData = $this->model->selectArea($intIdarea);
				if(empty($arrData))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function setArea(){
			
			$intIdarea = intval($_POST['idArea']);
			$strArea =  ucwords( strClean($_POST['txtNombre']));
			$strDescipcion = ucwords(strClean($_POST['txtDescripcion']));
			$intStatus = intval($_POST['listStatus']);

			if($intIdarea == 0)
			{
				//Crear
				$request_area = $this->model->insertArea($strArea, $strDescipcion,$intStatus);
				$option = 1;
			}else{
				//Actualizar
				$request_area = $this->model->updateArea($intIdarea, $strArea, $strDescipcion, $intStatus);
				$option = 2;
			}

			if($request_area > 0 )
			{
				if($option == 1)
				{
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				}else{
					$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
				}
			}else if($request_area == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function delArea()
		{
			if($_POST){
				$intIdarea = intval($_POST['idarea']);
				$requestDelete = $this->model->deleteArea($intIdarea);
				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Area');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Area asociado a usuarios.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Area.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
 ?>