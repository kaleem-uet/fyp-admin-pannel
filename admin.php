<?php
require('top.inc.php');
require_once ('database.php');
            $con=  mysqli_query($link, "select * from staff");
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Admin</h4>
                    </div>

                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight">
                            <a href="add_admin.inc.php" class="text-primary" >Add Admin</a>
                        </div>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        
                                        <th class="serial">#</th>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th></th>
                                        <!-- <th>Status</th> -->
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
											<td><?php echo $row['username']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['password']; ?></td>
										
											<td>
												<!-- <button type="button" class="btn  btn-success">Active</button>
												<button type="button" class="btn btn-danger">Deactive</button> -->
                                                <a href="delete-admin.php?id=<?php echo $row["id"]; ?>">
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