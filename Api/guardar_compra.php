<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["success" => false, "message" => "Método no encontrado"]);
    exit();
}

// Obtener los datos del cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"), true);

// Validar los datos recibidos
if (empty($data) || !isset($data['productos']) || !is_array($data['productos'])) {
    echo json_encode(["success" => false, "message" => "Datos inválidos o incompletos"]);
    exit();
}

// Requiere el archivo del controlador
require_once '../Controllers/Historial.php';

// Verificar si la clase Historial existe
if (!class_exists('Historial')) {
    echo json_encode(["success" => false, "message" => "Clase Historial no encontrada"]);
    exit();
}

// Instanciar el controlador
$objHistorial = new Historial();

// Verificar si el método registrarCompra existe
if (!method_exists($objHistorial, 'registrarCompra')) {
    echo json_encode(["success" => false, "message" => "Método registrarCompra no encontrado"]);
    exit();
}

// Llamar al método registrarCompra y procesar la respuesta
$response = $objHistorial->registrarCompra($data);

// Devuelve la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
exit();
