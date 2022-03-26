<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Electric Billing System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="icon-close"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="What are you looking for..." class="form-control">
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand -->
                            <a href="index.php" class="navbar-brand">
                                <div class="brand-text brand-big"><span>E-BILLING</span><strong>Dashboard</strong></div>
                                <div class="brand-text brand-small"><strong>E-Bill</strong></div>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                            <!-- Messages-->
                            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Riad</h3><span>Sent You Message</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Riad</h3><span>Sent You Message</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Riaad</h3><span>Sent You Message</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="login.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="title">
                        <h1 class="h4">MD. RIAD</h1>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
                <ul class="list-unstyled">
                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>User Table </a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li><a href="reguser.php">User Register</a></li>
                            <li><a href="addbill.php">Add Bill</a></li>
                             <li><a href="generatebill.php">Generate Bill</a></li>
                            <li><a href="DueBill.php">Due Bill</a></li>
                        </ul>
                    </li>
                    <li><a href="#adminDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Admin </a>
                        <ul id="adminDropdown" class="collapse list-unstyled ">
                            <li><a href="#">Change Admin Details</a></li>
                            <li><a href="newadmin.php">Register Admin</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php"> <i class="icon-interface-windows"></i>Login page </a></li>
                </ul>

            </nav>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Forms</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Forms </li>
                    </ul>
                </div>
                <!-- Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Basic Form-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Change Admin User Name</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <form>
                                            <div class="form-group">
                                                <label class="form-control-label">Current Admin Name</label>
                                                <input type="text" placeholder="OldUsername" name="OldUsername" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">New Admin Name</label>
                                                <input type="text" placeholder="NewUsername" name="NewUsername" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="Updated" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Horizontal Form-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Change Password</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-9 offset-sm-3">
                                                    <input type="submit" value="Updated" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Inline Form-->


                        </div>
                    </div>
                </section>
                <!-- Page Footer-->
<?php include "inc/footer.php"; ?>
            </div>
        </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js">


    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">


    </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
</body>

</html>
