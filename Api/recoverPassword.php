<?php
require_once '../Controllers/UserController.php'; // Asegúrate de que la ruta sea correcta
header('Content-Type: application/json');


// Recibir datos del frontend
$data = json_decode(file_get_contents("php://input"));

if (isset($data->username)) {
    $username = $data->username;

    // Instanciar el controlador UserController
    $userController = new UserController();

    // Llamamos al método recoverPassword desde el controlador
    $userController->recoverPassword($username);
} else {
    echo json_encode([
        "status" => false,
        "message" => "El campo 'username' es obligatorio."
    ]);
}
?>
