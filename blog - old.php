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

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-3">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust" style="padding-right: -17px; margin-right: 17px;">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">
<?php
    $query1 = "select cat_id from tbl_blog GROUP BY cat_id limit 1";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {
            $cat_id = $result1['cat_id'];

            $query2 = "select * from tbl_category where id='$cat_id'";
            $getData2 = $db->select($query2);
            if($getData2)
            {
                while($result2 = $getData2->fetch_assoc()) 
                {
                    $cat = $result2['title'];
                }
            }
?>  
                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-<?php echo $cat_id; ?>-tab" data-toggle="tab" href="#v-pills-<?php echo $cat_id; ?>" role="tab" aria-selected="true"><?php echo $cat; ?></a>
                                    </li>
<?php } } ?>

<?php
    $query3 = "select cat_id from tbl_blog where cat_id!='$cat_id' GROUP BY cat_id";
    $getData3 = $db->select($query3);
    if($getData3)
    {
        while($result3 = $getData3->fetch_assoc()) 
        {
            $cat_id2 = $result3['cat_id'];

            $query4 = "select * from tbl_category where id='$cat_id2'";
            $getData4 = $db->select($query4);
            if($getData4)
            {
                while($result4 = $getData4->fetch_assoc()) 
                {
                    $cat1 = $result4['title'];
                }
            }
?>  
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-<?php echo $cat_id2; ?>-tab" data-toggle="tab" href="#v-pills-<?php echo $cat_id2; ?>" role="tab" aria-selected="true"><?php echo $cat1; ?></a>
                                    </li>
 <?php } } ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">
<?php
    $query5 = "select cat_id from tbl_blog GROUP BY cat_id limit 1";
    $getData5 = $db->select($query5);
    if($getData5)
    {
        while($result5 = $getData5->fetch_assoc()) 
        {
            $cat_id3 = $result5['cat_id'];
?>  
                                    <div class="tab-pane fade show active" id="v-pills-<?php echo $cat_id3; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $cat_id3; ?>-tab">
                                        <div class="client-card blog-card">
<?php
    $query6 = "select * from tbl_blog where cat_id='$cat_id3'";
    $getData6 = $db->select($query6);
    if($getData6)
    {
        while($result6 = $getData6->fetch_assoc()) 
        { 
            $post_id = $result6['id'];
            $post_date = $fm->formatDate($result6['post_date']);
?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content" data-toggle="modal" data-target="#blog_modal<?php echo $post_id; ?>">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="admin/<?php echo $result6['image']; ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"><?php echo $result6['title']; ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="blog_modal<?php echo $post_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="admin/<?php echo $result6['image']; ?>" alt="news modal" class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date"><?php echo $post_date; ?></span>
                            <h2 class="title"><?php echo $result6['title']; ?></h2>
                            <p><?php echo $result6['description']; ?></p>
                        </div>

                        <div id="disqus_thread"></div>
                        <script>
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://sujitbarua.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <!-- <div id="disqus_thread"></div> -->
                        <!-- Comment Section Area Start -->
                        <!-- <div class="comment-inner">
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
                                            <textarea placeholder="Comment" class="blog_textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->

<?php } } ?>
                                        </div>
                                    </div>


        
<?php } } ?>

<?php
    $query7 = "select cat_id from tbl_blog where cat_id!='$cat_id3' GROUP BY cat_id";
    $getData7 = $db->select($query7);
    if($getData7)
    {
        while($result7 = $getData7->fetch_assoc()) 
        {
            $cat_id4 = $result7['cat_id'];
?>  
                                    <div class="tab-pane fade" id="v-pills-<?php echo $cat_id4; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $cat_id4; ?>-tab">
                                        <div class="client-card blog-card">

<?php
    $query8 = "select * from tbl_blog where cat_id='$cat_id4'";
    $getData8 = $db->select($query8);
    if($getData8)
    {
        while($result8 = $getData8->fetch_assoc()) 
        {
            $post_id1 = $result8['id'];
            $post_date1 = $fm->formatDate($result8['post_date']);
?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content" data-toggle="modal" data-target="#blog_modal<?php echo $post_id1; ?>">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="admin/<?php echo $result8['image']; ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"><?php echo $result8['title']; ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="blog_modal<?php echo $post_id1; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="admin/<?php echo $result8['image']; ?>" alt="news modal" class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date"><?php echo $post_date1; ?></span>
                            <h2 class="title"><?php echo $result8['title']; ?></h2>
                            <p><?php echo $result8['description']; ?></p>
                        </div>

                        <div id="disqus_thread"></div>
                        <script>
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://sujitbarua.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <!-- Comment Section Area Start -->
                        <!-- <div class="comment-inner">
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
                                            <textarea placeholder="Comment" class="blog_textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->
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