<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
            <div class="content">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
						<div class="card card-form">
							<div class="card-header card-header-form bg-rose">
								<i class="material-icons">perm_identity</i>
							</div>
							<div class="card-header-text-form bg-rose">
								<h4 class="title">Contact Us -
								<small>Write Your Message</small></h4>
							</div>
							<div class="card-content card-content-form">
								<form id="contactForm" action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label class="control-label">FirstName</label>
												<input type="text" name="FirstName" class="form-control FirstName">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label class="control-label">LastName</label>
												<input type="text" name="LastName" class="form-control LastName">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label class="control-label">Email Address</label>
												<input type="email" name="UserEmail" class="form-control UserEmail">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label class="control-label">Phone Number</label>
												<input type="text" name="PhoneNumber" class="form-control PhoneNumber">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label class="control-label">Subject</label>
												<input type="text" name="Subject"class="form-control Subject">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label class="control-label">Message</label>
												<textarea name="Message"class="form-control Message"></textarea>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<button type="submit" name="Submit" class="btn btn-rose  pull-right">Submit</button>
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

