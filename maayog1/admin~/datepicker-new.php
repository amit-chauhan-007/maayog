<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/locale/nl.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<body>
	<div class="container">
	<div class="row">
		<div class="col-xs-4">
			<h3>Date</h3>
			<div class="form-group">
				<div class="input-group datepicker">
					<input type="text" class="form-control" readonly>
					<span class="input-group-addon">
						<span class="fa fa-calendar"></span>
					</span>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<h3>Time</h3>
			<div class="form-group">
				<div class="input-group timepicker">
					<input type="text" class="form-control" readonly>
					<span class="input-group-addon">
						<span class="fa fa-clock-o"></span>
					</span>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<h3>Date & Time</h3>
			<div class="form-group">
				<div class="input-group datetimepicker">
					<input type="text" class="form-control" readonly>
					<span class="input-group-addon">
						<span class="fa fa-calendar"></span>
						+
						<span class="fa fa-clock-o"></span>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	var defaults = {
	calendarWeeks: true,
	showClear: true,
	showClose: true,
	allowInputToggle: true,
	useCurrent: false,
	ignoreReadonly: true,
	minDate: new Date(),
	toolbarPlacement: 'top',
	locale: 'nl',
	icons: {
		time: 'fa fa-clock-o',
		date: 'fa fa-calendar',
		up: 'fa fa-angle-up',
		down: 'fa fa-angle-down',
		previous: 'fa fa-angle-left',
		next: 'fa fa-angle-right',
		today: 'fa fa-dot-circle-o',
		clear: 'fa fa-trash',
		close: 'fa fa-times'
	}
};

$(function() {
	var optionsDatetime = $.extend({}, defaults, {format:'DD-MM-YYYY HH:mm'});
	var optionsDate = $.extend({}, defaults, {format:'DD-MM-YYYY'});
	var optionsTime = $.extend({}, defaults, {format:'HH:mm'});
	
	$('.datepicker').datetimepicker(optionsDate);
	$('.timepicker').datetimepicker(optionsTime);
	$('.datetimepicker').datetimepicker(optionsDatetime);
});
</script>















