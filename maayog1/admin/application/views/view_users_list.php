<?php $this->load->view('header'); ?>
<div class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
			<div class="card card-table">
				<div class="card-header card-header-table bg-rose">
					<i class="material-icons">assignment</i>
				</div>
				<a href="<?php echo base_url('add-user'); ?>" class="btn table-btn btn-round pull-right"><i class="fa fa-user-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Add New User<div class="ripple-container"></div></a>

				<div class="card-header-text-table bg-rose">
					<h4 class="title">Users list</h4>
				</div>
				<div class="card-body">
				  <div class="table-responsive">
					<table class="table">
					  <thead>
						<tr>
						  <th class="text-center">#</th>
						  <th>Name</th>
						  <th>Job Position</th>
						  <th>Since</th>
						  <th class="text-right">Salary</th>
						  <th class="text-right">Actions</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td class="text-center">1</td>
						  <td>Andrew Mike</td>
						  <td>Develop</td>
						  <td>2013</td>
						  <td class="text-right">€ 99,225</td>
						  <td class="td-actions text-right">
							<div class="actions-container">
								<button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
								  <i class="material-icons">person</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
								  <i class="material-icons">edit</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
								  <i class="material-icons">close</i>
								</button>
							</div>
						  </td>
						</tr>
						<tr>
						  <td class="text-center">2</td>
						  <td>Andrew Mike</td>
						  <td>Develop</td>
						  <td>2013</td>
						  <td class="text-right">€ 99,225</td>
						  <td class="td-actions text-right">
							<div class="actions-container">
								<button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
								  <i class="material-icons">person</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
								  <i class="material-icons">edit</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
								  <i class="material-icons">close</i>
								</button>
							</div>
						  </td>
						</tr>
						<tr>
						  <td class="text-center">3</td>
						  <td>Andrew Mike</td>
						  <td>Develop</td>
						  <td>2013</td>
						  <td class="text-right">€ 99,225</td>
						  <td class="td-actions text-right">
							<div class="actions-container">
								<button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
								  <i class="material-icons">person</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
								  <i class="material-icons">edit</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
								  <i class="material-icons">close</i>
								</button>
							</div>
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
<?php $this->load->view('footer'); ?>
<script>
$(document).ready(function(){
	$('.sidebar-wrapper').find('.nav li').removeClass('active');
	$('.sidebar-wrapper').find('.nav li.userManagement').addClass('active');
});
</script>
