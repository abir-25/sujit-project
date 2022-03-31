
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="<?php echo $result['logo'];?>" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="title">
                        <h1 class="h4"><?php echo $result['nickname'];?></h1>
                    </div>
                </div>
<?php } } ?>
                <!-- Sidebar Navidation Menus<span class="heading">Main</span>-->
                <ul class="list-unstyled">
                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
					<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-text"></i>Basic Site Option</a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li><a href="editdashboard.php">Admin Dashboard</a></li>       
                            <li><a href="titlelogo.php">Basic Information</a></li>
                            <li><a href="updatebio.php">Update Bio</a></li>
                            <li><a href="social.php">Social Media</a></li>
                            <li><a href="skilllist.php">Best Skills</a></li>
                            <li><a href="changepassword.php">Change Admin Password</a></li>
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Feature Option</a>
                        <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                            <li><a href="addfeature.php">Add Feature</a></li>
                            <li><a href="featurelist.php">Feature List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-laptop"></i>Portfolio Option</a>
                        <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                            <li><a href="addportfolio.php">Add Portfolio </a></li>
                            <li><a href="portfoliolist.php">Portfolio List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Resume Option</a>
                        <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                            <li><a href="addresume.php">Add Resume  </a></li>
                            <li><a href="resumelist.php">Resume List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-star-o"></i>Testimonial Option</a>
                        <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
                            <li><a href="addtestimonial.php">Add Testimonial </a></li>
                            <li><a href="testimoniallist.php">Testimonial List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Client Option</a>
                        <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
                            <li><a href="addclient.php">Add Client </a></li>
                            <li><a href="clientlist.php">Client List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Pricing Option</a>
                        <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
                            <li><a href="addpricing.php">Add Pricing </a></li>
                            <li><a href="pricinglist.php"> Pricing List</a></li>            
                        </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-edit"></i>Blog Option</a>
                        <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
                            <li><a href="addpricing.php">Add Blog </a></li>
                            <li><a href="pricinglist.php">Blog List</a></li>  
                            <li><a href="pricinglist.php"> Comment List</a></li>              
                        </ul>
                    </li>
                </ul>

            </nav>