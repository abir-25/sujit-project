<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Tables</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Brand List</li>
                    </ul>
                </div>

                <section class="tables">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Brand List</h3>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delbrandid']))
	{
		$delbrandid = $_GET['delbrandid'];
		$query = "select * from tbl_brand where id='$delbrandid'"; 
		$getdata = $db->select($query);
		
		if($getdata)
		{
			while($delimg = $getdata->fetch_assoc())
			{
				$dellink = $delimg['image'];
				unlink($dellink);
			}
		}
		
		$delquery = "delete from tbl_brand where id = '$delbrandid'";
		$deldata = $db->deletedata($delquery);
		
		if($deldata)
		{
			echo "<span class='success'>Data Deleted Successfully.
								</span>";
		}
		else
		{
			echo "<span class='error'>Data Not Deleted !!</span>";
		}
	}
?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>First Paragraph</th>
                                                    <th>Second Paragraph</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_brand order by id asc";				
	$post = $db->select($query);				
	if($post)
	{
		$i= 0;
		while($result = $post->fetch_assoc())
		{
			$i++;
?>
                                                <tr>
                                                    <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                                                    <td style="vertical-align:middle"><?php echo $result['name']; ?></td>
                                                    <td style="vertical-align:middle"><img class="userimglist" src="<?php echo $result['image']; ?>" alt="" /></td>
													
                                                    <td style="vertical-align:middle; text-align:justify"><?php echo $fm->textShorten($result['para1'],100); ?></td>
													<td style="vertical-align:middle; text-align:justify"><?php echo $fm->textShorten($result['para1'],100); ?></td>
													<td style="vertical-align:middle"><?php echo $result['price']; ?></td>
                                                    <td style="vertical-align:middle" align="center"><a class="actionLink" href="editbrand.php?brandid=<?php echo $result['id']; ?>">Update</a> <br> || <br> <a class="actionLink" onclick= "return confirm('Are you sure to Delete This User?');" href="?delbrandid=<?php echo $result['id'];?>">Delete</a></td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
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