<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Post</h2>
            </div>
          </header>
<?php
	if(!isset($_GET['postId']) || $_GET['postId'] == NULL)
	{
		echo "<script>window.location = 'bloglist.php'; </script>";
	}
	else
	{
		$postId = $_GET['postId'];
	}
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Blog Option</li>  
              <li class="breadcrumb-item active">Edit Post</li>
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
	
		if(!empty($file_name))
        {
            if (in_array($file_ext, $permitted) === false) 
            {
                echo "<span class='error'>Error...You can upload only:-".implode(', ', $permitted)."</span>";
            } 
            else
            {	
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_blog 
                        SET 
                        cat_id = '$cat_id',
                        title = '$title',
                        description = '$description',
                        keyword = '$keyword',
                        read_time = '$read_time',
                        image = '$uploaded_image'   
                        where id='$postId'";
            
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
            $query = "UPDATE tbl_blog 
                        SET 
                        cat_id = '$cat_id',
                        title = '$title',
                        description = '$description',
                        keyword = '$keyword',
                        read_time = '$read_time'       
                        where id='$postId'";
            
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
?>
<?php
	$query1 = "select * from tbl_blog where id='$postId'";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>
                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Category</label>
                          <div class="col-sm-9">
                          <select name="cat_id" id="" class="form-control" required>
                                  <option value="">Select Category</option>
<?php
	$query2 = "select * from tbl_category";
	$getpost2 = $db->select($query2);
      if($getpost2)
      {
	      while($postresult1 = $getpost2->fetch_assoc())
	      {
?>
                              
                                  <option value="<?php echo $postresult1["id"]; ?>" <?php if($postresult1['id'] == $postresult['cat_id']) {  echo "selected"; } ?>><?php echo $postresult1["title"]; ?></option>
<?php } } ?>
                                </select>
                          </div>
                        </div>
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Topic Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required value="<?php echo $postresult['title'];?>">
                          </div>
                        </div>
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Description</label>
                          <div class="col-sm-9">
                            <textarea name="editor" id="editor"><?php echo $postresult['description'];?></textarea>
                          </div>
                        </div>
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Read Time</label>
                          <div class="col-sm-9">
                            <input type="text" name="read_time" class="form-control" required value="<?php echo $postresult['read_time'];?>">
                          </div>
                        </div>
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Keyword</label>
                          <div class="col-sm-9">
                            <input type="text" name="keyword" class="form-control" required value="<?php echo $postresult['keyword'];?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Blog imag</label>
                          <div class="col-sm-9" style="text-align:center">
						    <img src="<?php echo $postresult['image'];?>" width="150px"/><br/>
                            <input type="file" name="image" class="form-control">
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
