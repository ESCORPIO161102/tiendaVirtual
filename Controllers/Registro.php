<?php 

	class Registro extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Registro()
		{
			$data['page_tag'] = "Registro Productos";
			$data['page_title'] = "REGISTRO PRODUCTOS";
			$data['page_name'] = "Registro Productos";
			$data['page_functions_js'] = "functions_RegistroProductos.js";
			$this->views->getView($this,"registro",$data);
		}

		public function setProducto(){
			if($_POST){
				
				if(empty($_POST['txtCodigo']) || empty($_POST['txtColor']) || empty($_POST['txtNombre']) || empty($_POST['txtEspecificaciones']) ||  empty($_POST['txtPrecio']) || empty($_POST['txtCategoria']) || empty($_POST['txtFecha']) || empty($_POST['listStatus']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idProducto = intval($_POST['idProducto']);
					$strCodigo = intval(strClean($_POST['txtCodigo']));
					$strColor = ucwords( strClean($_POST['txtColor']));
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strEspecificacion = ucwords(strClean($_POST['txtEspecificaciones']));
					$floatPrecio = intval(strClean($_POST['txtPrecio']));
					$strFecha = strtolower(strClean($_POST['txtFecha']));
					$strCategoria = ucwords(strClean($_POST['txtCategoria']));
					$intStatus = intval(strClean($_POST['listStatus']));

					if($idProducto == 0)
					{
						$option = 1;
						$request_user = $this->model->insertProducto($strCodigo,
																$strColor,
																$strNombre, 
																$strEspecificacion,
																$floatPrecio, 
																$strFecha,
																$strCategoria, 
																$intStatus );
					}else{
						$option = 2;
						$request_user = $this->model->updateProducto($idProducto,
						$strCodigo,
						$strColor,
						$strNombre, 
						$strEspecificacion,
						$floatPrecio, 
						$strFecha,
						$strCategoria, 
						$intStatus );
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

		public function getProductos()
{
    $arrData = $this->model->selectProductos();
    for ($i = 0; $i < count($arrData); $i++) {

        switch ($arrData[$i]['status']) {
            case 1:
                $arrData[$i]['status'] = '<span class="badge badge-success">Paciente</span>';
                break;
            case 2:
                $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                break;
            case 3:
                $arrData[$i]['status'] = '<span class="badge badge-info">Hospitalizado (UCI)</span>';
                break;
            case 4:
                $arrData[$i]['status'] = '<span class="badge badge-primary">Dado de Alta</span>';
                break;
            case 5:
                $arrData[$i]['status'] = '<span class="badge badge-warning">Salud Crítica</span>';
                break;
            case 6:
                $arrData[$i]['status'] = '<span class="badge badge-dark">Fallecido</span>';
                break;
            case 7:
                $arrData[$i]['status'] = '<span class="badge badge-secondary">Hozpitalizado</span>';
                break;
        }

        $arrData[$i]['options'] = '<div class="text-center">
            <button class="btn btn-info btn-sm btnViewUsuario" onClick="fntViewUsuario(' . $arrData[$i]['idpersona'] . ')" title="Ver usuario"><i class="far fa-eye"></i></button>
            <button class="btn btn-primary btn-sm btnEditUsuario" onClick="fntEditUsuario(' . $arrData[$i]['idpersona'] . ')" title="Editar usuario"><i class="fas fa-pencil-alt"></i></button>
            <button class="btn btn-danger btn-sm btnDelUsuario" onClick="fntDelUsuario(' . $arrData[$i]['idpersona'] . ')" title="Eliminar usuario"><i class="far fa-trash-alt"></i></button>
        </div>';
    }
    echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
    die();
}

		public function getProducto(int $idproducto){
			
			$idproducto = intval($idproducto);
			if($idproducto > 0)
			{
				$arrData = $this->model->selectProducto($idproducto);
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

		public function delProducto()
		{
			if($_POST){
				$intIdproducto = intval($_POST['idProducto']);
				$requestDelete = $this->model->deleteProducto($intIdproducto);
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