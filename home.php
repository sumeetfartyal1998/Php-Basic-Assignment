<?php
    include("nav.php");
?>
<!doctype html>
<html lang="en">
<head>
        <?php include("head.php");?>
        <style>
            img{
                image-rendering: optimizeQuality;
            }
        </style>
        <title>Home</title>
</head>
<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="Media/oneplus9/2_opnord2.png" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="Media/oneplus9/opnord2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="Media/oneplus9/5_op9r.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <?php include("foot.php");?>
</body>
</html>