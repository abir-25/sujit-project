<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Pricing Point List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Pricing Option</li>
                        <li class="breadcrumb-item active">Pricing Point List</li>
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
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Pricing Point List</h3>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delpointid']))
	{
		$delpointid = $_GET['delpointid'];
		
		$delquery = "delete from tbl_pricing_point where id = '$delpointid'";
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
                                                    <th width="10%">No.</th>
                                                    <th width="40%">Point Title</th>
                                                    <th width="30%">Pricing Type</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_pricing_point order by id asc";		
    $i = 0;
	$post = $db->select($query);				
	if($post)
	{
		while($result = $post->fetch_assoc())
		{
			$i++;
            $type_1 = $result['type_1'];
            $type_2 = $result['type_2'];
            $type_3 = $result['type_3'];
            if($type_1==0 && $type_2==0 && $type_3==0){
                $type_text = "";
            }
            
            if($type_1==1){
                $type_text = "Static";
            }
            if($type_2==1){
                if($type_1==1){
                    $type_text = "Static, Standard";
                }
                else{
                    $type_text = "Standard";
                }
                
            }
            if($type_3==1){
                if($type_1==1 && $type_2==1){
                    $type_text = "Static, Standard, Premium";
                }
                else if($type_1==1){
                    $type_text = "Static, Premium";
                }
                else if($type_2==1){
                    $type_text = "Standard, Premium";
                }
                else{
                    $type_text = "Premium";
                }
            }
?>
                                                <tr>
                                                    <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                                                    
                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['title']; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $type_text;?></td>
									
													
                                                    <td style="vertical-align:middle"><a class="actionLink" href="editpricingpoint.php?pointId=<?php echo $result['id']; ?>">Update</a>  || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Point?');" href="?delpointid=<?php echo $result['id'];?>">Delete</a></td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
                                        <a href="addpricingpoint.php" class="btn btn-primary">Add</a>
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
