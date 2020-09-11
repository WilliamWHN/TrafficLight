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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bf6503f0a6.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>


<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-auto">
            <div class="square">
                <div class="circle <?= $lights->red ? 'redLight' : 'off' ?>"></div>
                <div class="circle <?= $lights->hs ? 'hsLight' : ($lights->yellow ? 'yellowLight' : 'off') ?>"></div>
                <div class="circle <?= $lights->green ? 'greenLight' : 'off' ?>"></div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-mm m-2 p-2">
            <a class ="btn btn-dark d-block" href="/?next=true"><i class="fas fa-step-forward fa-4x"></i></a>
        </div>
        <div class="col-mm m-2 p-2">
             <a class="btn btn-dark d-block <?= $_SESSION['state'] == 1 || $_SESSION['state'] == 3 ? 'disabled' : '' ?>" href="/?next=false"><i class="far fa-stop-circle fa-4x"></i></a>
        </div>
    </div>
</div>


</body>

</html>