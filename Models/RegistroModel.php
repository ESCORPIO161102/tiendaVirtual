<?php 

	class RegistroModel extends Mysql
	{
		private $intIdProducto;
		private $strCodigo;
		private $strColor;
		private $strNombre;
		private $strEspecificacion;
		private $floatPrecio;
		private $strFecha;
		private $strCategoria;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertProducto(string $codigo, string $color, string $nombre,string $especificacion ,float $precio, string $fecha, string $categoria,int $status){

			$this->strCodigo = $codigo;
			$this->strColor = $color;
			$this->strNombre = $nombre;
			$this->strEspecificacion = $especificacion;
			$this->floatPrecio = $precio;
			$this->strFecha = $fecha;
			$this->strCategoria= $categoria;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM pacientes WHERE 
					codigo = '{$this->strCodigo}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO productos(codigo,nombre_producto,especificaciones,color,precio,fecha_registro,categoria) 
								  VALUES(?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strCodigo,
        						$this->strNombre,
        						$this->strEspecificacion,
        						$this->strColor,
        						$this->floatPrecio,
        						$this->strFecha,
        						$this->strCategoria,
								$this->intStatus);
        						
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function selectProductos()
		{
			$sql = "SELECT idproducto,codigo,nombre_producto,especificaciones,color,precio,fecha_registro,categoria,status
					FROM productos 
					WHERE status != 0 ";
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectProducto(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "SELECT  idproducto,codigo,nombre_producto,especificaciones,color,precio,fecha_registro,categoria,status, DATE_FORMAT(fecha_registro, '%d-%m-%Y') as fechaRegistro 
					FROM productos
					WHERE idproducto = $this->intIdProducto";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario( int $idProducto, string $codigo, string $color,string $nombre, string $especificacion, int $precio, string $fecha, string $categoria, int $status){

			$this->intIdProducto = $idProducto;
			$this->strCodigo = $codigo;
			$this->strColor = $color;
			$this->strNombre = $nombre;
			$this->strEspecificacion = $especificacion;
			$this->floatPrecio = $precio;
			$this->strFecha = $fecha;
			$this->strCategoria = $categoria;
			$this->intStatus = $status;

			$sql = "SELECT * FROM productos WHERE (nombre = '{$this->strNombre}' AND idproducto != $this->intIdProducto)
										  OR (codigo = '{$this->strCodigo}' AND idproducto != $this->intIdProducto) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strCategoria  != "")
				{
					$sql = "UPDATE productos SET codigo=?, color=?,nombre_producto=?, especificaciones=?, precio=?, categoria=?, status=? 
							WHERE idproducto = $this->intIdProducto ";
					$arrData = array($this->strCodigo,
									$this->strColor,
	        						$this->strNombre,
	        						$this->strEspecificacion,
	        						$this->floatPrecio,
	        						$this->strCategoria,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE productos SET codigo=?, color=?, nombre_producto=?, especificaciones=?, precio=?, categoria=?, status=? 
							WHERE idpersona = $this->intIdProducto ";
					$arrData = array($this->strCodigo,
									$this->strColor,
	        						$this->strNombre,
	        						$this->strEspecificacion,
	        						$this->floatPrecio,
	        						$this->strCategoria,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteProducto(int $intIdproducto)
		{
			$this->intIdProducto = $intIdproducto;
			$sql = "UPDATE productos SET status = ? WHERE idproducto = $this->intIdProducto ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

	}
 ?>