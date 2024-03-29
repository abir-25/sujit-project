<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Training Summary</h2>
            </div>
          </header>
<?php
	if(!isset($_GET['trainingId']) || $_GET['trainingId'] == NULL)
	{
		echo "<script>window.location = 'traininglist.php'; </script>";
	}
	else
	{
		$trainingId = $_GET['trainingId'];
	}
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Resume Option</li>  
              <li class="breadcrumb-item active">Edit Training Summary</li>
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
                      <h3 class="h4">Edit Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
        $title  = mysqli_real_escape_string($db->link1, $_POST['title']);
		$institute  = mysqli_real_escape_string($db->link1, $_POST['institute']);
        $duration  = mysqli_real_escape_string($db->link1, $_POST['duration']);
		$achievement  = mysqli_real_escape_string($db->link1, $_POST['achievement']);
        $year_out  = mysqli_real_escape_string($db->link1, $_POST['year_out']);
    

    $query = "UPDATE tbl_training
                SET 
                title = '$title',
                institute = '$institute',
                achievement = '$achievement',
                duration = '$duration',
                year_out = '$year_out'
                where id='$trainingId'";
    
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
	$query1 = "select * from tbl_training where id='$trainingId'";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Topic Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required value="<?php echo $postresult['title'];?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Institute Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="institute" class="form-control" required value="<?php echo $postresult['institute'];?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Achievement</label>
                          <div class="col-sm-9">
                          <textarea name="achievement" required class="form-control" style="height:100px"><?php echo $postresult['achievement'];?>
                            </textarea>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Duration</label>
                          <div class="col-sm-9">
                            <input type="text" name="duration" class="form-control" required value="<?php echo $postresult['duration'];?>">
                          </div>
                        </div>  
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Training Year</label>
                          <div class="col-sm-9">
                            <input type="text" id="yearOut" name="year_out" required class="form-control" value="<?php echo $postresult['year_out']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
<?php } } ?>
	
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
    <script>
      var yearOutCk =  document.getElementById("year_out_check");
      if(yearOutCk.checked){
        document.getElementById("yearOut").disabled = true;
      }
      var gpa_field_ck =  document.getElementById("gpa_field_ck");
      if(gpa_field_ck.checked){
        document.getElementById("gpa_field").disabled = true;
      }

      function disableTextfield() {
        var yearOut = document.getElementById("yearOut");
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
