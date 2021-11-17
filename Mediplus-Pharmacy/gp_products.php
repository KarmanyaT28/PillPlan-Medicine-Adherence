<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
if(isset($_GET['type'])){
    $type=$_GET['type'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>General Medicines</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image" href="images/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <style>
        .card{
            box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 8px 0 rgba(0, 0, 0, 0.19);
            padding: 8px;
        }
        #mainbody{
            padding: 15px;
        }
        .container-fluid{
            background-color: #936cd4;
            height:120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
        #filter{
            background-color: #1DC7EA;
            font-size: 30px;
            padding: 30px;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body style="background-color: transparent">
<nav class="navbar navbar-expand-lg" style="background-color:#1a0033; color: white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="basicExampleNav">
        <ul class="navbar-nav mr-auto" style="font-size: 20px">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" style="color: white">Features</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="substitute_search.html" target="mainbody">Substitute Search</a>
                    <a class="dropdown-item" href="#">Disease Predictor</a>
                    <a class="dropdown-item" href="#">Doctor Appointements</a>
                </div>
            </li>
            <li class="nav-item">

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" style="color: white">Products</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" style="width: 500px">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4>General Health Medicines</h4>
                                <ul class="list-unstyled">
                                    <li><a href="products.html" target="mainbody">Cold And Cough</a> </li>
                                    <li><a href="#">Anti Allergic</a> </li>
                                    <li><a href="#">Pain Analgesics</a></li>
                                    <li><a href="#">Gastro Intestinal</a></li>
                                    <li><a href="#">Fever</a></li>
                                    <li><a href="#">First Aid</a></li>
                                    <li><a href="#">Gynacological</a></li>
                                    <li><a href="#">Vitamins Minerals Nutrients</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4>Personal Care</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Skin Care</a> </li>
                                    <li><a href="#">Hair Care</a> </li>
                                    <li><a href="#">Baby Care</a></li>
                                </ul>
                                <h4>Health Conditions</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Stomach Care</a> </li>
                                    <li><a href="#">Heart Care</a> </li>
                                    <li><a href="#">Eye Care</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4>Health Care Devices</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Masks</a> </li>
                                    <li><a href="#">Diabetes Monitors</a> </li>
                                    <li><a href="#">Thermometers</a></li>
                                </ul>
                                <h4>Homeopathy</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Drops</a> </li>
                                    <li><a href="#">Dilutions</a> </li>
                                    <li><a href="#">Biochemics</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color: white">About
                    <span class="sr-only">(current)</span>
                </a>
            </li>

        </ul>
        <form class="form-inline" method="post" action="search_products.php">
            <div class="md-form my-0">
                <input name="search" type="submit" class="btn btn-neutral" style="border: none; font-size: 20px" value="search">
                <input class="form-control mr-sm-2" type="text" name="prod" placeholder="Search products" aria-label="Search">
            </div>
        </form>
        <div class="nav-item dropdown" style="float: right">
            <a href="cart.html" target="mainbody"><i class="nc-icon nc-cart-simple"></i></a>
        </div>
        <div class="nav-item dropdown" style="float: right">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-single-02"></i></a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
    </div>

</nav>
<div class="container-fluid">
    <h4><a style="color: white" href="dashboard.php">Home</a>/<a style="color: lightsteelblue" href="gp_products.php">General Purpose medicines</a> </h4>
</div>
<div id="mainbody">
<h1>General Purpose Medicines</h1><br>
<section class="pb-3">
    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                <?php
                if (isset($_POST['filter'])) {
                    $choice = $_POST['choice'];
                }
                else{
                    $choice='med_type';
                }
                $res=mysqli_query($conn,"select * from products where category='$type' order by $choice");
                while($row=mysqli_fetch_array($res)){
                    $prod_name=$row['med_name'];
                    $prod_qtype=$row['med_qty_type'];
                    $prod_type=$row['med_type'];
                    $price=$row['price'];
                    ?>
                    <div class="col-md-3">
                        <div class="card" style="height:500px">
                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                <div class="product">
                                    <div class="card-image">
                                        <img src="gp_meds/<?php echo $row['image_name']; ?>" class="img-responsive">
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <h5 class="text-info"><?php echo $row["med_name"]; ?></h5>
                                        <h5 class="text-danger">&#8377;<?php echo $row["price"]; ?></h5>
                                        <input type="text" name="quantity" class="form-control" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["med_name"]; ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger pull-right" value="Add to Cart">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="row">
                        <div class="col">
                            <div class="container" id="filter">
                                    <div class="container">
                                        <h3>Order By</h3>
                                        <form method="post" style="font-size: 20px; color: white">
                                            <input type="radio" name="choice" value="price">
                                            <label>Price</label><br>
                                            <input type="radio" name="choice" value="med_type">
                                            <label>Type</label><br>
                                            <input type="radio" name="choice" value="company">
                                            <label>Company</label><br>
                                            <input class="btn btn-fill btn-dark" type="submit" name="filter" value="Filter">
                                        </form>
                                    </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>
</div>
</body>
</html>
