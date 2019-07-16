		<!-- /.Navbar  Static Side -->
			<div class="control-sidebar-bg"></div>
			<!-- Page Content -->
			<div id="page-wrapper">
				<!-- main content -->
				<div class="content">
					<!-- Content Header (Page header) -->
					<div class="content-header">
						<div class="header-icon">
							<i class="pe-7s-box1"></i>
						</div>
						<div class="header-title">
							<h1>View Orders</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Orders</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Orders</h4>
										<!-- <?php 
											if ($permission['created'] == '1') {
										?> -->
										<a href="<?php echo base_url('admin/users/create') ?>"><button class="btn btn-info pull-right">Add Users</button></a>
										<!-- <?php } ?> -->
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Id</th>
													<th>Topic</th>
													<th>Type of document</th>
													<th>No of Pages</th>
													<th>Action</th>
													<!-- <?php 
														if ($permission['edit'] == '1' || $permission['deleted'] == '1'){
													?> -->
													<!-- <th>Action</th> -->
												<!-- 	<?php } ?> -->
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($order_detail as $order) {
										    	?>
												<tr>
													<td><?php echo $order['id'] ?></td>
													<td><?php echo $order['topic'] ?></td>
													<td><?php echo $order['doctype'] ?></td>
													<td><?php echo $order['no_of_pages'] ?></td>
													
													<td>
														
														<a href="<?php echo base_url() ?>admin/order_detail/edit/<?php echo 
														$order['id'] ?>"><img src="<?php echo base_url() ?>assets/record1.png" title="View Order" alt="View Order" width="35" height="35"></a>

														
		                                                <a href="<?php echo base_url() ?>admin/order_detail/delete/<?php echo         
		                                                $order['id'] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="35" height="35"></a>
		                                               
	                                                </td>
	                                               
												</tr>
												<?php } ?>
											</tbody>
										</table>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="height: 450px;"></div>
				</div> <!-- /.main content -->
			</div><!-- /#page-wrapper -->
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->






