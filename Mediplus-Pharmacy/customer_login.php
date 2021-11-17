<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
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
        body{
            padding: 8px;
            background-image: url("images/Untitled-3.jpg");
            background-color: rgba(0, 255, 0, 0.3);
        }
        .card{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            width:500px;
            height: 100%;
            margin:100px 580px;
        }
    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){

    $custid=$_POST['email'];
    $custpwd=$_POST['pwd'];
    $sql="Select * from customer where c_email='$custid' and c_password='$custpwd'";
    $res=mysqli_query($conn,$sql);
    $tot=mysqli_num_rows($res);
    if($tot==1){
        $_SESSION['cust_id'] = $custid;
        header('location:dashboard.php');
    }
    else{
        echo "login not ok";
    }

}

?>
<div class="card align-item-center">
    <form class="text-center border border-light p-5" method="post">

        <p class="h2 mb-4">Sign in</p>
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" name="pwd" placeholder="Password">

        <input class="btn btn-danger btn-block my-4" name="submit" type="submit">Sign in</input>
        <p>Not a member?
            <a href="Signup.html">Register</a>
        </p>
    </form>
</div>
</body>
</html>
