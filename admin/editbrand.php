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
	if(!isset($_GET['brandid']) || $_GET['brandid'] == NULL)
	{
		echo "<script>window.location = 'brandlist.php'; </script>";
	}
	else
	{
		$brandid = $_GET['brandid'];
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
                    <h3 class="h4">Update Slider Informaion</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name  = mysqli_real_escape_string($db->link1, $_POST['name']);
		$para1  = mysqli_real_escape_string($db->link1, $_POST['para1']);
		$para2  = mysqli_real_escape_string($db->link1, $_POST['para2']);
		$price  = mysqli_real_escape_string($db->link1, $_POST['price']);
		 
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
	
		if($name == "" || $para2 == "" || $para1 == "" || $price == "")
		{
			echo "<span class='error'>Error...Field must not be empty !!</span>";
		}
		else
		{
			if(!empty($file_name))
			{
				if (in_array($file_ext, $permited) === false) 
				{
					echo "<span class='error'>Error...You can upload only:-".implode(', ', $permited)."</span>";
				}
				else
				{	
					move_uploaded_file($file_temp, $uploaded_image);						
					$query = "UPDATE tbl_brand 
							SET
							name='$name',
							para1='$para1',
							para2='$para2',
							price='$price',
							image='$uploaded_image'
							WHERE id = '$brandid'";
				
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
			}
			else
			{
				$query = "UPDATE tbl_brand 
							SET
							name='$name',
							para1='$para1',
							para2='$para2',
							price='$price'
							WHERE id = '$brandid'";
				
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
		}
		
	
	}
?>

<?php
	$query1 = "select * from tbl_brand where id='$brandid'";
	$getpost = $db->select($query1);
	
	while($postresult = $getpost->fetch_assoc())
	{
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="<?php echo $postresult['name']; ?>">
                          </div>
                        </div>
						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Image</label>
                          <div class="col-sm-9" style="text-align:center">
							<img src="<?php echo $postresult['image']; ?>" alt="" style="width:300px; height:auto; margin-bottom:10px" />
                            <input type="file" name="image"  class="form-control" >
                          </div>
                        </div>
                        <div class="line"></div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Paragraph</label>
                          <div class="col-sm-9">
							<textarea name="para1" class="form-control" style="height:200px"><?php echo $postresult['para1']; ?></textarea>
                            
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Second Paragraph</label>
                          <div class="col-sm-9">
							<textarea name="para2" class="form-control" style="height:200px"><?php echo $postresult['para2']; ?></textarea>
                            
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Price</label>
                          <div class="col-sm-9">
                            <input type="text" name="price" class="form-control" value="<?php echo $postresult['price']; ?>">
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