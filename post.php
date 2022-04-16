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
    <meta property="fb:app_id" content="{YOUR_APP_ID}" />
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
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#testimonial">Testimonial</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link active" href="blog.php">blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#contacts">Contact</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#testimonial">Testimonial</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link active" href="blog.php">blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contacts">Contact</a></li>
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
<?php
	if(!isset($_GET['postId']) || $_GET['postId'] == NULL)
	{
		echo "<script>window.location = 'blog.php'; </script>";
	}
	else
	{
		$postId = $_GET['postId'];
	}
?>
            <!-- Start Client Area -->
            <div class="rn-client-area rn-section-gap mt-5" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
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
                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-3">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust" style="padding-right: -17px; margin-right: 17px;">
                                <ul class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist">
<?php
    $query1 = "select * from tbl_blog where id!='$postId' and cat_id = (select cat_id from tbl_blog where id='$postId') limit 5";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
?>  
                                    <li class="nav-item related-post">
                                        <img src="admin/<?php echo $result1['image']; ?>" alt="" class="related-img">
                                        <a class="nav-link" href="post.php?postId=<?php echo $result1['id']; ?>"aria-selected="true"><?php echo $result1['title']; ?></a>
                                    </li>
<?php } } ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
 <?php
    $queryPost = "select * from tbl_blog where id='$postId'";
    $getDataPost = $db->select($queryPost);
    if($getDataPost)
    {
        while($resultPost = $getDataPost->fetch_assoc()) 
        {
?>
                    <div class="main-content post-content">
                        <div class="inner text-center">
                            <div class="thumbnail">
                                <a href="#"><img src="admin/<?php echo $resultPost['image']; ?>" alt="Client-image" class="post-image"></a>
                            </div>
                            <div class="seperator"></div>
                            <div class="client-name"><span><?php echo $resultPost['title']; ?></span><span><i class="feather-clock"></i> <?php echo $resultPost['read_time']; ?> read</span>
                            </div>
                            <div class="post-details">
                            <?php echo $resultPost['description']; ?>
                            </div>
                        </div>
                    </div>
<?php } } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->


        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

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
    <script id="dsq-count-scr" src="//sujitbarua.disqus.com/count.js" async></script>
</body>

</html>