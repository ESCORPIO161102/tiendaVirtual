<?php

class HistorialModel extends Mysql {

private $nombre_producto;
private $precio;
private $cantidad;
private $fecha;
private $estado;

public function __construct() {
    parent::__construct();
}

// Función para insertar un historial de compra
public function insertHistorial($params) {
    // Validación básica de parámetros requeridos
    if (!isset($params['nombre_producto'], $params['precio'], $params['cantidad'], $params['fecha'], $params['estado'])) {
        return ['success' => false, 'message' => 'Parámetros incompletos'];
    }

    // Consulta SQL parametrizada
    $sql = "INSERT INTO historial_compras (nombre_producto, precio, cantidad, fecha, estado) 
            VALUES (?, ?, ?, ?, ?)";

    // Asignación de variables
    $this->nombre_producto = $params['nombre_producto'];
    $this->precio = $params['precio'];
    $this->cantidad = $params['cantidad'];
    $this->fecha = $params['fecha'];
    $this->estado = $params['estado'];

    // Datos preparados para la consulta
    $data = [
        $this->nombre_producto,
        $this->precio,
        $this->cantidad,
        $this->fecha,
        $this->estado,
    ];

    // Ejecución de la consulta usando el método insert
    try {
        $request = $this->insert($sql, $data);

        // Verificación del resultado
        if ($request) {
            return ['success' => true, 'message' => 'Compra insertada correctamente', 'id' => $request];
        } else {
            return ['success' => false, 'message' => 'Error al insertar la compra'];
        }
    } catch (Exception $e) {
        // Captura de errores y devolución de mensaje
        return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
    }
}


// Función para obtener el historial de compras
public function getHistorial() {
    $sql = "SELECT idcompra, nombre_producto, precio, cantidad, fecha, estado 
              FROM historial_compras 
              ORDER BY fecha DESC";
    $result = $this->select($sql);
    
    // Verificar si $result es un array antes de devolverlo
    if ($result === false) {
        // Log o mensaje de error en caso de que no se haya ejecutado la consulta correctamente
        die("Error al obtener el historial de compras");
    }
    
    return $result;
}


}
