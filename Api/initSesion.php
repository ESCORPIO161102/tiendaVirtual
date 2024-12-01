<?php
if (!$_POST) {
    echo "Metodo no econtrado";
    exit();
}
require_once '../Controllers/userController.php';
$objUser = new UserController();
$user = $_POST['username'];
$password = $_POST['password'];
$objUser->loginUser($user, $password);
