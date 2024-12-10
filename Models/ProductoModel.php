<?php

class ProductoModel extends Mysql
{
	private $intIdProducto;
	private $intCodigo;
	private $strColor;
	private $strImagen;
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

	public function insertProducto(int $codigo, string $color, string $imagen, string $nombre, string $especificacion, float $precio, string $categoria, string $fecha, int $status)
	{

		$this->intCodigo = $codigo;
		$this->strColor = $color;
		$this->strImagen = $imagen;
		$this->strNombre = $nombre;
		$this->strEspecificacion = $especificacion;
		$this->floatPrecio = $precio;
		$this->strCategoria = $categoria;
		$this->strFecha = $fecha;
		$this->intStatus = $status;
		$return = 0;
		$sql = "SELECT * FROM productos WHERE 
					codigo = '{$this->intCodigo}' ";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO productos(codigo,nombre_producto,especificaciones,color,imagen,precio,fecha_registro,categoria,status) 
								  VALUES(?,?,?,?,?,?,?,?,?)";
			$arrData = array(
				$this->intCodigo,
				$this->strNombre,
				$this->strEspecificacion,
				$this->strColor,
				$this->strImagen,
				$this->floatPrecio,
				$this->strCategoria,
				$this->strFecha,
				$this->intStatus
			);

			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = "exist";
		}
		return $return;
	}

	public function selectProductos()
	{
		$sql = "SELECT idproducto,codigo,nombre_producto,especificaciones,color,imagen,precio,categoria,fecha_registro,status 
					FROM productos 
					WHERE status != 0 ";
		$request = $this->select_all($sql);
		return $request;
	}
	public function selectProducto(int $idproducto)
	{
		$this->intIdProducto = $idproducto;
		$sql = "SELECT  idproducto,codigo,nombre_producto,especificaciones,color,imagen,precio,categoria, DATE_FORMAT(fecha_registro, '%d-%m-%Y') as fechaRegistro ,status 
					FROM productos
					WHERE idproducto = $this->intIdProducto";
		$request = $this->select($sql);
		return $request;
	}

	public function updateProducto(int $idProducto, int $codigo, string $color, string $imagen, string $nombre, string $especificacion, int $precio, string $fecha, string $categoria, int $status)
	{

		$this->intIdProducto = $idProducto;
		$this->intCodigo = $codigo;
		$this->strColor = $color;
		$this->strImagen = $imagen;
		$this->strNombre = $nombre;
		$this->strEspecificacion = $especificacion;
		$this->floatPrecio = $precio;
		$this->strFecha = $fecha;
		$this->strCategoria = $categoria;
		$this->intStatus = $status;
		
		$sql = "UPDATE `productos` SET `codigo`=?, `nombre_producto`=?, `especificaciones`=?, `color`=?, `imagen`=?, `precio`=?, `fecha_registro`=?, `categoria`=?, `status`=? 
							WHERE  `idproducto`=?;";
		$arrData = array(
			$this->intCodigo,
			$this->strNombre,
			$this->strEspecificacion,
			$this->strColor,
			$this->strImagen,
			$this->floatPrecio,
			$this->strFecha,
			$this->strCategoria,
			$this->intStatus,
			$this->intIdProducto
		);
		//}
		$request = $this->update($sql, $arrData);
		return $request;

	}
	public function deleteProducto(int $intIdproducto)
	{
		$this->intIdProducto = $intIdproducto;
		$sql = "UPDATE productos SET status = ? WHERE idproducto = $this->intIdProducto ";
		$arrData = array(0);
		$request = $this->update($sql, $arrData);
		return $request;
	}

}
?>