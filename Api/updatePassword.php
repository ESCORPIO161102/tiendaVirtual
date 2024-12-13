<?php
require_once '../Controllers/UserController.php'; // Asegúrate de que la ruta sea correcta
header('Content-Type: application/json');

// Recibir datos del frontend
$data = json_decode(file_get_contents("php://input"));

if (isset($data->username) && isset($data->newPassword)) {
    $username = $data->username;
    $newPassword = $data->newPassword;

    // Instanciamos el controlador
    $userController = new UserController();

    // Llamamos al método del controlador para actualizar la contraseña
    $userController->updateUserPassword($username, $newPassword);
} else {
    echo json_encode([
        "status" => false,
        "message" => "Los campos 'username' y 'newPassword' son obligatorios."
    ]);
}
?>
