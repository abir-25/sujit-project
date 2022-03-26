<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Forms</h2>
            </div>
          </header>
<?php
	if(isset($_GET['userid']))
	{
		$userid = $_GET['userid']; 
	}
	else
	{
		header("Location:userlist.php");
	}
?>

          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Forms            </li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
               
               
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><!--<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>--></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Edit User</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name 	   = $_POST['name'];
		$image 	   = $_POST['image'];
		$email 	   = $_POST['email'];
		$mobile    = $_POST['mobile'];
		$username  = $_POST['username'];
		$password  = $_POST['password'];
		 
		 
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
	
		if($name == "" || $email == "" || $mobile == "" || $username == "" || $password == "")
		{
			echo "<span class='error'>Error...Field must not be empty !!</span>";
		}
		else
		{
			if(!empty($file_name))
			{
				if ($file_size >1048567) 
				{
					echo "<span class='error'>Error...Image Size should be less then 1MB!</span>";
				} 
				elseif (in_array($file_ext, $permited) === false) 
				{
					echo "<span class='error'>Error...You can upload only:-".implode(', ', $permited)."</span>";
				}
				else
				{	
					move_uploaded_file($file_temp, $uploaded_image);						
					$inserted_rows = mysql_query("UPDATE tbl_signup 
											SET
											name='$name',
											email='$email',
											mobile='$mobile',
											username='$username',
											password='$password',
											image='$uploaded_image'
											WHERE id = '$userid'");
				
					if ($inserted_rows) 
					{
						echo "<span class='success'>User Updated Successfully!</span>";
					}
					else 
					{
						echo "<span class='error'>Error...User is not Updated!!</span>";
					}
				}
			}
			else
			{
				$inserted_rows = mysql_query("UPDATE tbl_signup
											SET
											name='$name',
											email='$email',
											mobile='$mobile',
											username='$username',
											password='$password'
											WHERE id = '$userid'");
				
				if ($inserted_rows) 
				{
					echo "<span class='success'>User Updated Successfully!</span>";
				}
				else 
				{
					echo "<span class='error'>Error...User is not Updated!!</span>";
				}
				
			}
		}
		
	
	}
?>

<?php
	$query = mysql_query("select * from tbl_signup where id='$userid'");
		 while($result = mysql_fetch_array($query))
		 {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Image</label>
                          <div class="col-sm-9">
							<img src="<?php echo $result['image']; ?>" alt="" style="width:140px; height:140px; margin-bottom:10px" />
                            <input type="file" name="image"  class="form-control" >
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email Id</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" value="<?php echo $result['email']; ?>"><span class="help-block-none">Please Insert Your Valid Email Address</span>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Mobile No.</label>
                          <div class="col-sm-9">
                            <input type="text" name="mobile" class="form-control" value="<?php echo $result['mobile']; ?>"><span class="help-block-none">Please Insert Your Valid Mobile Number</span>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" value="<?php echo $result['username']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text" name="password" class="form-control" value="<?php echo $result['password']; ?>">
                          </div>
                        </div>
<?php } ?>                      
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update User</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
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
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>