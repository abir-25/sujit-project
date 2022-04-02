<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Training Summary</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Resume Option</li>
			  <li class="breadcrumb-item active">Add Training Summary</li>
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
		$title  = mysqli_real_escape_string($db->link1, $_POST['title']);
		$institute  = mysqli_real_escape_string($db->link1, $_POST['institute']);
		$achievement  = mysqli_real_escape_string($db->link1, $_POST['achievement']);
		$duration  = mysqli_real_escape_string($db->link1, $_POST['duration']);
        $year_out  = mysqli_real_escape_string($db->link1, $_POST['year_out']);

    $queryCheck = "select * from tbl_training where tbl_training.id mod 1 = 0;";
    $getDataCheck = $db->select($queryCheck);
    if($getDataCheck)
    {
      $i = 0;
      while($resultCheck = $getDataCheck->fetch_assoc()) 
      {
        $i++;
        $idCheck = $resultCheck['id'];
        $query = "UPDATE tbl_training
                SET 
                countt = '$i'
                where id='$idCheck'";
        $updated_rows = $db->update($query);
      }
    } 

    $query1 = "select max(countt) as countt from tbl_training";
    $getData1 = $db->select($query1);
    if($getData1)
    {
        while($result1 = $getData1->fetch_assoc()) 
        {

          $countt = $result1['countt'];
        }
    }
        $countt++;

        $query = "INSERT INTO tbl_training(title, institute, achievement, duration, year_out, countt) VALUES('$title','$institute','$achievement','$duration','$year_out','$countt')";
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
?>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Topic Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required placeholder="Enter Your Training Topic Title">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Institute Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="institute" class="form-control" required placeholder="Enter Your Training Institute Name">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Achievement</label>
                          <div class="col-sm-9">
                          <textarea name="achievement" required class="form-control" style="height:200px"
                            placeholder="Enter Your Achievement Description"
                            ></textarea>
                          </div>
                        </div> 
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Duration (in hours)</label>
                          <div class="col-sm-9">
                            <input type="text" name="duration" class="form-control" required placeholder="Enter Your Training Duration">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Year</label>
                          <div class="col-sm-9">
                            <input id="yearOut" type="text" name="year_out" required class="form-control" placeholder="Enter Your Training Year">
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
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>