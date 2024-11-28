<?php 

	class AreasModel extends Mysql
	{
		public $intIdarea;
		public $strArea;
		public $strDescripcion;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectAreas()
		{
			//EXTRAE ROLES
			$sql = "SELECT * FROM area WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectArea(int $idarea)
		{
			//BUSCAR ROLE
			$this->intIdarea = $idarea;
			$sql = "SELECT * FROM area WHERE idarea = $this->intIdarea";
			$request = $this->select($sql);
			return $request;
		}

		public function insertArea(string $area, string $descripcion, int $status){

			$return = "";
			$this->strArea = $area;
			$this->strDescripcion = $descripcion;
			$this->intStatus = $status;

			$sql = "SELECT * FROM area WHERE nombrearea = '{$this->strArea}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO area(nombrearea,descripcion,status) VALUES(?,?,?)";
	        	$arrData = array($this->strArea, $this->strDescripcion, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}	

		public function updateArea(int $idarea, string $area, string $descripcion, int $status){
			$this->intIdarea = $idarea;
			$this->strArea = $area;
			$this->strDescripcion = $descripcion;
			$this->intStatus = $status;

			$sql = "SELECT * FROM area WHERE nombrearea = '$this->strArea' AND idarea != $this->intIdarea";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE area SET nombrearea = ?, descripcion = ?, status = ? WHERE idarea = $this->intIdarea ";
				$arrData = array($this->strArea, $this->strDescripcion, $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}

		public function deleteArea(int $idarea)
		{
			$this->intIdarea = $idarea;
			$sql = "SELECT * FROM medicos WHERE areaid = $this->intIdarea";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE area SET status = ? WHERE idarea = $this->intIdarea ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}
	}
 ?>