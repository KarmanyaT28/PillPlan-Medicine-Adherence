<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
if(isset($_GET['add'])){
    $medid=$_GET['add'];
}
$cid=$_SESSION['cust_id'];
$today = date("Ymd");
$rand = sprintf("%04d", rand(0,9999));
$unique = $today . $rand;
if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        } else {
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
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
    <script src="js/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <style>
        .jumbotron-fluid a, .jumbotron-fluid h1{
            color: white;
        }
        .card{
            box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 8px 0 rgba(0, 0, 0, 0.19);
            padding: 30px;
        }
        .swal-overlay {
            background-color: #936cd4;
        }
        #goback{
            background-color: #936cd4;
            height:120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
        #mainbody{
            padding: 15px;
        }
        #contents{
            padding: 10px;
            font-size: 20px;
        }
        col{
            padding: 20px;
        }
        .row{
            margin: 20px;
        }
    </style>
</head>
<script style="height: 400px;" src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
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
                    <a class="dropdown-item" href="substitute_search.php">Substitute Search</a>
                    <a class="dropdown-item" href="disease_predictor.php">Disease Predictor</a>
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
                                <h4><?php echo "<a class='text-danger' href='products.php?type=general_purpose' target='_parent'>General Purpose Medicines</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Cold And Cough</li>
                                    <li>Anti Allergic</li>
                                    <li>Pain Analgesics</li>
                                    <li>Gastro Intestinal</li>
                                    <li>Fever</li>
                                    <li>First Aid</li>
                                    <li>Gynacological</li>
                                    <li>Vitamins Minerals Nutrients</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4><?php echo "<a class='text-danger' href='products.php?type=personal_care' target='_parent'>Personal Care</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Skin Care</li>
                                    <li>Hair Care</li>
                                    <li>Baby Care</li>
                                </ul>
                                <h4><?php echo "<a class='text-danger' href='products.php?type=health_conditions' target='_parent'>Health Conditions</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Stomach Care</li>
                                    <li>Heart Care</li>
                                    <li>Eye Care</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4><?php echo "<a class='text-danger' href='products.php?type=medical_equipments' target='_parent'>Medical Equipments</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Masks</li>
                                    <li>Diabetes Monitors</li>
                                    <li>Thermometers</li>
                                </ul>
                                <h4><?php echo "<a class='text-danger' href='products.php?type=homeopathy' target='_parent'>Homeopathy</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Drops</li>
                                    <li>Dilutions</li>
                                    <li>Biochemics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php" style="color: white">About
                    <span class="sr-only">(current)</span>
                </a>
            </li>

        </ul>
        <form class="form-inline">
            <div class="md-form my-0">
                <i class="nc-icon nc-zoom-split"></i>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
        <div class="nav-item dropdown" style="float: right">
            <a href="cart.php"<i class="nc-icon nc-cart-simple"></i></a>
        </div>
        <div class="nav-item dropdown" style="float: right">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-single-02"></i></a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
    </div>

</nav>
<div class="container-fluid" id="goback">
    <h4><a style="color: white" href="dashboard.php">Home</a>/<a style="color: lightsteelblue" href="cart.php">Cart</a> </h4>
</div><br>
<body>
<div id="mainbody">
    <?php
    $res=mysqli_query($conn,"select * from customer where c_email='$cid'");
    while($row=mysqli_fetch_array($res)){
        $addr=$row['c_address'];
        $name=$row['c_fname']." ".$row['c_lname'];
    }
    ?>
    <h2>Items In Your Cart</h2><br>
    <div class="row">
        <?php
        $res5=mysqli_query($conn,"select * from medical_info where cust_id='$cid'");
        while($row5=mysqli_fetch_array($res5)){
            $allergy=$row5['allergies'];
        }
        if(!empty($_SESSION["cart"])){
            $total = 0;
            foreach ($_SESSION["cart"] as $key => $value) {
                $no_items=count($_SESSION['cart']);
                $medname=$value["item_name"];
                $res6=mysqli_query($conn,"Select * from products where med_name like '%$allergy%' or chemicals like'%$allergy%'");
                while($row6=mysqli_fetch_array($res6)){
                    $allergymed=$row6['med_name'];
                }
                $cnt=mysqli_num_rows($res6);
                if($cnt>0 and $medname==$allergymed){
                    echo "<script>swal(\"Warning\",\"You may have allergy from $allergymed\", \"warning\");</script>";
                }
                $res3=mysqli_query($conn,"select * from products where med_name='$medname'");
                while($row2=mysqli_fetch_array($res3)){
                    $img=$row2['image_name'];
                    ?>
                    <div class="col-md-4">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"><img class="media-object" src="medicine_images/<?php echo $img?>" style="width: 100px; height: 100px; margin: 10px"></a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"> <?php echo $value["item_name"]; ?></a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        Price<br><strong>&#8377; <?php echo $value["product_price"]; ?></strong>
                    </div>
                    <div class="col-md-2 text-center">
                        Quantity<br><strong><?php echo $value["item_quantity"]; ?></strong>
                    </div>
                    <div class="col-md-2 text-center">
                        Total<br><strong>&#8377; <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></strong>
                    </div>
                    <div class="col-md-2 text-center">
                        <button class="btn btn-danger"><a style="color: white" href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>">Remove Item</a></button>
                    </div>
                    <?php
                    $total = $total + ($value["item_quantity"] * $value["product_price"]);
                }}
        }else {
            echo "<h1 class='text-danger text-center'>Your cart is Empty!!! Nothing to Order</h1>";
        }
        ?>
    </div>
    <br><br>
    <?php
    if(!empty($_SESSION['cart'])){
    ?>
    <div class="card" style="padding: 20px;" >
        <h5>Total MRP: &#8377;<?php echo number_format($total, 2); ?><br>
            GST 18%<br>
            <?php $gr_total=$total+($total*18)/100?>
            Total Amount: &#8377;<?php echo number_format($gr_total, 2); ?> </h5><br>
        <h2>Shipping Address:</h2><br>
        <h5><?php echo $addr ?></h5><br>
        <div>
            <?php echo "<button class='btn btn-danger btn-block my-4' ><h4><a style='color: white' href='cart.php?orders=".$unique."'>Place Order</a></h4></button>"?>
            <?php
            }
            else{
                echo "<button class='btn btn-info btn-block my-4' ><h4><a style='color: white' href='dashboard.php'>Let's Shop something!</a></h4></button>";
            }
            ?>
        </div>
        <?php
        if(!empty($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $key => $value) {
                $prod_name = $value["item_name"];
                $prod_price = $value["product_price"];
                $prod_qty = $value["item_quantity"];
                $prod_total = number_format($value["item_quantity"] * $value["product_price"], 2);
                if (isset($_GET['orders'])) {
                    $res4=mysqli_query($conn,"select * from products where med_name='$prod_name'");
                    while($row4=mysqli_fetch_array($res4)){
                        $medqty=$row4['med_qty'];
                        $newqty=$medqty-$prod_qty;
                        $pid=$row4['pharmacy_id'];
                        echo $newqty;
                        $res3=mysqli_query($conn,"update products set med_qty='$newqty' where med_name='$prod_name'");
                        $res2 = mysqli_query($conn, "insert into orders (cust_id,customer_name,address,order_no,total,item_name,price,qty,total_price,pid) 
                                                        values ('$cid','$name','$addr','$unique','$gr_total','$prod_name','$prod_price','$prod_qty','$prod_total','$pid')");
                    if ($res2) {
                        echo "<script>swal(\"Success\",\"Order Placed Successfully!\", \"success\");</script>";
                        unset($_SESSION['cart']);
                        echo "<meta http-equiv=\"refresh\" content=\"2\">";
                    } else {
                        echo "<script>swal(\"Order Not Placed\",\"We ran into some problem\", \"error\");</script>";
                    }
                    }
                }
            }
        }
        ?>
    </div>
</div>
</body>
</html>
