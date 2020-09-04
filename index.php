<?php
require_once('Classes\Trafficlight.php');

$lights = new TrafficLight();
$lights->setState($_GET['state']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Traffic Light</title>
    <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css">
</head>

<body>
    <div class="square">
        <div class="circle <?= $lights->red ? 'redlight' : 'off'?>"></div>
        <div class="circle <?= $lights->yellow ? 'yellowlight' : 'off'?>"></div>
        <div class="circle <?= $lights->green ? 'greenlight' : 'off'?>"></div>
        <a href="/?state=<?= isset($_GET['state']) ? ($_GET['state'] + 1) % 4 : 1 ?>">=></a>
        <div class="post"></div>
    </div>

</body>

</html>