<?php
require_once 'mysql.php';
class User extends Mysql
{
    private $intUserId;
    private $stringUser;
    private $stringPassword;

    protected function __construct()
    {
        parent::__construct();
    }
    /*
     * Esta funcion crea un usuario
     */
    protected function createUser($user, $password)
    {
        $sql = "INSERT usuarios (nombre_usuario,`password`) VALUES (?,?);";
        $this->stringUser = $user;
        $this->stringPassword = $password;
        $data = array(
            $this->stringUser,
            $this->stringPassword
        );
        $request = $this->insert($sql, $data);
        return $request;
    }
    /*
     *Modelo de inicio de sesion
     */
    protected function getUser(string $user, string $password)
    {
        $sql = "SELECT u.id,u.nombre_usuario FROM usuarios AS u 
        WHERE u.nombre_usuario=? AND u.`password`=?";
        $this->stringUser = $user;
        $this->stringPassword = $password;
        $data = array(
            $this->stringUser,
            $this->stringPassword
        );
        $request = $this->select($sql, $data);
        return $request;
    }

    // Dentro de la clase User
protected function getPasswordByUsername($user)
{
    $sql = "SELECT nombre_usuario, `password` FROM usuarios WHERE nombre_usuario = ?;";
    $this->stringUser = $user;
    $data = array($this->stringUser);
    $request = $this->select($sql, $data);

    return $request;
}
// Dentro de la clase User
protected function updatePassword($user, $newPassword)
{
    $sql = "UPDATE usuarios SET `password` = ? WHERE nombre_usuario = ?;";
    $this->stringUser = $user;
    $this->stringPassword = $newPassword;
    $data = array(
        $this->stringPassword,
        $this->stringUser
    );
    $request = $this->update($sql, $data);

    return $request;
}

}