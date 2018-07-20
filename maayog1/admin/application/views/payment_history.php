<?php $this->load->view('header'); ?>
<div class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
			<div class="card card-table">
				<div class="card-header card-header-table bg-rose">
					<i class="material-icons">assignment</i>
				</div>
				<div class="card-header-text-table bg-rose">
					<h4 class="title">Payment History</h4>
				</div>
				<div class="card-body">
				  <div class="table-responsive">
					<table class="table">
					  <thead>
						<tr>
						  <th class="text-center">#</th>
						  <th>Name</th>
						  <th>Email</th>
						  <th>Mobile</th>
						  <th class="text-right">Amount</th>
						  <th class="text-right">Payment Type</th>
						  <th class="text-right">Status</th>
						  <th class="text-right">Action</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td class="text-center">1</td>
						  <td>Andrew Mike</td>
						  <td>abc@gmail.com</td>
						  <td>8945367623</td>
						  <td class="text-right">€ 99,225</td>
						  <td class="text-right">Credit Card</td>
						  <td class="text-right">Success</td>
						  <td class="td-actions text-right">
							<div class="actions-container">
								<a href="javascript:void(0);"rel="tooltip" class="btn btn-info" data-original-title="" title="">
								  <i class="material-icons">person</i>
								</a>
							</div>
						  </td>
						</tr>
						<tr>
						  <td class="text-center">1</td>
						  <td>Andrew Mike</td>
						  <td>abc@gmail.com</td>
						  <td>8945367623</td>
						  <td class="text-right">€ 99,225</td>
						  <td class="text-right">Debit Card</td>
						  <td class="text-right">Fail</td>
						  <td class="td-actions text-right">
							<div class="actions-container">
								<a href="javascript:void(0);"rel="tooltip" class="btn btn-info" data-original-title="" title="">
								  <i class="material-icons">person</i>
								</a>
							</div>
						  </td>
						</tr>
						<tr>
						  <td class="text-center">1</td>
						  <td>Andrew Mike</td>
						  <td>abc@gmail.com</td>
						  <td>8945367623</td>
						  <td class="text-right">€ 99,225</td>
						  <td class="text-right">Net Baning</td>
						  <td class="text-right">Success</td>
						  <td class="td-actions text-right">
							<div class="actions-container">
								<a href="javascript:void(0);"rel="tooltip" class="btn btn-info" data-original-title="" title="">
								  <i class="material-icons">person</i>
								</a>
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
	$('.sidebar-wrapper').find('.nav li.paymentHistory').addClass('active');
});
</script>
