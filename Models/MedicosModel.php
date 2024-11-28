<?php 

	class MedicosModel extends Mysql
	{
		private $intIdUsuario;
		private $strIdentificacion;
		private $strEspecialidad;
		private $strNombre;
		private $strApellido;
		private $floatSueldo;
		private $strGenero;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $intAreaId;
		private $strToken;
		private $intTipoId;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $identificacion,string $especialidad, string $nombre, string $apellido,float $sueldo,string $genero,int $telefono, string $email, string $password, int $areaid, int $tipoid, int $status){

			$this->strIdentificacion = $identificacion;
			$this->strEspecialidad = $especialidad;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->floatSueldo = $sueldo;
			$this->strGenero = $genero;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intAreaId = $areaid;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM medicos WHERE 
					email_user = '{$this->strEmail}' or identificacion = '{$this->strIdentificacion}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO medicos(identificacion,especialidad,nombres,apellidos,sueldo,genero,telefono,email_user,password,areaid,rolid,status) 
								  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strIdentificacion,
								$this->strEspecialidad,
        						$this->strNombre,
        						$this->strApellido,
								$this->floatSueldo,
								$this->strGenero,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
								$this->intAreaId,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function selectUsuarios()
{
    $sql = "SELECT m.idmedico, 
                   m.identificacion, 
                   m.nombres, 
                   m.apellidos, 
                   m.especialidad, 
				   a.nombrearea,
                   m.sueldo, 
                   m.genero, 
                   m.telefono, 
                   m.email_user, 
                   m.status, 
                   r.nombrerol  
            FROM medicos m
            INNER JOIN area a ON m.areaid = a.idarea
            INNER JOIN rol r ON m.rolid = r.idrol
            WHERE m.status != 0";
    $request = $this->select_all($sql);
    return $request;
}

		public function selectUsuario(int $idmedico){
			$this->intIdUsuario = $idmedico;
			$sql = "SELECT m.idmedico, 
                   m.identificacion, 
                   m.nombres, 
                   m.apellidos, 
                   m.especialidad, 
				   a.nombrearea,
                   m.sueldo, 
                   m.genero, 
                   m.telefono, 
                   m.email_user, 
                   m.status, 
                   r.nombrerol  
            FROM medicos m
            INNER JOIN area a ON m.areaid = a.idarea
            INNER JOIN rol r ON m.rolid = r.idrol
			WHERE m.idmedico = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idUsuario, string $identificacion,string $especialidad,string $nombre, string $apellido,float $sueldo,string $genero, int $telefono, string $email, string $password, int $areaid, int $tipoid, int $status){

			$this->intIdUsuario = $idUsuario;
			$this->strIdentificacion = $identificacion;
			$this->strEspecialidad = $especialidad;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->floatSueldo = $sueldo;
			$this->strGenero = $genero;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intAreaId = $areaid;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM medicos WHERE (email_user = '{$this->strEmail}' AND idmedico != $this->intIdUsuario)
										OR (identificacion = '{$this->strIdentificacion}' AND idmedico != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE medicos SET identificacion=?,especialidad=?,nombres=?, apellidos=?, sueldo=?, genero=?, telefono=?, email_user=?, password=?, areaid=?, rolid=?, status=? 
							WHERE idmedico = $this->intIdUsuario ";
					$arrData = array($this->strIdentificacion,
									$this->strEspecialidad,
	        						$this->strNombre,
	        						$this->strApellido,
									$this->floatSueldo,
									$this->strGenero,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
									$this->intAreaId,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE medicos SET identificacion=?,especialidad=?,nombres=?, apellidos=?, sueldo=?,genero=?, telefono=?, email_user=?, areaid=?, rolid=?, status=? 
							WHERE idmedico = $this->intIdUsuario ";
					$arrData = array($this->strIdentificacion,
									$this->strEspecialidad,
	        						$this->strNombre,
	        						$this->strApellido,
									$this->floatSueldo,
									$this->strGenero,
	        						$this->intTelefono,
	        						$this->strEmail,
									$this->intAreaId,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteUsuario(int $intIdmedico)
		{
			$this->intIdUsuario = $intIdmedico;
			$sql = "UPDATE medicos SET status = ? WHERE idmedico = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

	}
 ?>