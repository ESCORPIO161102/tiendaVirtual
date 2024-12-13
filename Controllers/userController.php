<?php
require_once '../Models/user.php';

class UserController extends User
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Función que me permite el registro de un usuario
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
            'url' => $this->base_url() . "/laptops"
        );
        $this->toJson($data);
        die();
    }

    /*
     * Función para recuperar la contraseña de un usuario por nombre de usuario
     */
    public function recoverPassword(string $user)
    {
        if ($user == "") {
            $data = array(
                'status' => false,
                'message' => "El campo de usuario no puede estar vacío",
                'type' => 'error'
            );
            $this->toJson($data);
            die();
        }
    
        // Llamamos a la función de la clase User para obtener la contraseña
        $request = $this->getPasswordByUsername($user);
        if (!$request) {
            $data = array(
                'status' => false,
                'message' => "Usuario no encontrado",
                'type' => 'error'
            );
            $this->toJson($data);
            die();
        }
    
        // Si se encuentra el usuario, devolveremos la información
        $data = array(
            'status' => true,
            'message' => "Usuario encontrado",
            'type' => 'success',
            'user_data' => $request
        );
        $this->toJson($data);
        die();
    }
    

    /*
     * Función para actualizar la contraseña del usuario
     */
    public function updateUserPassword(string $user, string $newPassword)
    {
        if (empty($user) || empty($newPassword)) {
            $data = array(
                'status' => false,
                'message' => "No se permiten campos vacíos",
                'type' => 'error'
            );
            $this->toJson($data);
            exit();
        }
    
        $request = $this->updatePassword($user, $newPassword);
        if ($request) {
            $data = array(
                'status' => true,
                'message' => "Contraseña actualizada correctamente",
                'type' => 'success'
            );
            $this->toJson($data);
            exit();
        } else {
            $data = array(
                'status' => false,
                'message' => "No se pudo actualizar la contraseña",
                'type' => 'error'
            );
            $this->toJson($data);
            exit();
        }
    }
    
}
?>
