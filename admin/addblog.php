<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Post</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Blog Option</li>
			  <li class="breadcrumb-item active">Add Post</li>
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
        $cat_id  = $_POST['cat_id'];
		$title  = mysqli_real_escape_string($db->link1, $_POST['title']);
		$keyword  = mysqli_real_escape_string($db->link1, $_POST['keyword']);
        $description  = mysqli_real_escape_string($db->link1, $_POST['editor']);
        $read_time  = mysqli_real_escape_string($db->link1, $_POST['read_time']);


		$permitted  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/blog/".$unique_image;	

        if (in_array($file_ext, $permitted) === false) 
        {
            echo "<span class='error'>You can upload only:-".implode(', ', $permitted)."</span>";
        } 
        else
        {	
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_blog(cat_id,title, description, keyword, read_time, image) VALUES('$cat_id','$title','$description','$keyword','$read_time','$uploaded_image')";
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
?>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Category</label>
                          <div class="col-sm-9">
                          <select name="cat_id" id="" class="form-control" required>
                                <option value="">Select Category</option>
<?php
	$query1 = "select * from tbl_category";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>
                                <option value="<?php echo $postresult['id'];?>"><?php echo $postresult['title'];?></option>
<?php } } ?>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Topic Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required placeholder="Enter Blog Topic Title">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Description</label>
                          <div class="col-sm-9">
                          <textarea name="editor" id="editor"></textarea>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Read Time</label>
                          <div class="col-sm-9">
                            <input type="text" name="read_time" class="form-control" required placeholder="Enter time to finish reading this blog (e.g. 1 hour or 10 minutes)">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Keyword</label>
                          <div class="col-sm-9">
                            <input type="text" name="keyword" class="form-control" required placeholder="Enter Blog Keyword">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Blog image</label>
                          <div class="col-sm-9" style="text-align:center">
                            <input type="file" name="image" class="form-control" required>
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
    <script type="text/javascript" src="vendor/tinymce/tinymce.min.js"></script>
    <script>
	tinymce.init({
	  selector: 'textarea#editor',  //Change this value according to your HTML
	  auto_focus: 'element1',
	  height: "200"
	});
	
	$( document ).ready(function() {
	
		$('#buttonpost').on("click", function(){
			tinyMCE.triggerSave();
			var value = $("textarea#editor").val();		
			$("#display-post").html(value);
			$(".texteditor-container").hide();
			return false;
		});
	
	});   
	
</script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>