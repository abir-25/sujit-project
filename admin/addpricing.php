<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Pricing</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Pricing Option</li>
			  <li class="breadcrumb-item active">Add Pricing</li>
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
		$type  = $_POST['type'];
        $title  = mysqli_real_escape_string($db->link1, $_POST['title']);
		$subtitle  = mysqli_real_escape_string($db->link1, $_POST['subtitle']);
		$price  = mysqli_real_escape_string($db->link1, $_POST['price']);
        $description  = mysqli_real_escape_string($db->link1, $_POST['description']);
        $duration  = mysqli_real_escape_string($db->link1, $_POST['duration']);

        $query = "INSERT INTO tbl_pricing(type, title, subtitle, description, price, duration) VALUES('$type','$title','$subtitle','$description','$price','$duration')";
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

<?php
	$query1 = "select * from tbl_pricing";
	$getpost = $db->select($query1);
    $type_1 = $type_2 = $type_3 = 0;
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
            if($postresult['type']==1)
            {
                $type_1 =   1; 
            }
            elseif($postresult['type']==2)
            {
                $type_2 =   1; 
            }
            elseif($postresult['type']==3)
            {
                $type_3 =   1; 
            }
        }
    }
    if($type_1==1 && $type_2==1 && $type_3==1)
    {
        echo "<span class='error'>You have added all pricing type data. Please update from Edit Pricing Page or Delete from Pricing List Page</span>";
    }

?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pricing Type</label> 
                          <div class="col-sm-9">
                            <span class="point-checkbox">
                                <input type="radio" id="type_1" name="type" value="1" <?php if($type_1 == 1) echo "disabled"; ?> >
                                <span>Static</span>
                            </span>
                            <span class="point-checkbox">
                                <input type="radio" id=""  name="type" value="2" <?php if($type_2 == 1) echo "disabled"; ?>> 
                                <span>Standard</span> 
                            </span>
                            <span class="point-checkbox">
                                <input type="radio" id="type_3"  name="type" value="3" <?php if( $type_3 == 1) echo "disabled"; ?>> 
                                <span>Premium</span>
                            </span>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Work Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required placeholder="Enter Your Work Title">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Work Sub Title</label>
                          <div class="col-sm-9">
                          <input type="text" name="subtitle" class="form-control" required placeholder="Enter Your Work Sub Title">
                          </div>
                        </div>  
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Work Price</label>
                          <div class="col-sm-9">
                            <input type="number" name="price" class="form-control" placeholder="Enter Your Work Price">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Work Description</label>
                          <div class="col-sm-9">
                          <textarea name="description" required class="form-control" style="height:200px"
                            placeholder="Enter Your Work Description"
                            ></textarea>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Work Completion Time</label>
                          <div class="col-sm-9">
                            <input type="number" required name="duration" class="form-control" placeholder="Enter Your Work Completion Time (Duration)">
                          </div>
                        </div>
						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary" <?php if($type_1==1 && $type_2==1 && $type_3==1)
    { echo "disabled"; } ?>>Add</button>
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
    <script>
      function disableTextfield() {
        var yearOut = document.getElementById("yearOut");
        if(yearOut.disabled)
        {
          yearOut.disabled = false;
        }
        else{
          yearOut.value="";
          yearOut.disabled = true;
        }
      }
      function disableTextfield1() {
        var gpa_field = document.getElementById("gpa_field");
        if(gpa_field.disabled)
        {
          gpa_field.disabled = false;
        }
        else{
          gpa_field.value="";
          gpa_field.disabled = true;
        }
      }
  </script>
  </body>
</html>