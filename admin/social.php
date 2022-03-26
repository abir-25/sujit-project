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
                      <h3 class="h4">Update Social Media Link</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$twitter  = mysqli_real_escape_string($db->link1, $_POST['twitter']);
		$fb  	  = mysqli_real_escape_string($db->link1, $_POST['fb']);
		$insta    = mysqli_real_escape_string($db->link1, $_POST['insta']); 
		$skype    = mysqli_real_escape_string($db->link1, $_POST['skype']);
		$linkedin = mysqli_real_escape_string($db->link1, $_POST['linkedin']);

		$query = "UPDATE tbl_social 
					  SET 
					  twitter = '$twitter',
					  fb = '$fb',
					  insta = '$insta',
					  skype = '$skype',
					  linkedin = '$linkedin'
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
	$query1 = "select * from tbl_social where id='1'";
	$getpost = $db->select($query1);
	
	while($postresult = $getpost->fetch_assoc())
	{
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitter</label>
                          <div class="col-sm-9">
                            <input type="text" name="twitter" class="form-control" value="<?php echo $postresult['twitter']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Facebook</label>
                          <div class="col-sm-9">
                            <input type="text" name="fb" class="form-control" value="<?php echo $postresult['fb']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Instagram</label>
                          <div class="col-sm-9">
                            <input type="text" name="insta" class="form-control" value="<?php echo $postresult['insta']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Skype</label>
                          <div class="col-sm-9">
                            <input type="text" name="skype" class="form-control" value="<?php echo $postresult['skype']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Linkedin</label>
                          <div class="col-sm-9">
                            <input type="text" name="linkedin" class="form-control" value="<?php echo $postresult['linkedin']; ?>">
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