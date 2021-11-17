<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$cid=$_SESSION['cust_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Substitute Search</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
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
        .jumbotron-fluid a, .jumbotron-fluid h1{
            color: white;
        }
        .medform{
            padding: 30px;
            border:grey 1px solid;
            border-radius: 5px;
        }
        .container{
            padding: 40px;
        }
        h4{
            padding: 10px;
            border-radius: 10px;
            color: white;
            background-color:#1DC7EA ;
        }
        .container-fluid{
            background-color: #936cd4;
            height:120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
        .progress-bar {
            background-color: #936cd4 !important;
        }
    </style>
</head>
<body>
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
    <h5><a style="color: white" href="dashboard.php">Home</a>/<a style="color: lightsteelblue" href="cart.php">Symptopm Checker</a> </h5>
</div><br>
<div class="container">
    <h3>Select Category</h3><br>
    <form method="post" class="medform">
        <div class="row">
            <div class="col-md-8 pr-1">
                <div class="form-group">
                    <label>Main Symptom</label>
                    <select name="category" class="form-control">
                        <option value="fever less than 100.4 F">Fever less than 100.4 F</option>
                        <option value="high fever">High Fever</option>
                        <option value="abd pain">Abdominal Pain</option>
                        <option value="skin problems">Skin Problems</option>
                        <option value="cold and cough">Cold and Cough</option>
                        <option value="vomiting">Vomiting</option>
                        <option value="headache">Headache</option>
                        <option value="muscle cramps">Muscle Cramps</option>
                    </select>
                </div>
                <input class="btn btn-danger" type="submit" name="submit" value="Submit">
            </div>
        </div>
    </form>
    <br><br>
    <?php
    if(isset($_POST['submit'])){
        $category=$_POST['category'];
        ?>
        <h2>More Symptoms</h2><br>
        <h5>Refine Your Symptoms</h5>
        <form method="post" class="medform">
    <?php
        if($category=="fever less than 100.4 F"){
            $res3=mysqli_query($conn,"SELECT symptoms.symptoms, symptoms.id FROM symp_dis_relation LEFT JOIN symptoms on symp_dis_relation.id=symptoms.id WHERE symp_dis_relation.main_symp='$category' group by symptoms.id");
            while ($row3=mysqli_fetch_array($res3)){
                $symptom=$row3['symptoms'];
                $id=$row3['id'];
        ?>
            <input name="symp[]" type="checkbox" value="<?php echo $id?>">
            <label><?php echo $symptom?></label><br>
            <?php
            }
            ?>
            <input class="btn btn-success" type="submit" name="check" value="Submit">
        </form><br>
        <?php
    }
        else {
            echo "no idea";
        }
    }
    ?>
    <h4>Possible Diseases</h4><br><br>
    <?php
    if(isset($_POST['check'])){
        if(isset($_POST['symp'])){
            $symptoms= implode(',', $_POST['symp']);
            $cntarr = explode(",", $symptoms);
            $cnt1 = count($cntarr);
            $res=mysqli_query($conn,"SELECT DISTINCT diseases.disease, symp_dis_relation.id,  symp_dis_relation.dis_id
                                FROM diseases LEFT JOIN symp_dis_relation ON diseases.dis_id = symp_dis_relation.dis_id 
                                WHERE symp_dis_relation.id in ($symptoms) and symp_dis_relation.main_symp='fever less than 100.4 F' GROUP BY diseases.dis_id");
            while ($row = mysqli_fetch_array($res)) {
                $disease_name = $row['disease'];
                $disid=$row['dis_id'];
                $res2=mysqli_query($conn,"Select count(id) FROM symp_dis_relation where symp_dis_relation.dis_id='$disid'");
                while($row2=mysqli_fetch_array($res2)){
                    $cnt=$row2['count(id)'];
                    $accuracy= round(($cnt1*100)/$cnt, 2);?>
                    <h5><?php echo $disease_name?></h5>
                    <div class="progress md-progress" style="height: 20px; width: 25%">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $accuracy?>%; height: 20px" aria-valuenow="<?php echo $accuracy?>" aria-valuemin="0" aria-valuemax="100"><?php echo $accuracy?>%</div>
                    </div>
                    <?php
                }
                ?>
                <br>
    <?php
            }
        }
    }
    ?>
</div>
</body>
</html>