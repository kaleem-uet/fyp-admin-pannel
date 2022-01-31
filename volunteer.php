<?php
require('top.inc.php');
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="">
											<td>1</td>
											<td>id</td>
											<td>abc</td>
											<td>abc@gmail.com</td>
											<td>03181932559</td>
											
											<td>
												<button type="button" class="btn  btn-success">Active</button>
												<button type="button" class="btn btn-danger">Deactive</button>
											</td>

										</tr>
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