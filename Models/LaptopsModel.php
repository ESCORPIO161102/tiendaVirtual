<?php

class LaptopsModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getLaptops()
    {
        $sql = "SELECT*FROM productos_laptops;";
        $request = $this->select_all($sql);
        return $request;
    }
}
?>