<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Testimonial List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Testimonial Option</li>
                        <li class="breadcrumb-item active">Testimonial List</li>
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
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><!--<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>--></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Unapproved Testimonial List</h3>
                                    </div>
                                    <div class="card-body card-body2">
<?php
	if(isset($_GET['delid']))
	{
		$delid = $_GET['delid']; 
		$delquery = "delete from tbl_testimonial where id='$delid'";
		$deldata = $db->deletedata($delquery);
		
		if($deldata)
		{
			echo "<span class='success'>Testimonial Deleted Successfully !!</span>";
		}
		else
		{
			echo "<span class='error'>Testimonial Not Deleted !!</span>";
		}
	}	
?>
<?php

	if(isset($_GET['seenid']))
	{
		$seenid = $_GET['seenid'];
		$query = "UPDATE tbl_testimonial SET status='1' WHERE id='$seenid'";
		$update_row = $db->update($query);
		if($update_row)
		{
			echo "<span class='success'>Testimonial Approved Successfully !!</span>";
		}
		else
		{
			echo "<span class='error'>ERROR!! Testimonial approved failed.</span>";
		}
	}
	
?>

				
<?php

	if(isset($_GET['unseenid']))
	{
		$unseenid = $_GET['unseenid'];
		$query = "UPDATE tbl_testimonial SET status='0' WHERE id='$unseenid'";
		$update_row = $db->update($query);
		if($update_row)
		{
			echo "<span class='success'>Testimonial Unapproved Successfully !!</span>";
		}
		else
		{
			echo "<span class='error'>ERROR!! Testimonial unapproved failed.</span>";
		}
	}
	
?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="7%">No.</th>
                                                    <th width="12%">Name</th>
                                                    <th width="11%">Designation</th>
                                                    <th width="38%">Review</th>
                                                    <th width="12%">Rating</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php		
$query = "select * from tbl_testimonial where status='0' order by id desc";
$msg = $db->select($query);
$i=0;
if($msg)
{
	while($result = $msg->fetch_assoc())
	{
		$i++;
?>
                        <tr>
                            <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                            
                            <td scope="row" style="vertical-align:middle"><?php echo $result['name']; ?></td>

                            <td scope="row" style="vertical-align:middle"><?php echo $result['designation']; ?></td>

                            <td scope="row" style="vertical-align:middle"><?php echo $result['description'];?></td>

                            <td scope="row" style="vertical-align:middle"><?php echo $result['point']; ?>/5</td>
                            
                            <td style="vertical-align:middle">
                            <a class="actionLink" onclick= "return confirm('Are you sure to Approve this Testimonial?');" href="?seenid=<?php echo $result['id']; ?>">Approve</a> || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Testimonial?');" href="?delid=<?php echo $result['id'];?>">Delete</a></td>
                        </tr>
<?php } } ?>
                                            </tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
                                    </div>
                                </div>
                            </div>
							
							
							
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><!--<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>--></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Approved Testimonial List</h3>
                                    </div>
                                    <div class="card-body card-body2">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="7%">No.</th>
                                                    <th width="12%">Name</th>
                                                    <th width="11%">Designation</th>
                                                    <th width="38%">Review</th>
                                                    <th width="12%">Rating</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php		
$query = "select * from tbl_testimonial where status='1' order by id desc";
$msg = $db->select($query);
$j=0;
if($msg)
{
	while($result = $msg->fetch_assoc())
	{
		$j++;
?>
                        <tr>
                            <th scope="row" style="vertical-align:middle"><?php echo $j; ?></th>
                            
                            <td scope="row" style="vertical-align:middle"><?php echo $result['name']; ?></td>

                            <td scope="row" style="vertical-align:middle"><?php echo $result['designation']; ?></td>

                            <td scope="row" style="vertical-align:middle"><?php echo $result['description'];?></td>

                            <td scope="row" style="vertical-align:middle"><?php echo $result['point']; ?>/5</td>
                            
                            <td style="vertical-align:middle"><a class="actionLink" onclick= "return confirm('Are you sure to Unapprove this Testimonial?');" href="?unseenid=<?php echo $result['id']; ?>">Unapprove</a> || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Testimonial?');" href="?delid=<?php echo $result['id'];?>">Delete</a></td>
                        </tr>
<?php } } ?>
                                            </tbody>
                                        </table>
<?php if($j==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
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
