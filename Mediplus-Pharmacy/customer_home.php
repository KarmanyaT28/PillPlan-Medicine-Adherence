<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$cid=$_SESSION['cust_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
        body {
            padding: 8px;
        }
    </style>
</head>
<?php

?>
<body>
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox" style="height: 270px">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="images/medicine-online-getty.jpg"
                     alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="images/medicine-online-getty.jpg"
                     alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="images/20190328-americas-pharmacy-mobile-banner.png"
                     alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><br>
<h1>Shop By Categories</h1><br>
<div class="row" style="text-align: center">
    <div class="col-sm-1">

    </div>
    <div class="col-md-2">
        <img class="rounded-circle" src="images/medical-treatment_23-2148108989.jpg" style="height: 150px; width: 150px"><br><br>
        <h4><?php echo "<a class='text-info' href='products.php?type=general_purpose' target='_parent'>General Purpose Medicines</a>"?></h4>
    </div>
    <div class="col-md-2">
        <img class="rounded-circle" src="images/toothbrush-soap-bath-bomb-pink-salt-cosmetics-products-white-background_23-2147818067.jpg" style="height: 150px; width: 150px"><br><br>
        <h4><?php echo "<a class='text-info' href='products.php?type=personal_care' target='_parent'>Personal Care</a>"?></h4>
    </div>
    <div class="col-md-2">
        <img class="rounded-circle" src="images/medical%20equipments.jpg" style="height: 150px; width: 150px"><br><br>
        <h4><?php echo "<a class='text-info' href='products.php?type=medical_equipments' target='_parent'>Medical Equipments</a>"?></h4>
    </div>
    <div class="col-md-2">
        <img class="rounded-circle" src="images/top-view-stitched-heart-shape-with-stethoscope-against-bright-yellow-background_23-2148214043.jpg" style="height: 150px; width: 150px"><br><br>
        <h4><?php echo "<a class='text-info' href='products.php?type=health_conditions' target='_parent'>Health Condition Based</a>"?></h4>
    </div>
    <div class="col-md-2">
        <img class="rounded-circle" src="images/various-cosmetic-products-test-tube-with-gingko-leaf-flower-white-backdrop_23-2147971362.jpg" style="height: 150px; width: 150px"><br><br>
        <h4><?php echo "<a class='text-info' href='products.php?type=homeopathy' target='_parent'>Homeopathy</a>"?></h4>
    </div>
    <div class="col-sm-1">

    </div>
</div>
</body>
</html>