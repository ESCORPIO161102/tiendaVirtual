<?php

require_once "../models/helpers.php";

$obj = new Helpers();
session_start($obj->nameSession());
session_unset();
session_destroy();
header("Location: ".$obj->url()."app/views/index.html");