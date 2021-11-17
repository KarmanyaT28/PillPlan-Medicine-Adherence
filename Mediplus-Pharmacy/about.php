<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Colorlib Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container-fluid{
            background-color: #936cd4;
            height:120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
    </style>

</head>

<body>

<div class="site-wrap">
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
        <h5><a style="color: white" href="dashboard.php">Home</a>/<a style="color: lightsteelblue" href="cart.php">Cart</a> </h5>
    </div><br>
    <div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto align-self-center">
                    <div class=" text-center">
                        <h1>About Us</h1>
                        <p> We bring to you an online platform, which can be accessed for all your health needs. We are trying to make healthcare a hassle-free experience for you. Get your allopathic, ayurvedic, homeopathic medicines, vitamins & nutrition supplements and other health-related products delivered at home. Lab tests? That too in the comfort of your home. Doctor consult? Yes, we got that covered too..</p>ˀ
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="block-16">
                        <figure>
                            <img src="images/bg_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                                    class="icon-play"></span></a>

                        </figure>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">How We Started</h2>
                    </div>
                    <p>In healthcare, the information around our medicines and lab tests is either unavailable or incomprehensible to us.
                        So we decided to create a platform that stood for transparent, authentic and accessible information for all.
                        This idea grew into a company in 2020.</p>

                </div>
            </div>
        </div>
    </div>



    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 order-md-2">
                    <div class="block-16">
                        <figure>
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                                    class="icon-play"></span></a>

                        </figure>
                    </div>
                </div>
                <div class="col-md-5 mr-auto">
                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">What we offer</h2>
                    </div>
                    <p class="text-black">We provide accurate, authoritative & trustworthy information on medicines and help people use their medicines effectively and safely.
                        We get medicines and other health products delivered at home from licensed and verified pharmacies.
                        We also provide diagnostic services from certified labs and online doctor consults at any time, from anywhere.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
                    <div class="text">
                        <h2 class="text-info">E- Pharmacy</h2>
                        <h5>We provide various categories of medicines from your nearby pharmacies. Quickest delivery along with widest range of healthcare products</h5>
                    </div>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-image">
                        <img src="images/c3.jpg" width="300px" height="300px">
                    </div>
                    <div class="text">
                        <h2 class="text-info">Your Health Report</h2>
                        <h5>Our website cares for your medicines and more. we care for your health. All medical queries, symptom checker and all q/a answered</h5>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-image">
                        <img src="images/c4.jpg" width="300px" height="300px">
                    </div>
                    <div class="text">
                        <h2 class="text-info">Customer Support</h2>
                        <h5>We also provide customer support services in case of any Information regarding any medicines, detail exlanation regarding the medical test etc.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>


    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>The Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5">

                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/person_1.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">Zeel Desai</h3>
                                <p class="block-38-subheading">Founder</p>
                            </div>
                            <div class="block-38-body">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/joye.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">Joyeeta Dey</h3>
                                <p class="block-38-subheading">Founder</p>
                            </div>
                            <!-- <div class="block-38-body">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
                                 recusandae doloribus ut fugit officia voluptate soluta. </p>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-6 col-lg-6 mb-5">
                         <div class="block-38 text-center">
                           <div class="block-38-img">
                             <div class="block-38-header">
                               <img src="images/person_3.jpg" alt="Image placeholder" class="mb-4">
                               <h3 class="block-38-heading h4">Patrick Marx</h3>
                               <p class="block-38-subheading">Marketing</p>
                             </div>
                             <div class="block-38-body">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
                                 recusandae doloribus ut fugit officia voluptate soluta. </p>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-6 col-lg-6 mb-5">
                         <div class="block-38 text-center">
                           <div class="block-38-img">
                             <div class="block-38-header">
                               <img src="images/person_4.jpg" alt="Image placeholder" class="mb-4">
                               <h3 class="block-38-heading h4">Mike Coolbert</h3>
                               <p class="block-38-subheading">Sales Manager</p>
                             </div>
                             <div class="block-38-body">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
                                 recusandae doloribus ut fugit officia voluptate soluta. </p>
                             </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>
