<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Bio</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>
			  <li class="breadcrumb-item active">Update Bio</li>
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
                      <h3 class="h4">Enter Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name  = mysqli_real_escape_string($db->link1, $_POST['name']);
		$intro  = mysqli_real_escape_string($db->link1, $_POST['intro']);
		$phone  = mysqli_real_escape_string($db->link1, $_POST['phone']);
		$email  = mysqli_real_escape_string($db->link1, $_POST['email']);
		  
		$permitted  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/bio/".$unique_image;
	
		move_uploaded_file($file_temp, $uploaded_image);

		$query1 = "select * from tbl_bio";
		$getpost = $db->num_rows($query1);
		if(!$getpost)
		{
			if(empty($file_name)){
				echo "<span class='error'>Please enter your image!!</span>";
			}
			else{
				
				$query = "INSERT INTO tbl_bio(name, image, intro, phone, email) VALUES('$name','$uploaded_image','$intro','$phone','$email')";
				$inserted_rows = $db->insert($query);
				if ($inserted_rows) 
				{
					echo "<span class='success'>Data Inserted Successfully.
					</span>";
				}
				else 
				{
					echo "<span class='error'>Data Not Inserted !!</span>";
				}
			}
			
		}

		else{
			if(!empty($file_name))
			{
				if (in_array($file_ext, $permitted) === false) 
				{
					 echo "<span class='error'>You can upload only:-"
					 .implode(', ', $permitted)."</span>";
				} 
				else
				{	
					// move_uploaded_file($file_temp, $uploaded_image);
					$query = "UPDATE tbl_bio 
							  SET 
							  name = '$name',
							  image = '$uploaded_image',
							  intro = '$intro',
							  phone = '$phone',
							  email = '$email'";
					
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
			else{
				$query = "UPDATE tbl_bio 
							  SET 
							  name = '$name',
							  intro = '$intro',
							  phone = '$phone',
							  email = '$email'";
					
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
	$query1 = "select * from tbl_bio";
	$getpost = $db->num_rows($query1);
    if($getpost)
    {
	    $getpost = $db->select($query1);
	    while($postresult = $getpost->fetch_assoc())
	    {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required value="<?php echo $postresult['name']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Phone No.</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" required value="<?php echo $postresult['phone'];?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email Id</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" required value="<?php echo $postresult['email'];?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Image</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['image'];?>" width="200px"/><br/>
                            <input type="file" name="image" class="form-control">
                          </div>
                        </div>  
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Intro</label>
                          <div class="col-sm-9">
							<textarea name="intro" class="form-control" style="height:200px"><?php echo $postresult['intro']; ?></textarea>
                          </div>
                        </div>
						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
<?php } } else { ?>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Phone No.</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" required placeholder="Enter Your Phone No.">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email Id</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" required placeholder="Enter Your Email Id">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Image</label>
                          <div class="col-sm-9" style="text-align:center">
                            <input type="file" name="image" class="form-control" required>
                          </div>
                        </div>  
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Intro</label>
                          <div class="col-sm-9">
							<textarea name="intro" class="form-control" style="height:200px"
                            placeholder="Enter Your Short Intro within 100 Words to get best design view"
                            ></textarea>
                          </div>
                        </div>
						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
<?php } ?>
     
                       
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