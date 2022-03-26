<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
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
                      <h3 class="h4">Update Contact Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$map  = mysqli_real_escape_string($db->link1, $_POST['map']);
		$location  	  = mysqli_real_escape_string($db->link1, $_POST['location']);
		$opentime    = mysqli_real_escape_string($db->link1, $_POST['opentime']); 
		$email    = mysqli_real_escape_string($db->link1, $_POST['email']);
		$mobile = mysqli_real_escape_string($db->link1, $_POST['mobile']);

		$query = "UPDATE tbl_contactinfo 
					  SET 
					  map = '$map',
					  location = '$location',
					  opentime = '$opentime',
					  email = '$email',
					  mobile = '$mobile'
					  WHERE id = '1'";
			
		$updated_rows = $db->update($query);
		if ($updated_rows) 
		{
			echo "<span class='success'>Data Updated Successfully.
			</span>";
		}
		else 
		{
			echo "<span class='error'>Data Not Updated !!</span>";
		}

	
	}
?>

<?php
	$query1 = "select * from tbl_contactinfo where id='1'";
	$getpost = $db->select($query1);
	
	while($postresult = $getpost->fetch_assoc())
	{
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Map</label>
                          <div class="col-sm-9">
                            <textarea name="map" class="form-control" style="height:200px"><?php echo $postresult['map']; ?></textarea>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Location</label>
                          <div class="col-sm-9">
                            <textarea name="location" class="form-control" style="height:100px"><?php echo $postresult['location']; ?></textarea>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Shop Open Time</label>
                          <div class="col-sm-9">
                            <input type="text" name="opentime" class="form-control" value="<?php echo $postresult['opentime']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email Id</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" value="<?php echo $postresult['email']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Mobile No.</label>
                          <div class="col-sm-9">
                            <input type="text" name="mobile" class="form-control" value="<?php echo $postresult['mobile']; ?>">
                          </div>
                        </div>
						 
<?php } ?>						
     
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
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