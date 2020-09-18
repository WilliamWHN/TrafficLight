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
            <a class ="btn btn-dark d-block  <?= $next ? 'disabled' : '' ?> " href="?next=true"><i class="fas fa-step-forward fa-4x"></i></a>
        </div>
        <div class="col-mm m-2 p-2">
            <a class="btn btn-dark d-block <?= $_SESSION['state'] == 1 || $_SESSION['state'] == 3  || $_SESSION['state'] == 4 ? 'disabled' : '' ?>" href="?next=false"><i class="far fa-stop-circle fa-4x"></i></a>
        </div>
    </div>
</div>

<script type="text/javascript">
    (() => {
        let timer;
        switch(<?=$_SESSION['state']?>) {
            case 0:
                timer=10000;
                break;
            case 1:
                timer=1000;
                break;
            case 2:
                timer=5000;
                break;
            case 3:
                timer=1000;
                break;
            default:
            case 4:
                return;
        }
        setTimeout(function() {
            location.reload();
        }, timer);
    })();



</script>

