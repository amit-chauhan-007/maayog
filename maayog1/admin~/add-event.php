<?php include 'header.php';?>
<link href="css/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>
<?php include 'sidemenu.php';?>
<section id="main-content">
  <section class="wrapper">
    <div id="red" class="row colors red">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Add event
          </header>
          <div class="panel-body">
            <form class="form-horizontal " method="get">
              <div class="form-group">
                <label class="col-sm-2 control-label">Event Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Profile Pic</label>
                <div class="col-sm-10">
                    <input type="file" name="pic" accept="image/*">
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
                <label class="col-sm-2 control-label">Location</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sponsered by</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Organised by</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Partners</label>
                <div class="col-sm-10">
                  <div class="row">
                    <form action="#" method="post" enctype="multipart/form-data">
                      <div class="col-md-6">
                        <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Multiple Image"/>
                      </div>
                    </form>
                  </div>
                  <div class="row m-t-2 m-b-2" id="image_preview"></div>
                </div>
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
<script type="text/javascript" src="js/datepicker/bootstrap.min.js"></script>
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


