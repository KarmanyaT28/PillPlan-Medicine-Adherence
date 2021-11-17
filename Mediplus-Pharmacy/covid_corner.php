<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Covid Corner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image" href="images/icon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
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
        .container-fluid {
            background-color: #936cd4;
            height: 120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
        #mainbody{
            padding: 20px;
        }
        .jumbotron-fluid a, .jumbotron-fluid h1{
    color: white;
}
        .card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 30px;
        }
        a{
    color: white;
}


        .menu-wrapper {
    position: relative;
    max-width: 100%;
            height: 100%;
        margin: 1em auto;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .menu {
    height: 100%;
    / / hide the scroll bar background: #f3f3f3;
            box-sizing: border-box;

            white-space: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .item {
    display: inline-block;
    width: 500px;
            height: 100%;
            padding: 1em;
        }

        .paddles {
}
        .paddle {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 3em;
            background-color: whitesmoke;
            border: none;
            height: 290px;

        }
        .left-paddle {
    left: 0;
}
        .right-paddle {
    right: 0;
}
        .hidden {
    display: none;
}

        span {
    display: inline-block;
    width: 100px;
        }
         df-messenger {
             --df-messenger-bot-message: #878fac;
             --df-messenger-button-titlebar-color: #936cd4;
             --df-messenger-chat-background-color: #fafafa;
             --df-messenger-font-color: white;
             --df-messenger-send-icon: #878fac;
             --df-messenger-user-message: #1DC7EA;
         }
    </style>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
        intent="WELCOME"
        chat-title="MediBot"
        agent-id="e08f473b-d0f7-41ed-b6bc-388d06577fbf"
        language-code="en"
    ></df-messenger>
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
<div class="container-fluid">
    <h4><a style="color: white" href="dashboard.php">Home</a>/<a style="color: lightsteelblue" href="contact.php">Covid Corner</a> </h4>
</div>
<div id="mainbody">
<ul class="nav nav-tabs">
    <li class="active"><a href="#">Daily Precautions</a></li>
    <li><a href="#">Menu 2</a></li>
</ul>
<div class="row">
    <div class="col-md-4">
        <div class="card" style="background-color: #fc727a">
            <h2><a href="#">Myth Busters</a></h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="background-color: #fc727a">
            <h2><a href="#">Travel Advices</a></h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="background-color: #fc727a">
            <h2><a href="#">Daily Preventions</a></h2>
        </div>
    </div>
</div><br>
<h1>Latest Covid News</h1>
<div class="menu-wrapper">
    <ul class="menu">
        <li class="item"><iframe width="460" height="215" src="https://www.youtube.com/embed/391HJQAgzgY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
        <li class="item"><iframe width="460" height="215" src="https://www.youtube.com/embed/i0ZabxXmH4Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
        <li class="item"><iframe width="460" height="215" src="https://www.youtube.com/embed/E5DrVKCmIFU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
        <li class="item"><iframe width="460" height="215" src="https://www.youtube.com/embed/vquaknWJVvA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
        <li class="item"><iframe width="460" height="215" src="https://www.youtube.com/embed/rCH36Cckebg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
    </ul>

    <div class="paddles">
        <button class="left-paddle paddle hidden">
            <
        </button>
        <button class="right-paddle paddle">
            >
        </button>
    </div>
</div>
</div>
<script>

    var scrollDuration = 300;

    var leftPaddle = document.getElementsByClassName('left-paddle');
    var rightPaddle = document.getElementsByClassName('right-paddle');

    var itemsLength = $('.item').length;
    var itemSize = $('.item').outerWidth(true);

    var paddleMargin = 20;


    var getMenuWrapperSize = function() {
    return $('.menu-wrapper').outerWidth();
}
    var menuWrapperSize = getMenuWrapperSize();

    $(window).on('resize', function() {
        menuWrapperSize = getMenuWrapperSize();
    });
    var menuVisibleSize = menuWrapperSize;
    var getMenuSize = function() {
    return itemsLength * itemSize;
};
    var menuSize = getMenuSize();
    var menuInvisibleSize = menuSize - menuWrapperSize;

    var getMenuPosition = function() {
    return $('.menu').scrollLeft();
};
    $('.menu').on('scroll', function() {
        menuInvisibleSize = menuSize - menuWrapperSize;
        var menuPosition = getMenuPosition();

        var menuEndOffset = menuInvisibleSize - paddleMargin;
        if (menuPosition <= paddleMargin) {
            $(leftPaddle).addClass('hidden');
            $(rightPaddle).removeClass('hidden');
        } else if (menuPosition < menuEndOffset) {
            // show both paddles in the middle
            $(leftPaddle).removeClass('hidden');
            $(rightPaddle).removeClass('hidden');
        } else if (menuPosition >= menuEndOffset) {
            $(leftPaddle).removeClass('hidden');
            $(rightPaddle).addClass('hidden');
        }

    });
    $(rightPaddle).on('click', function() {
        $('.menu').animate( { scrollLeft: menuInvisibleSize}, scrollDuration);
    });
    $(leftPaddle).on('click', function() {
        $('.menu').animate( { scrollLeft: '0' }, scrollDuration);
    });
</script>
</body>
</html>