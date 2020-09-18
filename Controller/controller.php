<?php
require_once('Classes/Trafficlight.php');

function index($next){

    !isset($_SESSION['state']) ? $_SESSION['state'] = 0 : false;
    $lights = new TrafficLight();

    if ($next) {
        $_SESSION['state'] = $lights->changeState($_SESSION['state'], $next);
    } else {
        false;
    }

    $lights->setState($_SESSION['state']);
    require('Views/vue_trafficLight.php');
    }

function errorPage404(){
    require('Views/vue_errorPage404.php');
}