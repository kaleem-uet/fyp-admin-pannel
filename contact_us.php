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
		   $con=  mysqli_query($link, "select * from contact_us");
	  ?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Contact Us </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <!-- <th class="serial">#</th> -->
							   <th>ID</th>
							   <th>Full Name</th>
							   <th>Email</th>
							   <th>Address</th>
							   <th>Comments</th>
							   <th></th>
							   <!-- <th>Date</th> -->
							   <!-- <th>Replay</th> -->
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
											<td><?php echo $row['full_name']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><?php echo $row['comments']; ?></td>
											<!-- <td>12-27-2021</td> -->
											<td>
												<!-- <button type="button" class="btn  btn-success">Active</button>
												<button type="button" class="btn btn-danger">Deactive</button> -->
												<a href="delete-contactus.php?id=<?php echo $row["id"]; ?>">
												  <button type="button" class="btn btn-danger">Delete</button>
											  </a>
											</td>

										</tr>
										<?php
											  }?>
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