<?php $this->load->view('header'); ?>
<div class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
			<div class="card card-form">
				<div class="card-header card-header-form bg-rose">
					<i class="material-icons">perm_identity</i>
				</div>
				<div class="card-header-text-form bg-rose">
					<h4 class="title">Add New Class</h4>
				</div>
				<div class="card-content card-content-form">
					<form id="addClass" action="" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-lg-6 col-xl-6">
								<div class="form-group label-floating">
									<label class="control-label">Class Name</label>
									<input type="text" name="ClassName" id="className" class="form-control ClassName">
								</div>
							</div><div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<div class="form-group label-floating">
									<label class="control-label">No. Of Classes</label>
									<input type="text" name="NoOfClasses" id="noOfClasses" class="form-control NoOfClasses">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<div class="form-group label-floating">
									<label class="control-label">Start Date</label>
									   <input type="text" name="StartDate" id="startDate" class="form-control datetimepicker" >
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<div class="form-group label-floating">
									<label class="control-label">End Date</label>
									   <input type="text" name="EndDate"  id="endDate" class="form-control datetimepicker">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="form-group label-floating">
									<label class="control-label">Class Detail</label>
									<input type="text" name="ClassDetail" id="classDetail" class="form-control ClassDetail">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4  col-xs-offset-4  col-sm-offset-4  col-md-offset-4  col-lg-offset-4 col-xl-offset-4 pull-right">
								<button type="submit" class="btn btn-rose Submit">Submit</button>
								<button type="button" class="btn btn-primary"  onclick=" window.history.go(-1)">Cancel</button>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
<script>
$(document).ready(function(){
	$('.sidebar-wrapper').find('.nav li').removeClass('active');
	$('.sidebar-wrapper').find('.nav li.classManagement').addClass('active');
});
</script>
