<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>

            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Tables</h2>
                    </div>
                </header>
<?php
	if(isset($_GET['billid']))
	{
		$billid = $_GET['billid']; 
		
		$query = mysql_query("select * from tbl_signup where id='$billid'");
		 while($result = mysql_fetch_array($query))
		 {
			 $user_id = $result['id'];
			 $username = $result['username'];
		 }
	}
	else
	{
		//header("Location:generatebill.php");
	}
?>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Bill List</li>
                    </ul>
                </div>
                <section class="tables">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><!--<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>--></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Add Bill Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$unit 	 = $_POST['unit'];
		$taka 	 = $_POST['taka'];
		$vat 	 = $_POST['vat'];
		$others  = $_POST['others'];
		$month 	 = $_POST['month'];
		$year 	 = $_POST['year'];
		 
		if($unit == "" || $taka == "" || $month == "" || $year == "")
		{
			echo "<span class='error'>Error...Field must not be empty !!</span>";
		}
		
		else
		{
			$totalTaka = ($unit * $taka) + $vat + $others;
			
			$query = mysql_query("select * from tbl_bill where user_id='$billid' and year='$year' and month='$month'");
			$row = mysql_num_rows($query);
			
			if($row>0)
			{
				echo "<span class='error'>Error...Bill is already Generated for that Month!!</span>";
			}
			
			else
			{
				$inserted_rows = mysql_query("INSERT INTO tbl_bill(user_id, username, unit, taka, month, year) VALUES('$user_id', '$username', '$unit', '$totalTaka', '$month', '$year')");
							
				if ($inserted_rows) 
				{
					echo "<span class='success'>Bill Generated Successfully!</span>";
					//echo "<script>window.location = 'infolist.php'; </script>";
				}
				else 
				{
					echo "<span class='error'>Error...Bill not Generated!!</span>";
				}
			}
			

		}
	
	}
?>										
							
			
<?php
	$query = mysql_query("select * from tbl_signup where id='$billid'");
		 while($result = mysql_fetch_array($query))
		 {
			 $user_id = $result['id'];
			 $username = $result['username'];
?>
											<div style="width:100%; text-align:center;">
												<img src="<?php echo $result['image']; ?>" alt="" style="width: 160px; height: 170px;"/>
											</div>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="15%">User Name</th>
                                                        <th width="12%">Add Unit</th>
                                                        <th width="12%">Per Unit (Tk)</th>
                                                        <th width="12%">Vat</th>
                                                        <th width="12%">Others</th>
                                                        <th width="17%">Month</th>
                                                        <th width="10%">Year</th>
                                                        <th width="10%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><?php echo $result['username']; ?></td>
                                                        <td><input type="text" class="billText" name="unit"></td>
                                                        <td><input type="text" class="billText" name="taka"></td>
                                                        <td><input type="text" class="billText" name="vat"></td>
                                                        <td><input type="text" class="billText" name="others"></td>

                                                        <td>
                                                            <select class="billText1" name="month">
                                                            <option value=""></option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                            </select>
                                                        </td>
														
														<td>
                                                            <select class="billText" name="year">
                                                            <option value=""></option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                            <option value="2034">2034</option>
                                                            <option value="2035">2035</option>
                                                            <option value="2036">2036</option>
                                                            <option value="2037">2037</option>
                                                            <option value="2038">2038</option>
                                                            <option value="2039">2039</option>
                                                            <option value="2040">2040</option>
                                                            
                                                            
                                                            </select>
                                                        </td>
                                                        
                                                        <td> <button type="submit" class="btn btn-secondary">Generate Bill</button></td>
                                                    </tr>
<?php } ?>													
													
													
													
                                                </tbody>
                                            </table>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
</body>

</html>
