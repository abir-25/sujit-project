<?php include 'config/config.php'; ?>
<?php include 'lib/database.php'; ?>
<?php include 'helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
    <title><?php echo $result['name'];?></title>
    <link rel="shortcut icon" type="image/x-icon" href="admin/<?php echo $result['favicon'];?>">
<?php } } ?>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://kit.fontawesome.com/cfda84e28a.js" crossorigin="anonymous"></script>
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-3 col-8">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                            <img src="admin/<?php echo $result['logo'];?>" alt="logo">
                            <span><?php echo $result['name'];?></span>
<?php } } ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-9 col-4">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <a class="rn-btn" target="_blank" href="https://themeforest.net/checkout/from_item/33188244?license=regular"><span>BUY NOW</span></a>
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                    <a class="logo" href="index.html">
                        <img src="admin/<?php echo $result['logo'];?>" alt="Personal Portfolio">
                        <span><?php echo $result['name'];?></span>
                    </a>
<?php } } ?>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">You will know very soon who I am 😎</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills">
                    <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social Media area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
<?php
    $query = "select * from tbl_social";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $facebook       = $result["facebook"];
            $youtube        = $result["youtube"];
            $instagram      = $result["instagram"];
            $linkedin       = $result["linkedin"];
            $twitter        = $result["twitter"];
            $github         = $result["github"];
            $website        = $result["website"];
            $pinterest      = $result["pinterest"];
            $reddit         = $result["reddit"];
            $tumblr         = $result["tumblr"];
            $google_plus    = $result["google_plus"];
            $twitch         = $result["twitch"];
            $discord        = $result["discord"];
            $vimeo          = $result["vimeo"];

            if($facebook!=""){
?>               
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
<?php } if($youtube!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                        </li>
<?php } if($instagram!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                        </li>
<?php } if($linkedin!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                        </li>
<?php } if($twitter!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                        </li>
<?php } if($github!=""){?>                       
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-github"></i></a>
                        </li>
<?php } if($website!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fas fa-globe"></i></a>
                        </li>
<?php } if($pinterest!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-pinterest-p"></i></a>
                        </li>
<?php } if($reddit!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-reddit-alien"></i></a>
                        </li>
<?php } if($tumblr!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-tumblr"></i></a>
                        </li>
 <?php } if($google_plus!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-google-plus-g"></i></a>
                        </li>
<?php } if($twitch!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-twitch"></i></a>
                        </li>
<?php } if($discord!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-discord"></i></a>
                        </li>
<?php } if($vimeo!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-vimeo-v"></i></a>
                        </li>
<?php } } }?>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->




    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">

                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
<?php
    $query = "select * from tbl_bio";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $bio_name = $result['name'];
            $bio_intro = $result['intro'];
            $bio_image = $result['image'];
?> 
                                    <h1 class="title">Hi, I’m <span><?php echo $bio_name?></span><br>
<?php } } ?>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
<?php
    $query1 = "select * from tbl_profession";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        $i=0;
        while($result1 = $getData1->fetch_assoc()) 
        {
            if($i==0)
            {
?>
                                                    <b class="is-visible"><?php echo $result1['title']?>.</b>
<?php } else {?>
                                                    <b class="is-hidden"><?php echo $result1['title']?>.</b>
<?php } $i++; } } ?>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description"><?php echo $bio_intro?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
<?php
    $query = "select * from tbl_social";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $facebook       = $result["facebook"];
            $youtube        = $result["youtube"];
            $instagram      = $result["instagram"];
            $linkedin       = $result["linkedin"];
            $twitter        = $result["twitter"];
            $github         = $result["github"];
            $website        = $result["website"];
            $pinterest      = $result["pinterest"];
            $reddit         = $result["reddit"];
            $tumblr         = $result["tumblr"];
            $google_plus    = $result["google_plus"];
            $twitch         = $result["twitch"];
            $discord        = $result["discord"];
            $vimeo          = $result["vimeo"];

            if($facebook!=""){
?>               
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
<?php } if($youtube!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                        </li>
<?php } if($instagram!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                        </li>
<?php } if($linkedin!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                        </li>
<?php } if($twitter!=""){?>
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                        </li>
<?php } if($github!=""){?>                       
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-github"></i></a>
                        </li>
<?php } if($website!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fas fa-globe"></i></a>
                        </li>
<?php } if($pinterest!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-pinterest-p"></i></a>
                        </li>
<?php } if($reddit!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-reddit-alien"></i></a>
                        </li>
<?php } if($tumblr!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-tumblr"></i></a>
                        </li>
 <?php } if($google_plus!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-google-plus-g"></i></a>
                        </li>
<?php } if($twitch!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-twitch"></i></a>
                        </li>
<?php } if($discord!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-discord"></i></a>
                        </li>
<?php } if($vimeo!=""){?>  
                        <li class="facebook">
                            <a href="" class="social-icon-link"><i class="fab fa-vimeo-v"></i></a>
                        </li>
<?php } } }?>
                    </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                <li><img src="assets/images/icons/icons-01.png" alt="Icons Images"></li>
                                                <li><img src="assets/images/icons/icons-02.png" alt="Icons Images"></li>
                                                <li><img src="assets/images/icons/icons-03.png" alt="Icons Images"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="admin/<?php echo $bio_image?>" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="menu"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Business Stratagy</a></h4>
                                    <p class="description">I throw myself down among the tall grass by the stream as I
                                        lie close to the earth.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">App Development</a></h4>
                                    <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                        a handful of model sentence.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="tv"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">App Development</a></h4>
                                    <p class="description">I throw myself down among the tall grass by the stream as I
                                        lie close to the earth.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="twitch"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Mobile App</a></h4>
                                    <p class="description">There are many variations of passages of Lorem Ipsum
                                        available, but the majority.
                                    </p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="wifi"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">CEO Marketing</a></h4>
                                    <p class="description">always free from repetition,
                                        injected humour, or non-characteristic words etc.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="slack"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Personal Portfolio April</a></h4>
                                    <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                        a handful of model sentence.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-01.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                600</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">The services provide for design <i
                                                class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-02.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                750</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                            maintain<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-03.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Photoshop</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                630</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Logo design creativity & Application
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-04.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Figma</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                360</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design &
                                            Services<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-05.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Web Design</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                280</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Design for tecnology & services<i
                                                class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-06.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Web Design</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                690</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">App for tecnology & services<i
                                                class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">7+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li>
                        </ul>
                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHOTOSHOT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">100%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">95%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE XD</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">SOFTWARE</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PLUGIN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Company Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
        <!-- Start Testimonia Area  -->
        <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">What Clients Say</span>
                            <h2 class="title">Testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-activation testimonial-pb mb--30">
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/final-home--1st.png" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Rainbow-Themes</span>
                                            <h3 class="title">Nevine Acotanza</h3>
                                            <span class="designation">Chief Operating Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Android App Development</h3>
                                                <span class="date">via Upwork - Mar 4, 2015 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/final-home--2nd.png" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Bound - Trolola</span>
                                            <h3 class="title">Jone Duone Joe</h3>
                                            <span class="designation">Operating Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Web App Development</h3>
                                                <span class="date">Upwork - Mar 4, 2016 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Important fact to nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/final-home--3rd.png" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Glassfisom</span>
                                            <h3 class="title">Nevine Dhawan</h3>
                                            <span class="designation">CEO Of Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Android App Design</h3>
                                                <span class="date">Fiver - Mar 4, 2015 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            No more question for design. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->

                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/final-home--4th.png" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">NCD - Design</span>
                                            <h3 class="title">Mevine Thoda</h3>
                                            <span class="designation">Marketing Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">CEO - Marketing</h3>
                                                <span class="date">Thoda Department - Mar 4, 2018 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Marcent Of Vanice and treatment. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->

                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/final-home--5th.png" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Default name</span>
                                            <h3 class="title">Davei Luace</h3>
                                            <span class="designation">Chief Operating Manager</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Android App Development</h3>
                                                <span class="date">via Upwork - Mar 4, 2015 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            When managment is so important. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonia Area  -->
        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span class="subtitle">Popular Clients</span>
                            <h2 class="title">Awesome Clients</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-Javascript" role="tab" aria-selected="true">JavaScript</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="tab" href="#v-pills-Design" role="tab" aria-selected="true">Product Design</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-wordpress-tab" data-toggle="tab" href="#v-pills-Wordpress" role="tab" aria-selected="true">Wordpress</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-settings-tabs" data-toggle="tab" href="#v-pills-settings" role="tab" aria-selected="true">HTML to React</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-laravel-tabs" data-toggle="tab" href="#v-pills-laravel" role="tab" aria-selected="true">React
                                            To Laravel</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-python-tabs" data-toggle="tab" href="#v-pills-python" role="tab" aria-selected="true">Python</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade" id="v-pills-Javascript" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="v-pills-Design" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-laravel" role="tabpanel" aria-labelledby="v-pills-laravel-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Adon Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smitha Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Sultana Mila</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jannat</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client5.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mila Dus</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="assets/images/client/png/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Marth Smiths</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->
        <!-- Pricing Area -->
        <div class="rn-pricing-area rn-section-gap section-separator" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-5 mb_md--40 mb_sm--40 small-margin-pricing">
                        <div class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                                <div class="section-title text-left">
                                    <span class="subtitle text-center text-lg-left">Pricing</span>
                                    <h2 class="title text-center text-lg-left">My Pricing</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-7">
                        <!-- Pricing Area -->
                        <div class="navigation-wrapper">
                            <ul class="nav " id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-style" id="test-tab" data-toggle="tab" href="#test" role="tab" aria-controls="test" aria-selected="false">Static</a>
                                </li>

                                <li class="nav-item  recommended">
                                    <a class="nav-style active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Standard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-style" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Premium</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade " id="test" role="tabpanel" aria-labelledby="test-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Make Your Single Page</h2>
                                                <span>Elementor</span>
                                            </div>
                                            <div class="header-right">
                                                <span>$30.00</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Page with Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Responsive Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>multipage Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Figma</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>MAintaine Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design With XD</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>8 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Design Make this Page</h2>
                                                <span>Elementor</span>
                                            </div>
                                            <div class="header-right">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                Making this the first true generator on the Internet. It uses a
                                                dictionary & plugin Development.
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Page with Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Responsive Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>multipage Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Figma</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>MAintaine Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design With XD</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>8 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line d-flex">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Customize Your Single Page</h2>
                                                <span>Elementor</span>
                                            </div>
                                            <div class="header-right">
                                                <span>$90.00</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                I will install your desire theme and made like Theme demo and customize
                                                your single page( homepage)
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Page with Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Responsive Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>multipage Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Figma</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>MAintaine Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design With XD</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>8 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line d-flex">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing area -->
        <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2 class="title">My Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/blog/blog-01.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Canada</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">T-shirt design is the part of design
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/blog/blog-02.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 hour read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">The services provide for design <i
                                        class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/blog/blog-03.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 5 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                            maintain<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Nevine Acotanza</h4>
                                <span>Chief Operating Officer</span>
                            </div>
                            <div class="description">
                                <p>I am available for freelance work. Connect with me via and call in to my account.
                                </p>
                                <span class="phone">Phone: <a href="tel:01941043264">+01234567890</a></span>
                                <span class="mail">Email: <a href="mailto:admin@example.com">admin@example.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                        
<?php
    $query = "select * from tbl_social";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $facebook       = $result["facebook"];
            $youtube        = $result["youtube"];
            $instagram      = $result["instagram"];
            $linkedin       = $result["linkedin"];
            $twitter        = $result["twitter"];
            $github         = $result["github"];
            $website        = $result["website"];
            $pinterest      = $result["pinterest"];
            $reddit         = $result["reddit"];
            $tumblr         = $result["tumblr"];
            $google_plus    = $result["google_plus"];
            $twitch         = $result["twitch"];
            $discord        = $result["discord"];
            $vimeo          = $result["vimeo"];

            if($facebook!=""){
?>               
                       
                            <a href="" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                        
<?php } if($youtube!=""){?>
                        
                            <a href="" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                       
<?php } if($instagram!=""){?>
                        
                            <a href="" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                        
<?php } if($linkedin!=""){?>
                        
                            <a href="" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                        
<?php } if($twitter!=""){?>
                        
                            <a href="" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                       
<?php } if($github!=""){?>                       
                        
                            <a href="" class="social-icon-link"><i class="fab fa-github"></i></a>
                        
<?php } if($website!=""){?>  
                    
                            <a href="" class="social-icon-link"><i class="fas fa-globe"></i></a>
                        
<?php } if($pinterest!=""){?>  
                        
                            <a href="" class="social-icon-link"><i class="fab fa-pinterest-p"></i></a>
                        
<?php } if($reddit!=""){?>  
                        
                            <a href="" class="social-icon-link"><i class="fab fa-reddit-alien"></i></a>
                        
<?php } if($tumblr!=""){?>  
                       
                            <a href="" class="social-icon-link"><i class="fab fa-tumblr"></i></a>
                        
 <?php } if($google_plus!=""){?>  
                       
                            <a href="" class="social-icon-link"><i class="fab fa-google-plus-g"></i></a>
                        
<?php } if($twitch!=""){?>  
                        
                            <a href="" class="social-icon-link"><i class="fab fa-twitch"></i></a>
                        
<?php } if($discord!=""){?>  
                       
                            <a href="" class="social-icon-link"><i class="fab fa-discord"></i></a>

<?php } if($vimeo!=""){?>  
                            <a href="" class="social-icon-link"><i class="fab fa-vimeo-v"></i></a>
<?php } } }?>
                    </ul>
                                    <!-- <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="linkedin"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="mail.php">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> App Design Development.
                                    </h3>
                                    <p class="mb--30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio assumenda explicabo veniam temporibus eligendi.</p>
                                    <p>Consectetur adipisicing elit. Cupiditate distinctio assumenda. dolorum alias suscipit rerum maiores aliquam earum odit, nihil culpa quas iusto hic minus!</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <a href="#" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="assets/images/blog/blog-big-01.jpg" alt="news modal" class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date">2 May, 2021</span>
                            <h2 class="title">Digital Marketo to Their New Office.</h2>
                            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                facer
                                possim assum.
                                Typi non
                                habent claritatem insitam; est usus legentis in iis qui facit eorum
                                claritatem.
                                Investigationes
                                demonstraverunt
                                lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                dynamicus, qui
                                sequitur
                                mutationem consuetudium lectorum.</p>
                            <h4>Nobis eleifend option conguenes.</h4>
                            <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                                posuere
                                massa nunc quis
                                dui.
                                Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                                nisi.
                                Curabitur sit
                                amet
                                suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                                imperdiet risus
                                leo,
                                in rutrum erat dignissim id.</p>
                            <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                                Class aptent
                                taciti sociosqu
                                ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                                nisi
                                tortor. Morbi
                                leo
                                nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                                bibendum. Morbi
                                nec
                                efficitur ex.</p>
                            <h4>Mauris tempor, orci id pellentesque.</h4>
                            <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                                dapibus dignissim.
                                Pellentesque
                                quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                                rhoncus dolor, a
                                facilisis
                                neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                                tristique.
                                Nullam in
                                aliquam
                                diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                                efficitur
                                sollicitudin
                                auctor.
                                Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                                et.</p>
                        </div>

                        <!-- Comment Section Area Start -->
                        <div class="comment-inner">
                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group"><input type="text" placeholder="Name">
                                        </div>
                                        <div class="rnform-group"><input type="email" placeholder="Email">
                                        </div>
                                        <div class="rnform-group"><input type="text" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group">
                                            <textarea placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

        <!-- Start Right Demo  -->
        <div class="rn-right-demo">
            <button class="demo-button">
                <span class="text">Demos</span>
            </button>
        </div>
        <!-- End Right Demo  -->

        <!-- Start Modal Area  -->
        <div class="demo-modal-area">
            <div class="wrapper">
                <div class="close-icon">
                    <button class="demo-close-btn"><span class="feather-x"></span></button>
                </div>
                <div class="rn-modal-inner">
                    <div class="demo-top text-center">
                        <h4 class="title">Customised</h4>
                        <p class="subtitle">Its a personal portfolio template. You can built any personal website easily.</p>
                    </div>

                    <ul class="popuptab-area nav nav-tabs" id="popuptab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active demo-dark" id="demodark-tab" data-toggle="tab" href="#demodark" role="tab" aria-controls="demodark" aria-selected="true">Dark Demo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link demo-light" id="demolight-tab" data-toggle="tab" href="#demolight" role="tab" aria-controls="demolight" aria-selected="false">Light Demo</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="popuptabContent">
                        <div class="tab-pane show active" id="demodark" role="tabpanel" aria-labelledby="demodark-tab">
                            <div class="content">
                                <div class="row">

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index.html">
                                                        <img class="w-100" src="assets/images/demo/main-demo.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index.html">Main Demo</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-technician.html">
                                                        <img class="w-100" src="assets/images/demo/index-technician.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-technician.html">Technician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-model.html">
                                                        <img class="w-100" src="assets/images/demo/home-model-v2.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-model.html">Model</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-consulting.html">
                                                        <img class="w-100" src="assets/images/demo/home-consulting.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-consulting.html">Consulting</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="fashion-designer.html">
                                                        <img class="w-100" src="assets/images/demo/fashion-designer.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="fashion-designer.html">Fashion Designer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-developer.html">
                                                        <img class="w-100" src="assets/images/demo/developer.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-developer.html">Developer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="instructor-fitness.html">
                                                        <img class="w-100" src="assets/images/demo/instructor-fitness.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="instructor-fitness.html">Fitness Instructor</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->
                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-web-Developer.html">
                                                        <img class="w-100" src="assets/images/demo/home-model.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-web-Developer.html">Web Developer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-designer.html">
                                                        <img class="w-100" src="assets/images/demo/home-video.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-designer.html">Designer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-content-writer.html">
                                                        <img class="w-100" src="assets/images/demo/text-rotet.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-content-writer.html">Content Writter</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-instructor.html">
                                                        <img class="w-100" src="assets/images/demo/index-boxed.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-instructor.html">Instructor</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-freelancer.html">
                                                        <img class="w-100" src="assets/images/demo/home-sticky.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-freelancer.html">Freelancer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-photographer.html">
                                                        <img class="w-100" src="assets/images/demo/index-bg-image.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-photographer.html">Photographer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-politician.html">
                                                        <img class="w-100" src="assets/images/demo/front-end.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-politician.html">Politician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo coming-soon">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/demo/coming-soon.png" alt="Personal Portfolio">
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="#">Accountant</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="demolight" role="tabpanel" aria-labelledby="demolight-tab">
                            <div class="content">
                                <div class="row">

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/main-demo-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-white-version.html">Main Demo</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-technician-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/index-technician-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-technician-white-version.html">Technician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-2">
                                                <div class="thumbnail">
                                                    <a href="index-model-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/home-model-v2-white.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-model-white-version.html">Model</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-consulting-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/home-consulting-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-consulting-white-version.html">Consulting</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="fashion-designer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/fashion-designer-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="fashion-designer-white-version.html">Fashion Designer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-developer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/developer-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-developer-white-version.html">Developer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->
                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="instructor-fitness-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/instructor-fitness-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="instructor-fitness-white-version.html">Fitness Instructor</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->
                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner badge-1">
                                                <div class="thumbnail">
                                                    <a href="home-web-developer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/home-model-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-web-developer-white-version.html">Web Developer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-designer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/home-video-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-designer-white-version.html">Designer</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-content-writer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/text-rotet-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-content-writer-white-version.html">Content
                                                            Writter</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-instructor-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/index-boxed-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-instructor-white-version.html">Instructor</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-freelancer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/home-sticky-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-freelancer-white-version.html">Freelancer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="home-photographer-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/index-bg-image-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-photographer-white-version.html">Photographer</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="index-politician-white-version.html">
                                                        <img class="w-100" src="assets/images/demo/front-end-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-politician-white-version.html">Politician</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                    <!-- Start Single Content  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-demo coming-soon">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/demo/coming-soon.png" alt="Personal Portfolio">
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="#">Accountant</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Content  -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area  -->

    </main>

    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                        <div class="logo footer-logo">
                            <a href="index.html" class="footer-logo-link">
                                <img src="admin/<?php echo $result['logo'];?>" alt="logo">
                                <span><?php echo $result['name'];?></span>
                            </a>
                        </div>

                        <p class="description mt--30"><?php echo $result['copyright'];?></p>
<?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>