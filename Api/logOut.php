<?php

require_once "../Models/helpers.php";

$obj = new Helpers();
session_start($obj->nameSession());
session_unset();
session_destroy();
header("Location: ".$obj->base_url()."/login");
