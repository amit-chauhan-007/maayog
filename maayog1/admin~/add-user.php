<?php include 'header.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php include 'sidemenu.php';?>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <!-- <label class="col-sm-2 control-label"></label> -->
          <div class="col-sm-12">
            <select id="colorselector" class="form-control input-lg m-bot15">
              <option value="red">Individual</option>
              <option value="yellow">Corporate</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div id="red" class="row colors red">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Add User Individual
          </header>
          <div class="panel-body">
            <form class="form-horizontal " method="get">
              <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                  <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Mobile</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
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

    <div id="yellow" class="row colors yellow" style="display: none;">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Add User Corporate
          </header>
          <div class="panel-body">
            <form class="form-horizontal " method="get">             
              <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                  <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Mobile</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
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
<script type="text/javascript">
  $(function() {
    $('#colorselector').change(function(){
      $('.colors').hide();
      $('#' + $(this).val()).show();
    });
  });
</script> 
<?php include 'footer.php';?>