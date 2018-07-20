<?php include 'header.php';?>
<!--contact start here-->
<div class="contact">
  <div class="contact-main">
    <div class="container">
      <div class="contact-top wow fadeInDownBig" data-wow-delay="0.3s">
        <h1 style="font-size:27px;">Contact Us</h1>
        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>-->
      </div>
      <div class="contact-bottom">
        <form>
          <div class="col-md-7 contact-left wow slideInLeft" data-wow-delay="0.3s">
            <p>Name</p>
            <input type="text" name="uname" id="uname" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <p id="errormsgs1"></p>
            <p>E-mail</p> 
            <input type="text" name="uemail" id="uemail" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <p id="errormsgs2"></p>
            <p>Subject</p>
            <input type="text" name="subject" id="subject" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <p id="errormsgs3"></p>
            <p>Phone</p>
            <input type="text" name="phone" id="phone" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <p id="errormsgs4"></p>
          </div>
          <div class="col-md-5 contact-right wow slideInRight" data-wow-delay="0.3s">
            <p>Messages</p>
            <textarea name="message" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"  > </textarea>
            <p id="errormsgs5"></p>
            <input type="button" value="Send" id="submitbtn">
          </div>
          <div class="clearfix"> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
  <div class="container">
    <div class="col-md-7 map-left wow slideInLeft" data-wow-delay="0.3s">
      <h2>Contact Info</h2>
      <!--  <P>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</P> -->
      <div class="addre">
        <h4>Address</h4>
        <p>Address : Bangalore</p>
        <!--  <p>New Street : Letraset sheets </p> -->
        <p>Ph : +91 9886385285</p>
        <p>Email : <a href="mailto:maya@maayog.com">maya@maayog.com</a></p>
      </div>
    </div>
    <div class="col-md-5 map-right wow slideInRight" data-wow-delay="0.3s">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1415253431785"> </iframe>
    </div>
  </div>
</div>
<!--map end here-->
<?php include 'footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

    $("#submitbtn").click(function(){
      var uname = $("#uname").val();
      var uemail= $("#uemail").val();
      var subject= $("#subject").val();
      var phone= $("#phone").val();
      var message= $("#message").val();

      if(uname == '')
      {
        $("#errormsgs1").html("Please Enter Name");
        $("#uname").css("border","1px solid #f00");
        $("#uname").focus();
        return false;
      }
      if(uemail == '')
      {
        $("#errormsgs2").html("Please Enter Email");
        $("#uemail").css("border","1px solid #f00");
        $("#uemail").focus();
        return false;
      }

      if(subject == '')
      {
        $("#errormsgs3").html("Please Enter Subject");
        $("#subject").css("border","1px solid #f00");
        $("#subject").focus();
        return false;
      }

      if(phone == '')
      {
        $("#errormsgs4").html("Please Enter Phone Number");
        $("#phone").css("border","1px solid #f00");
        $("#phone").focus();
        return false;
      }
      if(message == '')
      {
        $("#errormsgs5").html("Please Enter Message");
        $("#message").css("border","1px solid #f00");
        $("#message").focus();
        return false;
      }
      $.ajax({
        url :"mayogcontactmail.php",
        type:"post",
        data:{uname : uname,uemail : uemail,subject : subject,phone : phone,message : message},
        success:function(msg)
        {
          alert(msg);
          location.reload();
        }
      });
    });
  });

</script>