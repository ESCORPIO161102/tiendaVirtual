<?php

class AccesoriosModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAccesorios()
    {
        $sql = "SELECT*FROM productos_accesorios;";
        $request = $this->select_all($sql);
        return $request;
    }
}
?>