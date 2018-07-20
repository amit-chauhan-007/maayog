<?php include 'header.php';?>
<link href="css/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<?php include 'sidemenu.php';?>
<section id="main-content">
  <section class="wrapper">
    <div id="red" class="row colors red">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Add Classes
          </header>
          <div class="panel-body">
            <form class="form-horizontal " method="get">
              <div class="form-group">
                <label class="col-sm-2 control-label">Class Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Class Detail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label">No. Of Classes</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">Start Date</label>
                <div class="input-group date form_datetime col-md-5" data-date="2018-01-17T10:47:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                  <input class="form-control" size="16" type="text" value="" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" /><br/>
              </div>
              <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">End Date</label>
                <div class="input-group date form_datetime col-md-5" data-date="2018-01-17T10:47:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                  <input class="form-control" size="16" type="text" value="" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" /><br/>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>
<script type="text/javascript" src="js/datepicker/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/datepicker/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
  $('.form_datetime').datetimepicker({
//language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
forceParse: 0,
showMeridian: 1
});
  $('.form_date').datetimepicker({
    language:  'fr',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
  });
  $('.form_time').datetimepicker({
    language:  'fr',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
  });
</script>


