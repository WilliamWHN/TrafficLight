<?php

session_start();
require('Controller/controller.php');

ob_start();

$request = explode("?", $_SERVER['REQUEST_URI'], 2);
$next = isset($_GET['next']) ? $_GET['next'] : false;


switch ($request[0]) {
    default:
        http_response_code(404);
        errorPage404();
        break;
    case '':
    case '/' :
        index($next);
        break;

}


$content = ob_get_clean();
require "views/gabarit.php";
?>

