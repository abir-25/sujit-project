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
                        <a href="index.php">
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
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#testimonial">Testimonial</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <!-- <a class="rn-btn" target="_blank" href="https://themeforest.net/checkout/from_item/33188244?license=regular"><span>BUY NOW</span></a> -->
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
                    <a class="logo" href="index.php">
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
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#testimonial">Testimonial</a></li>
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
                            <a href="<?php echo $facebook; ?>" target="_blank" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
<?php } if($youtube!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $youtube; ?>" target="_blank" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                        </li>
<?php } if($instagram!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $instagram; ?>" target="_blank" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                        </li>
<?php } if($linkedin!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $linkedin; ?>" target="_blank" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                        </li>
<?php } if($twitter!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $twitter; ?>" target="_blank" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                        </li>
<?php } if($github!=""){?>                       
                        <li class="facebook">
                            <a href="<?php echo $github; ?>" target="_blank" class="social-icon-link"><i class="fab fa-github"></i></a>
                        </li>
<?php } if($website!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $website; ?>" target="_blank" class="social-icon-link"><i class="fas fa-globe"></i></a>
                        </li>
<?php } if($pinterest!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $pinterest; ?>" target="_blank" class="social-icon-link"><i class="fab fa-pinterest-p"></i></a>
                        </li>
<?php } if($reddit!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $reddit; ?>" target="_blank" class="social-icon-link"><i class="fab fa-reddit-alien"></i></a>
                        </li>
<?php } if($tumblr!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $tumblr; ?>" target="_blank" class="social-icon-link"><i class="fab fa-tumblr"></i></a>
                        </li>
 <?php } if($google_plus!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $google_plus; ?>" target="_blank" class="social-icon-link"><i class="fab fa-google-plus-g"></i></a>
                        </li>
<?php } if($twitch!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $twitch; ?>" target="_blank" class="social-icon-link"><i class="fab fa-twitch"></i></a>
                        </li>
<?php } if($discord!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $discord; ?>" target="_blank" class="social-icon-link"><i class="fab fa-discord"></i></a>
                        </li>
<?php } if($vimeo!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $vimeo; ?>" target="_blank" class="social-icon-link"><i class="fab fa-vimeo-v"></i></a>
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
                            <a href="<?php echo $facebook; ?>" target="_blank" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
<?php } if($youtube!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $youtube; ?>" target="_blank" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                        </li>
<?php } if($instagram!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $instagram; ?>" target="_blank" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                        </li>
<?php } if($linkedin!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $linkedin; ?>" target="_blank" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                        </li>
<?php } if($twitter!=""){?>
                        <li class="facebook">
                            <a href="<?php echo $twitter; ?>" target="_blank" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                        </li>
<?php } if($github!=""){?>                       
                        <li class="facebook">
                            <a href="<?php echo $github; ?>" target="_blank" class="social-icon-link"><i class="fab fa-github"></i></a>
                        </li>
<?php } if($website!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $website; ?>" target="_blank" class="social-icon-link"><i class="fas fa-globe"></i></a>
                        </li>
<?php } if($pinterest!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $pinterest; ?>" target="_blank" class="social-icon-link"><i class="fab fa-pinterest-p"></i></a>
                        </li>
<?php } if($reddit!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $reddit; ?>" target="_blank" class="social-icon-link"><i class="fab fa-reddit-alien"></i></a>
                        </li>
<?php } if($tumblr!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $tumblr; ?>" target="_blank" class="social-icon-link"><i class="fab fa-tumblr"></i></a>
                        </li>
 <?php } if($google_plus!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $google_plus; ?>" target="_blank" class="social-icon-link"><i class="fab fa-google-plus-g"></i></a>
                        </li>
<?php } if($twitch!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $twitch; ?>" target="_blank" class="social-icon-link"><i class="fab fa-twitch"></i></a>
                        </li>
<?php } if($discord!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $discord; ?>" target="_blank" class="social-icon-link"><i class="fab fa-discord"></i></a>
                        </li>
<?php } if($vimeo!=""){?>  
                        <li class="facebook">
                            <a href="<?php echo $vimeo; ?>" target="_blank" class="social-icon-link"><i class="fab fa-vimeo-v"></i></a>
                        </li>
<?php } } }?>
                    </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
<?php
    $query1 = "select * from tbl_skills";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>                                
                                                <li><img src="admin/<?php echo $result1['icon']; ?>" alt="Icons Images"></li>
<?php } } ?>
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
<?php
    $query1 = "select * from tbl_section_title where id='1'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>         
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">
<?php
    $query1 = "select * from tbl_feature";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        $duration=500;
        $delay=100;
        while($result1 = $getData1->fetch_assoc()) 
        {
            $delay=$delay+100;
            $duration=$duration+100;
?>   
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <img src="admin/<?php echo $result1['icon']; ?>" alt="">
                                    <!-- <i data-feather="menu"></i> -->
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#"><?php echo $result1['title']; ?></a></h4>
                                    <p class="description feature-description"><?php echo $result1['description']; ?></p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="<?php echo $result1['work_link']; ?>" target="_blank"></a>
                        </div>
                   </div>
<?php } } ?>
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
<?php
    $query1 = "select * from tbl_section_title where id='2'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>        
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
<?php
    $query1 = "select * from tbl_portfolio";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        $delay=100;
        while($result1 = $getData1->fetch_assoc()) 
        {
            $delay=$delay+100;
            $id= $result1['id'];
?>   
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#portfolioModal_<?php echo $id; ?>">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="admin/<?php echo $result1['image']; ?>" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)"><?php echo $result1['title']; ?></a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)" target="_blank"><?php echo $result1['long_title']; ?><i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Portfolio Body area Start -->
                    <div class="modal fade" id="portfolioModal_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                    <img class="w-100" src="admin/<?php echo $result1['image']; ?>" alt="slide">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="text-content">
                                                <h3>
                                                    <span><?php echo $result1['title']; ?></span> <?php echo $result1['long_title']; ?>
                                                </h3>
                                                <p class="mb--30"><?php echo $result1['description']; ?></p>
                                                <div class="button-group mt--20">
                                               
                                                    <a href="<?php echo $result1['work_link']; ?>" class="rn-btn">
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
<?php } } ?>
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
<?php
    $query1 = "select * from tbl_section_title where id='3'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>        
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>    
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">academic qualification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">job experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">Training Summary</a>
                            </li>
                        </ul>
                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
<?php
    $query_edu = "select max(countt) as countt from tbl_education";
    $getData = $db->select($query_edu);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $num = $result['countt'];
        }
    }
?>
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <h4 class="maintitle">Academic Qualification</h4>
                                                <div class="experience-list">
<?php
    if($num%2==0){
        $num1 = $num/2;
        $num2 = $num1;
    }
    else{
        $num1 = intval($num/2) + 1;
        $num2 = $num-$num1;
    }
    $query1 = "select * from tbl_education limit $num1";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $gpa = $result1['gpa'];
            if($gpa==""){
                $gpa = "Pursuing";
            }
            $year_out = $result1['year_out'];
            if($year_out==0){
                $year_out = "Present";
            }
?>        
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?php echo $result1['degree']; ?></h4>
                                                                    <span><?php echo $result1['title']; ?> (<?php echo $result1['year_in']; ?> - <?php echo $year_out; ?>)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span><?php echo $gpa; ?>/<?php echo $result1['gpa_outof']; ?></span>
                                                                </div>
                                                            </div>
                                                            <p class="description"><?php echo $result1['achievement']; ?></p>
                                                        </div>
                                                    </div>
<?php } } ?>                                                    
                                                    <!-- End Single List  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                            <h4 class="maintitle" style="color: transparent">Job Experience</h4>
                                            <h4 class="maintitle"></h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
<?php
    $query1 = "select * from tbl_education where countt>$num1 limit $num2";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $gpa = $result1['gpa'];
            if($gpa==""){
                $gpa = "Pursuing";
            }
            $year_out = $result1['year_out'];
            if($year_out==0){
                $year_out = "Present";
            }
?>  
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?php echo $result1['degree']; ?></h4>
                                                                    <span><?php echo $result1['title']; ?> (<?php echo $result1['year_in']; ?> - <?php echo $year_out; ?>)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span><?php echo $gpa; ?>/<?php echo $result1['gpa_outof']; ?></span>
                                                                </div>
                                                            </div>
                                                            <p class="description"><?php echo $result1['achievement']; ?></p>
                                                        </div>
                                                    </div>
<?php } } ?>
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
                                            
                                                    <h4 class="maintitle">Design Skill</h4>
<?php
    $query_sk = "select * from tbl_prof_skills where type='1'";
    $getData = $db->select($query_sk);
    if($getData)
    {
        $duration = 0.4;
        $delay = 0.2;
        while($result = $getData->fetch_assoc()) 
        {
            $duration = $duration+0.1;
            $delay    = $delay+0.1;
?>  
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6"><?php echo $result['title']; ?></h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="<?php echo $duration;?>s" data-wow-delay="<?php echo $delay;?>s" role="progressbar" style="width: <?php echo $result['percentage']; ?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label"><?php echo $result['percentage']; ?>%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->
<?php } } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                         
                                                    <h4 class="maintitle">Development Skill</h4>
<?php
    $query_sk = "select * from tbl_prof_skills where type='2'";
    $getData = $db->select($query_sk);
    if($getData)
    {
        $duration = 0.4;
        $delay = 0.2;
        while($result = $getData->fetch_assoc()) 
        {
            $duration = $duration+0.1;
            $delay    = $delay+0.1;
?>  
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6"><?php echo $result['title']; ?></h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="<?php echo $duration;?>s" data-wow-delay="<?php echo $delay;?>s" role="progressbar" style="width: <?php echo $result['percentage']; ?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label"><?php echo $result['percentage']; ?>%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->
<?php } } ?>
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
<?php
    $query_edu = "select max(countt) as countt from tbl_job_exp";
    $getData = $db->select($query_edu);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $num = $result['countt'];
        }
    }
?>
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">
<?php
    if($num%2==0){
        $num1 = $num/2;
        $num2 = $num1;
    }
    else{
        $num1 = intval($num/2) + 1;
        $num2 = $num-$num1;
    }
    $query1 = "select * from tbl_job_exp limit $num1";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $year_out = $result1['year_out'];
            if($year_out==0){
                $year_out = "Present";
            }
?>    
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?php echo $result1['designation']; ?></h4>
                                                                    <span><?php echo $result1['company']; ?> (<?php echo $result1['year_in']; ?> - <?php echo $year_out; ?>)</span>
                                                                </div>
                                                             
                                                            </div>
                                                            <p class="description"><?php echo $result1['responsibility']; ?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
<?php } } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                            <h4 class="maintitle" style="color: transparent">Job Experience</h4>
                                                <div class="experience-list">
<?php
    $query1 = "select * from tbl_job_exp where countt>$num1 limit $num2";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $year_out = $result1['year_out'];
            if($year_out==0){
                $year_out = "Present";
            }
?>  
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?php echo $result1['designation']; ?></h4>
                                                                    <span><?php echo $result1['company']; ?> (<?php echo $result1['year_in']; ?> - <?php echo $year_out; ?>)</span>
                                                                </div>
                                                             
                                                            </div>
                                                            <p class="description"><?php echo $result1['responsibility']; ?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
<?php } } ?>
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
<?php
    $query_edu = "select max(countt) as countt from tbl_training";
    $getData = $db->select($query_edu);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $num = $result['countt'];
        }
    }
?>
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                 <h4 class="maintitle">Training Summary</h4>
                                                <div class="experience-list">
<?php
    if($num%2==0){
        $num1 = $num/2;
        $num2 = $num1;
    }
    else{
        $num1 = intval($num/2) + 1;
        $num2 = $num-$num1;
    }
    $query1 = "select * from tbl_training limit $num1";
    $getData1 = $db->select($query1);
    if($getData1)
    {   
        $delayy = 100;
        while($result1 = $getData1->fetch_assoc()) 
        {
            $delayy = $delayy+200;
?>    
                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="<?php echo $delayy; ?>" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title training-title">
                                                                    <h4><?php echo $result1['title']; ?></h4>
                                                                    <span><?php echo $result1['institute']; ?> (<?php echo $result1['year_out']; ?>)</span>
                                                                </div>
                                                                <div class="date-of-time duration-div">
                                                                    <span><?php echo $result1['duration']; ?> Hours</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"><?php echo $result1['achievement']; ?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
<?php } } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <h4 class="maintitle"style="color:transparent">Job Experience</h4>
                                                <div class="experience-list">
 <?php
    $query1 = "select * from tbl_training where countt>$num1 limit $num2";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        $delay = 300;
        while($result1 = $getData1->fetch_assoc()) 
        {
            $delay = $delay+200;
?>  
                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title training-title">
                                                                    <h4><?php echo $result1['title']; ?></h4>
                                                                    <span><?php echo $result1['institute']; ?> (<?php echo $result1['year_out']; ?>)</span>
                                                                </div>
                                                                <div class="date-of-time duration-div">
                                                                    <span><?php echo $result1['duration']; ?> Hours</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"><?php echo $result1['achievement']; ?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
<?php } } ?>
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
        <div class="rn-testimonial-area rn-section-gap add-review-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
<?php
    $query1 = "select * from tbl_section_title where id='4'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>        
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
<?php
    $query1 = "select * from tbl_testimonial where status=1";
    $getData1 = $db->num_rows($query1);
    if($getData1)
    {
?>    
                        <div class="testimonial-activation testimonial-pb mb--30">
<?php
    $query1 = "select * from tbl_testimonial where status=1";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $date = $fm->formatDate($result1['review_date']);
            $point = $result1['point'];
?>    
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="<?php echo $result1['image']; ?>" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10"><?php echo $result1['company']; ?></span>
                                            <h3 class="title"><?php echo $result1['name']; ?></h3>
                                            <span class="designation"><?php echo $result1['designation']; ?></span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title"><?php echo $result1['subject']; ?></h3>
                                                <span class="date">via <?php echo $result1['market']; ?> - <?php echo $date; ?></span>
                                            </div>
                                            <div class="rating">
<?php
    for($j=1; $j<=$point ; $j++)
    {
?>
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
<?php } ?>
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            <?php echo $result1['description']; ?>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--End Single testiminail -->
<?php } } ?>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-review-div">
            <a href="" data-toggle="modal" data-target="#review_modal">Add Review</a>  
        </div>

        <!-- Start Review Form Modal -->
        <div class="modal fade" id="review_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i data-feather="x"></i></span>
                            </button>
                   
                    </div>
 <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name  = mysqli_real_escape_string($db->link1, $_POST['name']);
        $company  = mysqli_real_escape_string($db->link1, $_POST['company']);
		$designation  = mysqli_real_escape_string($db->link1, $_POST['designation']);
		$subject  = mysqli_real_escape_string($db->link1, $_POST['subject']);
        $point  = mysqli_real_escape_string($db->link1, $_POST['point']);
        $market  = mysqli_real_escape_string($db->link1, $_POST['market']);
        $description  = mysqli_real_escape_string($db->link1, $_POST['description']);

		$permitted  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "admin/upload/testimonial/".$unique_image;	

        if (in_array($file_ext, $permitted) === false) 
        {
            echo "<span class='error'>You can upload only:-".implode(', ', $permitted)."</span>";
        } 
        else
        {	
            move_uploaded_file($file_temp, $uploaded_image);

            $query = "INSERT INTO tbl_testimonial(name, company, designation, subject, point, market, image, description) VALUES('$name','$company','$designation', '$subject', '$point', '$market', '$uploaded_image', '$description')";

            $inserted_rows = $db->insert($query);
            if (!$inserted_rows) 
            {
                echo "<span class='error'>Data Not Inserted !!</span>";
            }
            else{
		        echo "<script>window.location = 'index.php'; </script>"; 
            }

        }
	}
?>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 px-4">
                                <div class="input-field">
                                    <input type="text" name="name" id="" placeholder="Enter Your Name">
                                    
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' name="image" onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image"><span class="remove-span">Remove</span>  <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                        </div>

                                    <!-- <input type="file" name="image" id="file" class="inputFile"> -->
                                    <input type="text" name="company" id="" placeholder="Enter Your Company Name">
                                    <input type="text" name="designation" id="" placeholder="Enter Your Designation">
                                </div>
                            </div>

                            <div class="col-lg-6 px-4">
                                <div class="input-field">
                                    <input type="text" name="subject" id="" placeholder="Enter Review Topic">
                                    <input type="text" name="market" id="" placeholder="Enter Marketplace Name. e.g.Fiberr, Upwork">
                                    <textarea name="description" id="" cols="30" rows="10" placeholder="Enter Your Review"></textarea>
                                    <input type="text" name="point" id="" placeholder="Enter Rating Point (1-5)">
                                </div>
                                
                                <div class="button-group mt--15 button-area">

                                   
                                    <button type="submit" class="rn-btn submit-button">
                                        <span>Submit Review</span>
                                    </button>        
                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </form>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Review Form Modal -->


        <!-- End Testimonia Area  -->
        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
<?php
    $query1 = "select * from tbl_section_title where id='5'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>        
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>                               
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">
<?php
    $query1 = "select topic_id from tbl_client GROUP BY topic_id limit 1";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $topic_id = $result1['topic_id'];

            $query2 = "select * from tbl_topic where id='$topic_id'";
            $getData2 = $db->select($query2);
            if($getData2)
            {
                while($result2 = $getData2->fetch_assoc()) 
                {
                    $topic = $result2['title'];
                }
            }
?>  
                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-<?php echo $topic_id; ?>-tab" data-toggle="tab" href="#v-pills-<?php echo $topic_id; ?>" role="tab" aria-selected="true"><?php echo $topic; ?></a>
                                    </li>
<?php } } ?>

<?php
    $query3 = "select topic_id from tbl_client where topic_id!='$topic_id' GROUP BY topic_id";
    $getData3 = $db->select($query3);
    if($getData3)
    {
        while($result3 = $getData3->fetch_assoc()) 
        {
            $topic_id2 = $result3['topic_id'];

            $query4 = "select * from tbl_topic where id='$topic_id2'";
            $getData4 = $db->select($query4);
            if($getData4)
            {
                while($result4 = $getData4->fetch_assoc()) 
                {
                    $topic1 = $result4['title'];
                }
            }
?>  
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-<?php echo $topic_id2; ?>-tab" data-toggle="tab" href="#v-pills-<?php echo $topic_id2; ?>" role="tab" aria-selected="true"><?php echo $topic1; ?></a>
                                    </li>
 <?php } } ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">
<?php
    $query5 = "select topic_id from tbl_client GROUP BY topic_id limit 1";
    $getData5 = $db->select($query5);
    if($getData5)
    {
        while($result5 = $getData5->fetch_assoc()) 
        {
            $topic_id3 = $result5['topic_id'];
?>  
                                    <div class="tab-pane fade show active" id="v-pills-<?php echo $topic_id3; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $topic_id3; ?>-tab">
                                        <div class="client-card">
<?php
    $query6 = "select * from tbl_client where topic_id='$topic_id3'";
    $getData6 = $db->select($query6);
    if($getData6)
    {
        while($result6 = $getData6->fetch_assoc()) 
        { 
?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="admin/<?php echo $result6['logo']; ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"><?php echo $result6['name']; ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
<?php } } ?>
                                        </div>
                                    </div>
<?php } } ?>

<?php
    $query7 = "select topic_id from tbl_client where topic_id!='$topic_id3' GROUP BY topic_id";
    $getData7 = $db->select($query7);
    if($getData7)
    {
        while($result7 = $getData7->fetch_assoc()) 
        {
            $topic_id4 = $result7['topic_id'];
?>  
                                    <div class="tab-pane fade" id="v-pills-<?php echo $topic_id4; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $topic_id4; ?>-tab">
                                        <div class="client-card">

<?php
    $query8 = "select * from tbl_client where topic_id='$topic_id4'";
    $getData8 = $db->select($query8);
    if($getData8)
    {
        while($result8 = $getData8->fetch_assoc()) 
        {
?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="admin/<?php echo $result8['logo']; ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"><?php echo $result8['name']; ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
<?php } } ?>
                                        </div>
                                    </div>

<?php } } ?>
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
 <?php
    $query1 = "select * from tbl_section_title where id='6'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>        
                            <span class="subtitle text-center text-lg-left"><?php echo $result1['subtitle']; ?></span>
                             <h2 class="title text-center text-lg-left"><?php echo $result1['title']; ?></h2>
<?php } }?>        
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-7">
                        <!-- Pricing Area -->
                        <div class="navigation-wrapper">
                            <ul class="nav " id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-style" id="static-tab" data-toggle="tab" href="#static" role="tab" aria-controls="static" aria-selected="false">Static</a>
                                </li>

                                <li class="nav-item  recommended">
                                    <a class="nav-style active" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true">Standard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-style" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="false">Premium</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
<?php
    $query1 = "select * from tbl_pricing where type='1'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>     
                                <div class="tab-pane fade " id="static" role="tabpanel" aria-labelledby="static-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title"><?php echo $result1['title']; ?></h2>
                                                <span><?php echo $result1['subtitle']; ?></span>
                                            </div>
 <?php
    $query2 = "select * from tbl_price_format";
    $getData2 = $db->select($query2);
    if($getData2)
    {
        while($result2 = $getData2->fetch_assoc()) 
        {
            if($result2['type']==1)
                $price_format = "৳";
            else
                $price_format = "$";
        }
    }
?>                                              
                                            <div class="header-right">
                                                <span>
                                                    <?php echo $price_format.$result1['price']; ?></span>
                                            </div>

                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                            <?php echo $result1['description']; ?>
                                            </p>
<?php
    $query_price = "select count(id) as count_id from tbl_pricing_point where type_1='1'";
    $getData = $db->select($query_price);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $num = $result['count_id'];
        }
    }
?>
                                            <div class="check-wrapper">
                                                <div class="left-area">
<?php
    if($num%2==0){
        $num1 = $num/2;
        $num2 = $num1;
    }
    else{
        $num1 = intval($num/2) + 1;
        $num2 = $num-$num1;
    }
    $query3 = "select * from tbl_pricing_point where type_1='1' limit $num1";
    $getData3 = $db->select($query3);
    if($getData3)
    {
        while($result3 = $getData3->fetch_assoc()) 
        {
            $point_id = $result3['id'];
?>        
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p><?php echo $result3['title']; ?></p>
                                                    </div>
<?php } } ?>
                                                </div>
                                                <div class="right-area">
<?php
    $query4 = "select * from tbl_pricing_point where type_1='1' and id>$point_id limit $num2";
    $getData4 = $db->select($query4);
    if($getData4)
    {
        while($result4 = $getData4->fetch_assoc()) 
        {

?>  
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p><?php echo $result4['title']; ?></p>
                                                    </div>
<?php } } ?>
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
                                                    <span><?php echo $result1['duration']; ?> Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revision</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
<?php } } ?>
                                <div class="tab-pane fade show active" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                    <!-- Pricing Start -->
<?php
    $query1 = "select * from tbl_pricing where type='2'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>     
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title"><?php echo $result1['title']; ?></h2>
                                                <span><?php echo $result1['subtitle']; ?></span>
                                            </div>
                                            <div class="header-right">
                                                <span><?php echo $price_format.$result1['price']; ?></span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                <?php echo $result1['description']; ?>
                                            </p>
<?php
    $query_price = "select count(id) as count_id from tbl_pricing_point where type_2='1'";
    $getData = $db->select($query_price);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $num = $result['count_id'];
        }
    }
?>
                                            <div class="check-wrapper">
                                                <div class="left-area">
<?php
    if($num%2==0){
        $num1 = $num/2;
        $num2 = $num1;
    }
    else{
        $num1 = intval($num/2) + 1;
        $num2 = $num-$num1;
    }
    $query3 = "select * from tbl_pricing_point where type_2='1' limit $num1";
    $getData3 = $db->select($query3);
    if($getData3)
    {
        while($result3 = $getData3->fetch_assoc()) 
        {
            $point_id = $result3['id'];
?>                                                           
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p><?php echo $result3['title']; ?></p>
                                              </div>
<?php } } ?>  
                                                </div>
                                                <div class="right-area">
<?php
    $query4 = "select * from tbl_pricing_point where type_2='1' and id>$point_id limit $num2";
    $getData4 = $db->select($query4);
    if($getData4)
    {
        while($result4 = $getData4->fetch_assoc()) 
        {

?>  
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p><?php echo $result4['title']; ?></p>
                                                    </div>
<?php } } ?> 
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
                                                    <span><?php echo $result1['duration']; ?> Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revision</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
<?php } } ?>
                                </div>

                                <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                    <!-- Pricing Start -->
<?php
    $query1 = "select * from tbl_pricing where type='3'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>     
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title"><?php echo $result1['title']; ?></h2>
                                                <span><?php echo $result1['subtitle']; ?></span>
                                            </div>
                                            <div class="header-right">
                                                <span><?php echo $price_format.$result1['price']; ?></span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                <?php echo $result1['description']; ?>
                                            </p>
<?php
    $query_price = "select count(id) as count_id from tbl_pricing_point where type_3='1'";
    $getData = $db->select($query_price);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
            $num = $result['count_id'];
        }
    }
?>
                                            <div class="check-wrapper">
                                                <div class="left-area">
<?php
    if($num%2==0){
        $num1 = $num/2;
        $num2 = $num1;
    }
    else{
        $num1 = intval($num/2) + 1;
        $num2 = $num-$num1;
    }
    $query3 = "select * from tbl_pricing_point where type_3='1' limit $num1";
    $getData3 = $db->select($query3);
    if($getData3)
    {
        while($result3 = $getData3->fetch_assoc()) 
        {
            $point_id = $result3['id'];
?>        
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p><?php echo $result3['title']; ?></p>
                                                    </div>
<?php } } ?>
                                                </div>
                                                <div class="right-area">
<?php
    $query4 = "select * from tbl_pricing_point where type_3='1' and id>$point_id limit $num2";
    $getData4 = $db->select($query4);
    if($getData4)
    {
        while($result4 = $getData4->fetch_assoc()) 
        {

?>      
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p><?php echo $result4['title']; ?></p>
                                                    </div>
<?php } } ?>       
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
                                                    <span><?php echo $result1['duration']; ?> Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revision</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
<?php } } ?>
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
<?php
    $query1 = "select * from tbl_section_title where id='7'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>         
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>
                            
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
                            
<?php
    $query1 = "select * from tbl_section_title where id='8'";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>         
                            <span class="subtitle"><?php echo $result1['subtitle']; ?></span>
                            <h2 class="title"><?php echo $result1['title']; ?></h2>
<?php } }?>
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
                            <a href="<?php echo $facebook; ?>" target="_blank" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>           
<?php } if($youtube!=""){?>
                        
                            <a href="<?php echo $youtube; ?>" target="_blank" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                       
<?php } if($instagram!=""){?>
                        
                            <a href="<?php echo $instagram; ?>" target="_blank" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                        
<?php } if($linkedin!=""){?>
                        
                            <a href="<?php echo $linkedin; ?>" target="_blank" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                        
<?php } if($twitter!=""){?>
                        
                            <a href="<?php echo $twitter; ?>" target="_blank" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                       
<?php } if($github!=""){?>                       
                        
                            <a href="<?php echo $github; ?>" target="_blank" class="social-icon-link"><i class="fab fa-github"></i></a>
                        
<?php } if($website!=""){?>  
                    
                            <a href="<?php echo $website; ?>" target="_blank" class="social-icon-link"><i class="fas fa-globe"></i></a>
                        
<?php } if($pinterest!=""){?>  
                        
                            <a href="<?php echo $pinterest; ?>" target="_blank" class="social-icon-link"><i class="fab fa-pinterest-p"></i></a>
                        
<?php } if($reddit!=""){?>  
                        
                            <a href="<?php echo $reddit; ?>" target="_blank" class="social-icon-link"><i class="fab fa-reddit-alien"></i></a>
                        
<?php } if($tumblr!=""){?>  
                       
                            <a href="<?php echo $tumblr; ?>" target="_blank" class="social-icon-link"><i class="fab fa-tumblr"></i></a>
                        
 <?php } if($google_plus!=""){?>  
                       
                            <a href="<?php echo $google_plus; ?>" target="_blank" class="social-icon-link"><i class="fab fa-google-plus-g"></i></a>
                        
<?php } if($twitch!=""){?>  
                        
                            <a href="<?php echo $twitch; ?>" target="_blank" class="social-icon-link"><i class="fab fa-twitch"></i></a>
                        
<?php } if($discord!=""){?>  
                       
                            <a href="<?php echo $discord; ?>" target="_blank" class="social-icon-link"><i class="fab fa-discord"></i></a>

<?php } if($vimeo!=""){?>  
                            <a href="<?php echo $vimeo; ?>" target="_blank" class="social-icon-link"><i class="fab fa-vimeo-v"></i></a>
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

                                <form class="row" method="POST" action="contact.php">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="phone" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="email" type="email">
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
                                            <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" class="rn-btn">
                                        SEND MESSAGE
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

        <!-- Start Right Demo 
        <div class="rn-right-demo">
            <button class="demo-button">
                <span class="text">Demos</span>
            </button>
        </div> -->
        <!-- End Right Demo -->

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
                                                    <a href="index.php">
                                                        <img class="w-100" src="assets/images/demo/main-demo.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index.php">Main Demo</a></h3>
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
                                                    <a href="index-technician.php">
                                                        <img class="w-100" src="assets/images/demo/index-technician.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-technician.php">Technician</a></h3>
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
                                                    <a href="index-model.php">
                                                        <img class="w-100" src="assets/images/demo/home-model-v2.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-model.php">Model</a></h3>
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
                                                    <a href="home-consulting.php">
                                                        <img class="w-100" src="assets/images/demo/home-consulting.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-consulting.php">Consulting</a></h3>
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
                                                    <a href="fashion-designer.php">
                                                        <img class="w-100" src="assets/images/demo/fashion-designer.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="fashion-designer.php">Fashion Designer</a></h3>
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
                                                    <a href="index-developer.php">
                                                        <img class="w-100" src="assets/images/demo/developer.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-developer.php">Developer</a></h3>
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
                                                    <a href="instructor-fitness.php">
                                                        <img class="w-100" src="assets/images/demo/instructor-fitness.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="instructor-fitness.php">Fitness Instructor</a></h3>
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
                                                    <a href="home-web-Developer.php">
                                                        <img class="w-100" src="assets/images/demo/home-model.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-web-Developer.php">Web Developer</a></h3>
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
                                                    <a href="home-designer.php">
                                                        <img class="w-100" src="assets/images/demo/home-video.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-designer.php">Designer</a></h3>
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
                                                    <a href="home-content-writer.php">
                                                        <img class="w-100" src="assets/images/demo/text-rotet.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-content-writer.php">Content Writter</a></h3>
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
                                                    <a href="home-instructor.php">
                                                        <img class="w-100" src="assets/images/demo/index-boxed.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-instructor.php">Instructor</a></h3>
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
                                                    <a href="home-freelancer.php">
                                                        <img class="w-100" src="assets/images/demo/home-sticky.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-freelancer.php">Freelancer</a></h3>
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
                                                    <a href="home-photographer.php">
                                                        <img class="w-100" src="assets/images/demo/index-bg-image.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-photographer.php">Photographer</a>
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
                                                    <a href="index-politician.php">
                                                        <img class="w-100" src="assets/images/demo/front-end.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-politician.php">Politician</a></h3>
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
                                                    <a href="index-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/main-demo-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-white-version.php">Main Demo</a></h3>
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
                                                    <a href="index-technician-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/index-technician-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-technician-white-version.php">Technician</a></h3>
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
                                                    <a href="index-model-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-model-v2-white.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-model-white-version.php">Model</a></h3>
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
                                                    <a href="home-consulting-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-consulting-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-consulting-white-version.php">Consulting</a>
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
                                                    <a href="fashion-designer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/fashion-designer-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="fashion-designer-white-version.php">Fashion Designer</a>
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
                                                    <a href="index-developer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/developer-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-developer-white-version.php">Developer</a>
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
                                                    <a href="instructor-fitness-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/instructor-fitness-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="instructor-fitness-white-version.php">Fitness Instructor</a>
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
                                                    <a href="home-web-developer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-model-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-web-developer-white-version.php">Web Developer</a>
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
                                                    <a href="home-designer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-video-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-designer-white-version.php">Designer</a>
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
                                                    <a href="home-content-writer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/text-rotet-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-content-writer-white-version.php">Content
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
                                                    <a href="home-instructor-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/index-boxed-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-instructor-white-version.php">Instructor</a></h3>
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
                                                    <a href="home-freelancer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/home-sticky-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-freelancer-white-version.php">Freelancer</a></h3>
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
                                                    <a href="home-photographer-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/index-bg-image-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="home-photographer-white-version.php">Photographer</a></h3>
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
                                                    <a href="index-politician-white-version.php">
                                                        <img class="w-100" src="assets/images/demo/front-end-white-version.png" alt="Personal Portfolio">
                                                        <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <h3 class="title"><a href="index-politician-white-version.php">Politician</a></h3>
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
                            <a href="index.php" class="footer-logo-link">
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
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').php(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

            function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
            }
            $('.image-upload-wrap').bind('dragover', function () {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
                $('.image-upload-wrap').removeClass('image-dropping');
            });
    </script>
</body>

</html>