<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Best Skills</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>  
              <li class="breadcrumb-item active">Best Skills</li>
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
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['icon']['name'];
		$file_size = $_FILES['icon']['size'];
		$file_temp = $_FILES['icon']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/skill/".$unique_image;
	
		  if(!empty($file_name))
			{
				if (in_array($file_ext, $permited) === false) 
				{
					echo "<span class='error'>Error...You can upload only:-".implode(', ', $permited)."</span>";
				} 
				else
				{	
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_skills(icon) VALUES('$uploaded_image')";
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
  }
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Skill Icon</label>
                          <div class="col-sm-9" style="text-align:center">					 
                            <input type="file" required name="icon" class="form-control">
                            <span class="instruction">Upload .png icon of your skills. e.g. wordpress icon, photoshop icon</span>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Add</button>
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
    <script src="vendor/popper.js/umd/popper.min.js">


    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">


    </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
</body>

</html>
