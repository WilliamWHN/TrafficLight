<?php
require_once('Classes\trafficlight.php');

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
        <div class="circle" style="background-color:<?= $lights->red ?>"></div>
        <div class="circle" style="background-color:<?= $lights->yellow ?>"></div>
        <div class="circle" style="background-color:<?= $lights->green ?>"></div>
        <a href="/?state=<?= isset($_GET['state']) ? ($_GET['state'] + 1) % 4 : 1 ?>">=></a>
        <div class="post"></div>
    </div>

</body>

</html>