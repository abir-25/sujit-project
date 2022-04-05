<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Price Format</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Pricing Option</li>  
              <li class="breadcrumb-item active">Update Price Format</li>
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
                      <h3 class="h4">Update Price Format</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
        $type  = $_POST['type'];

		$query = "UPDATE tbl_price_format
                    SET 
                    type = '$type'";
        
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
	$query1 = "select * from tbl_price_format";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Price Format</label>
                          <div class="col-sm-9">
                            <span class="point-checkbox">
                                <input type="radio" id="type_1" name="type" value="1" <?php if($postresult['type'] == 1) { echo "checked"; }?> >
                                <span>BDT (৳)</span>
                            </span>
                            <span class="point-checkbox">
                                <input type="radio" id=""  name="type" value="2" <?php if($postresult['type'] == 2) { echo "checked"; } ?>> 
                                <span>USD ($)</span> 
                            </span>
                            
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
