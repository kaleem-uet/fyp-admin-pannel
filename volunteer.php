<?php
require('top.inc.php');
?>
<?php
       	require_once ('database.php');

            $con=  mysqli_query($link, "select * from volunteer");
       ?>
                                
<div class="content pb-0">
<div class="orders">
  <div class="row">
       <div class="col-xl-12">
           <div class="card">
               <div class="card-body">
                   <h4 class="box-title">Volunteer</h4>
               </div>

   <div class="d-flex flex-row-reverse bd-highlight">
                   <div class="p-2 bd-highlight">
                       <a href="add_volunteer.inc.php" class="text-primary" >Add_Volunteer</a>
                   </div>
               </div>
               <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                        
                   <table class="table ">
                           <thead>
                               <tr>
                                   <th class="serial">#</th>
                                   <th>ID</th>
                                   <th>Full_Name</th>
                                   <th>CNIC</th>
                                   <th>Gender</th>
                                   <th>Address</th>
                                   <th></th>
                               </tr>
                           </thead>
                           <tbody>
                         
                               <tr class="">
                                  <?php

                                 while($row=  mysqli_fetch_array($con))
                                   {
                                       ?>
                               <td>1</td>
                               		<td><?php echo $row['id']; ?></td>
                               		<td><?php echo $row['full_name']; ?></td>
                               		<td><?php echo $row['cnic']; ?></td>
                               		<td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
											
                               		<td>
                               			<!-- <button type="button"  class="btn  btn-success">Active</button>
                               			<button type="button" class="btn btn-danger">Deactive</button> -->
                                        <a href="delete-volunteer.php?id=<?php echo $row["id"]; ?>">
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