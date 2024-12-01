<?php
require_once "../Models/helpers.php";

$objHelpers = new Helpers();
session_start($objHelpers->nameSession());

if(isset($_SESSION['user_info'])){
    //preparo el array para mostrar el usuario
    $data = array(
        'status' => true,
        'message' =>"Estas conectado al sistema",
        'type' => 'info',
        'infoUser' => $_SESSION['user_info']
    );
    echo json_encode($data);
    die();
}

$data = array(
    'status' => false,
    'message' =>"No estas conectado al sistema",
    'type' => 'error',
    'url' => $objHelpers->url()."login"

);
echo json_encode($data);
die();
