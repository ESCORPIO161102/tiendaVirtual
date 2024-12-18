<?php
// Verificamos si hay datos en la solicitud POST
if (!$_POST) {
    echo "Método no encontrado";
    exit();
}

require_once '../Controllers/Historial.php';  // Asegúrate de que la ruta sea correcta

// Crear una instancia del controlador Historial
$historialController = new Historial();

// Verifica si se requiere obtener el historial
$accion = $_POST['accion'];

if ($accion == 'obtenerHistorial') {
    // Llamar al método obtenerHistorial() que recupera el historial desde el modelo
    $historialController->obtenerHistorial();  // Este método devolverá el historial en formato JSON
} else {
    // Si la acción no está definida, retornamos un mensaje de error
    echo json_encode([
        'status' => false,
        'message' => 'Acción no reconocida',
        'type' => 'error'
    ]);
}
?>
