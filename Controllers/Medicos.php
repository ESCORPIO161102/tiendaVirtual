<?php 

	class Medicos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Medicos()
		{
			$data['page_tag'] = "Medicos";
			$data['page_title'] = "MEDICOS <small>Hospital Niño</small>";
			$data['page_name'] = "medicos";
			$data['page_functions_js'] = "functions_medicos.js";
			$this->views->getView($this,"medicos",$data);
		}

		public function setUsuario(){
			if($_POST){
				
				if(empty($_POST['txtIdentificacion'])|| empty($_POST['txtEspecialidad']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) || empty($_POST['txtEmail']) || empty($_POST['listArea']) || empty($_POST['listRolid']) || empty($_POST['listStatus']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idUsuario = intval($_POST['idUsuario']);
					$strIdentificacion = strClean($_POST['txtIdentificacion']);
					$strEspecialidad = ucwords(strClean($_POST['txtEspecialidad']));
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strApellido = ucwords(strClean($_POST['txtApellido']));
					$floatSueldo = floatval(strClean($_POST['txtSueldo']));
					$strGenero = ucwords(strClean($_POST['txtGenero']));
					$intTelefono = intval(strClean($_POST['txtTelefono']));
					$strEmail = strtolower(strClean($_POST['txtEmail']));
					$intAreaId = intval(strClean($_POST['listArea']));
					$intTipoId = intval(strClean($_POST['listRolid']));
					$intStatus = intval(strClean($_POST['listStatus']));

					if($idUsuario == 0)
					{
						$option = 1;
						$strPassword =  empty($_POST['txtPassword']) ? hash("SHA256",passGenerator()) : hash("SHA256",$_POST['txtPassword']);
						$request_user = $this->model->insertUsuario($strIdentificacion,
																$strEspecialidad,
																$strNombre, 
																$strApellido,
																$floatSueldo,
																$strGenero,
																$intTelefono, 
																$strEmail,
																$strPassword,
																$intAreaId,
																$intTipoId, 
																$intStatus );
					}else{
						$option = 2;
						$strPassword =  empty($_POST['txtPassword']) ? "" : hash("SHA256",$_POST['txtPassword']);
						$request_user = $this->model->updateUsuario($idUsuario,
														$strIdentificacion,
														$strEspecialidad,
														$strNombre,
														$strApellido, 
														$floatSueldo,
														$strGenero,
														$intTelefono, 
														$strEmail,
														$strPassword,
														$intAreaId,
														$intTipoId, 
														$intStatus);

					}

					if($request_user > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else if($request_user == 'exist'){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getUsuarios()
		{
			$arrData = $this->model->selectUsuarios();
			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-info btn-sm btnViewUsuario" onClick="fntViewUsuario('.$arrData[$i]['idmedico'].')" title="Ver usuario"><i class="far fa-eye"></i></button>
				<button class="btn btn-primary  btn-sm btnEditUsuario" onClick="fntEditUsuario('.$arrData[$i]['idmedico'].')" title="Editar usuario"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelUsuario" onClick="fntDelUsuario('.$arrData[$i]['idmedico'].')" title="Eliminar usuario"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function getUsuario(int $idmedico){
			
			$idusuario = intval($idmedico);
			if($idusuario > 0)
			{
				$arrData = $this->model->selectUsuario($idusuario);
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

		public function delUsuario()
		{
			if($_POST){
				$intIdmedico = intval($_POST['idUsuario']);
				$requestDelete = $this->model->deleteUsuario($intIdmedico);
				if($requestDelete)
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el usuario');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el usuario.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
 ?>