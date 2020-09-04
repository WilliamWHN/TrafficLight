<?php
session_start();
require_once('Classes\Trafficlight.php');

!isset($_SESSION['state']) ? $_SESSION['state'] = 0 : false;

$lights = new TrafficLight();

if (isset($_GET['next'])) {
    $_SESSION['state'] = $lights->changeState($_SESSION['state'], $_GET['next']);
} else {
    false;
}

$lights->setState($_SESSION['state']);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Traffic Light</title>
    <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css">
</head>

<body>
<div class="square">
    <div class="circle <?= $lights->red ? 'redLight' : 'off' ?>"></div>
    <div class="circle <?= $lights->hs ? 'hsLight' : ($lights->yellow ? 'yellowLight' : 'off') ?>"></div>
    <div class="circle <?= $lights->green ? 'greenLight' : 'off' ?>"></div>
    <a href="/?next=true">=></a>
    <a href="/?next=false">X</a>
    <div class="post"></div>
</div>

</body>

</html>