<?php
require('top.inc.php');
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
											<th class="serial">
												<strong>#</strong>
											</th>
											<th><strong>ID</strong></th>
											<th><strong>Name</strong></th>
											<th><strong>Email</strong></th>
											<th><strong>Mobile</strong></th>
											<th><strong>Date</strong></th>
											<th><strong>Status</strong></th>


										</tr>
									</thead>
									<tbody>
										<tr class="">
											<td>1</td>
											<td>id</td>
											<td>abc</td>
											<td>abc@gmail.com</td>
											<td>03181932559</td>
											<td>12-27-2021</td>
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