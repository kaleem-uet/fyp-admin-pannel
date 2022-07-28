<?php
require('top.inc.php');
?>
<?php
   session_start();
 
   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	   header("location: volunteerLogin.php");
	   exit;
   }
       	require_once ('../database.php');

            $con=  mysqli_query($link, "select * from donation");
       ?>
          

<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Donation To Approve </h4>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
                                 
								<table class="table" style="overflow-x: auto;">
									<thead>
										<tr>
											<!-- <th class="serial">
											<strong>#</strong>
											</th> -->
											<th><strong>ID</strong></th>
											<th><strong>Doner_ID</strong></th>
											<th><strong>Amount</strong></th>
											<th><strong>Doner_Name</strong></th>
											<th><strong>Phone_NO</strong></th>
											<th><strong>Gender</strong></th>
											<th><strong>Address</strong></th>
											<th><strong>Description</strong></th>
											<th><strong>Image_Name</strong></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr class="">
											 <?php

                                           while($row=  mysqli_fetch_array($con))
                                            {
                                            ?>
											<!-- <td>1</td> -->
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['doner_id']; ?></td>
											<td><?php echo $row['amount']; ?></td>
											<td><?php echo $row['doner_name']; ?></td>
											<td><?php echo $row['phone_no']; ?></td>
											<td><?php echo $row['gender']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td>
											<a href="update-status-volunteer.php?id=<?php echo $row["id"]; ?>">
												<button type="button" class="btn  btn-success">Approve</button>
											</a>
											<a href="update-status-volunteer1.php?id=<?php echo $row["id"]; ?>">	
												<button type="button" class="btn btn-danger">Discord</button>
											</a>	
											</td>

										</tr>
										<?php
             }
             ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
require('footer.inc.php')
?>