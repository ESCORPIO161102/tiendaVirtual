<?php
require_once '../config/config.php';
class helpers
{
    public function toJson($data)
    {
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function nameSession()
    {
        return ["name" => SESSION_NAME];
    }
    public function url()
    {
        return APP_URL;
    }
    public function base_url(){
        return BASE_URL;
    }

}
