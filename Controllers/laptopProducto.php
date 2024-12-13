<?php 

	class laptopProducto extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}
		//carga la vista de la pagina principal
		public function laptopProducto()
		{
			$data['page_tag'] = "Registro Productos";
			$data['page_title'] = "REGISTRO COMPUTADORAS";
			$data['page_name'] = "Registro Productos";
			$data['page_functions_js'] = "functions_RegistroLaptopProductos.js";
			$this->views->getView($this,"laptopProducto",$data);
		}
		//funciones 
	public function setProducto(){
    if ($_POST) {
        // Verifica si los campos obligatorios están vacíos
        if (empty($_POST['txtCodigo']) || empty($_POST['txtNombre']) || empty($_POST['txtEspecificacion']) || empty($_POST['txtColor']) || empty($_POST['txtPrecio']) || empty($_POST['txtCategoria']) || empty($_POST['txtFecha']) || empty($_POST['listStatus'])) {
            $arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
        } else {
            // Recoge los datos del formulario
            $idProducto = intval($_POST['idProducto']);
            $intCodigo = intval(strClean($_POST['txtCodigo']));
            $strNombre = ucwords(strClean($_POST['txtNombre']));
            $strEspecificacion = ucwords(strClean($_POST['txtEspecificacion']));
            $strColor = ucwords(strClean($_POST['txtColor']));
            $strImagen = ''; // Inicializa la variable de imagen
            $floatPrecio = intval(strClean($_POST['txtPrecio']));
            $strCategoria = ucwords(strClean($_POST['txtCategoria']));
            $strFecha = strtolower(strClean($_POST['txtFecha']));
            $intStatus = intval(strClean($_POST['listStatus']));

            // Subida de la imagen
            if (isset($_FILES['txtImagen']) && $_FILES['txtImagen']['error'] == 0) {
                $imagenTemp = $_FILES['txtImagen']['tmp_name'];
                $imagenNombre = basename($_FILES['txtImagen']['name']);
                $imagenDestino = "uploads/" . $imagenNombre; // Ruta donde guardarás la imagen
                if (move_uploaded_file($imagenTemp, $imagenDestino)) {
                    $strImagen = $imagenNombre; // Si la imagen se subió correctamente, asigna el nombre de la imagen
                } else {
                    $strImagen = "default.png"; // Si no se sube la imagen, asigna una imagen por defecto
                }
            } else {
                $strImagen = "default.png"; // Imagen por defecto si no se carga ninguna
            }

            // Llama al método del modelo para insertar el producto
            if ($idProducto == 0) {
                $option = 1;
                $request_user = $this->model->insertProducto(
                    $intCodigo,
                    $strColor,
                    $strImagen,  // Pasa la imagen al modelo
                    $strNombre,
                    $strEspecificacion,
                    $floatPrecio,
                    $strFecha,
                    $strCategoria,
                    $intStatus
                );
            } else {
                $option = 2;
                $request_user = $this->model->updateProducto(
                    $idProducto,
                    $intCodigo,
                    $strColor,
                    $strImagen,  // Pasa la imagen al modelo
                    $strNombre,
                    $strEspecificacion,
                    $floatPrecio,
                    $strFecha,
                    $strCategoria,
                    $intStatus
                );
            }

            // Verifica el resultado de la inserción o actualización
            if ($request_user > 0) {
                if ($option == 1) {
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                } else {
                    $arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
                }
            } else if ($request_user == 'exist') {
                $arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');
            } else {
                $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
            }
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    die();
}



		public function getProductos()
{
    $arrData = $this->model->selectProductos();
    for ($i = 0; $i < count($arrData); $i++) {

        switch ($arrData[$i]['status']) {
            case 1:
                $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
                break;
            case 2:
                $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                break;
        }

        $arrData[$i]['options'] = '<div class="text-center">
            <button class="btn btn-info btn-sm btnViewProducto" onClick="fntViewProducto(' . $arrData[$i]['idproductolap'] . ')" title="Ver producto"><i class="far fa-eye"></i></button>
            <button class="btn btn-primary btn-sm btnEditProducto" onClick="fntEditProducto(' . $arrData[$i]['idproductolap'] . ')" title="Editar producto"><i class="fas fa-pencil-alt"></i></button>
            <button class="btn btn-danger btn-sm btnDelProducto" onClick="fntDelProducto(' . $arrData[$i]['idproductolap'] . ')" title="Eliminar producto"><i class="far fa-trash-alt"></i></button>
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