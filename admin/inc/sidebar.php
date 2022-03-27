
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
                    <!--<li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>-->
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
					<li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Brand Option</a>
                        <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                            <li><a href="addbrand.php">Add Brand</a></li>
                            <li><a href="brandlist.php">Brand List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-external-link"></i>Exclusive Option</a>
                        <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                            <li><a href="addex.php">Add Exclusive Product </a></li>
                            <li><a href="exlist.php">Exclusive Product List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-hand-o-up"></i>Promotion Option</a>
                        <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                            <li><a href="addpromo.php">Add Promotion  </a></li>
                            <li><a href="promolist.php">Promotion List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-image-o"></i>Gallery Option</a>
                        <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
                            <li><a href="addgallery.php">Add Gallery </a></li>
                            <li><a href="gallerylist.php">Gallery List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Portfolio Option</a>
                        <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
                            <li><a href="addport.php">Add Portfolio </a></li>
                            <li><a href="portlist.php">Portfolio List</a></li>            
                        </ul>
                    </li>
					<li><a href="#exampledropdownDropdown7" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-phone"></i>Contact Option</a>
                        <ul id="exampledropdownDropdown7" class="collapse list-unstyled ">
                            <li><a href="updatecontact.php">Update Contact Information </a></li>
                                        
                        </ul>
                    </li>
                    <!--<li><a href="#exampledropdownDropdown8" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>User Table </a>
                        <ul id="exampledropdownDropdown8" class="collapse list-unstyled ">
                            <li><a href="reguser.php">Add User</a></li>
                            <li><a href="userlist.php">User List</a></li>
                            <li><a href="generatebill.php">Generate Bill</a></li>
                            <li><a href="Bill-list.php">Bill List</a></li>
                            <li><a href="paymentlist.php">Payment List</a></li>
                        </ul>
                    </li>
                    <li><a href="#adminDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Admin </a>
                        <ul id="adminDropdown" class="collapse list-unstyled ">
                            <li><a href="#">Change Admin Details</a></li>
                            <li><a href="newadmin.php">Register Admin</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php"> <i class="icon-interface-windows"></i>Login page </a></li>-->
                </ul>

            </nav>