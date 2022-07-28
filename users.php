<?php
require('top.inc.php');
?>
<?php
   session_start();
 
   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	   header("location: login.php");
	   exit;
   }
	require_once ('database.php');
            $con=  mysqli_query($link, "select * from users");
       ?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Users </h4>
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
											<th><strong>User Name</strong></th>
											<th><strong>Email</strong></th>
											<th><strong>Password</strong></th>
											<th></th>
											<!-- <th><strong>Date</strong></th> -->
											<!-- <th><strong>Status</strong></th> -->
											

										</tr>
									</thead>
									<tbody>
										<tr class="">
											<?php

                                              while($row=  mysqli_fetch_array($con))
                                              {
                                            ?>
											
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['username']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['password']; ?></td>
											<!-- <td>12-27-2021</td> -->
											<td>
												<!-- <button type="button" class="btn  btn-success">Active</button> -->
												<!-- <button type="button" class="btn btn-danger">Deactive</button> -->
												<a href="delete-users.php?id=<?php echo $row["id"]; ?>">
												   <button type="button" class="btn btn-danger">Delete</button>
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
	require('footer.inc.php');
	?>