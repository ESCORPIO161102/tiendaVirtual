<?php
require_once '../models/user.php';
class UserController extends User
{
    public function __construct()
    {
        parent::__construct();
    }
    /*
     *Funcion que me permite el registro de un usuario 
     */
    public function registerUSer(string $user, string $password)
    {
        if ($user == "" || $password == "") {
            $data = array(
                'status' => false,
                'message' => "No se permiten el registro de campos vacios",
                'type' => 'error'
            );
            $this->toJson($data);
            die();
        }
        $request = $this->createUser($user, $password);
        if ($request > 0) {
            $data = array(
                'status' => true,
                'message' => "Registro de usuario completo",
                'type' => 'success'
            );
            $this->toJson($data);
            die();
        }
    }
    public function loginUser(string $user, string $password)
    {
        if ($user == "" || $password == "") {
            $data = array(
                'status' => false,
                'message' => "Los campos no pueden estar vacios",
                'type' => 'error'
            );
            $this->toJson($data);
            die();
        }
        $password = md5($password);
        $request = $this->getUser($user, $password);
        if (!$request) {
            $data = array(
                'status' => false,
                'message' => "El usuario o contraseña son incorrectos",
                'type' => 'error'
            );
            $this->toJson($data);
            die();
        }
        session_start($this->nameSession());
        $_SESSION["user_info"] = $request;
        $data = array(
            'status' => true,
            'message' => "Bienvenido",
            'type' => 'success',
            'url' => $this->base_url() . "dashboard"
        );
        $this->toJson($data);
        die();
    }
}