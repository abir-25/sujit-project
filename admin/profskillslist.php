<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Professional Skills List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Resume Option</li>
                        <li class="breadcrumb-item active">Professional Skills List</li>
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
                                        <h3 class="h4">Professional Skills</h3>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delProfSkillid']))
	{
		$delProfSkillid = $_GET['delProfSkillid'];
		
		$delquery = "delete from tbl_prof_skills where id = '$delProfSkillid'";
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
                                                    <th width="15%">No.</th>
                                                    <th width="20%">Skill Type</th>
                                                    <th width="30%">Skill Name</th>
                                                    <th width="15%">Percentage</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_prof_skills order by id asc";	
	$post = $db->select($query);				
	if($post)
	{
		$i= 0;
		while($result = $post->fetch_assoc())
		{
			$i++;
            $skill_type_id = $result["type"];
            $query1 = "select * from tbl_skill_type order by id asc";				
            $post1 = $db->select($query1);				
            if($post1)
            {
                while($result1 = $post1->fetch_assoc())
                {
                    if($skill_type_id == $result1["id"])
                        $skill_type = $result1["title"];
                }
            }
?>
                                                <tr>
                                                    <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                                                    
                                                    <td scope="row" style="vertical-align:middle"><?php echo $skill_type; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['title']; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['percentage']; ?></td>
													
							
                                                    <td style="vertical-align:middle"><a class="actionLink" href="editprofsKills.php?profSkillId=<?php echo $result['id']; ?>">Update</a>  || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Professional Skill?');" href="?delProfSkillid=<?php echo $result['id'];?>">Delete</a></td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
                                        <a href="addprofskills.php" class="btn btn-primary">Add</a>
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
