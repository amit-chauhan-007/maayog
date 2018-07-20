<?php include 'header.php';?>
<!-- video widget -->
<div class="about" style="    padding: 1em 0em;">
  <div class="container">
    <div class="about-main">
      <div class="about-top wow fadeInDownBig" data-wow-delay="0.3s">
        <h1 style="font-size: 27px;">Live Yoga</h1>
        <div id="mff_class_widget" data-text="mff_class_widget" data-title="mff class widget" title="mff class widget"></div>
      </div>
    </div>
  </div>
</div>
<script language="javascript" type="text/javascript">
  var xmlhttp;
  if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function readyStateChange(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById("mff_class_widget").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","https://widget.myflexifit.com/widget_class/widget?type=1&token=279&site_id=2",true);
  xmlhttp.send();
</script>
<!-- video widget ends-->
<!-- avinash code -->
<div class="container" style="    margin-top: -5%;margin-bottom: 5%;">
  <div class="col-md-12">
    <div class="col-md-6 well" style="padding-left: 0;padding-top: 0;padding-right: 0;">
      <h3 style="background: #25a7ad;color: #fff;padding: 10px;font-size: 19px;">Maayog offers:</h3>
      <ul style="list-style-type: square;    line-height: 36px;    color: #099df2;">
        <li>Hatha Yoga for Beginners</li>
        <li>Hatha Yoga for Lower Back Pain</li>
        <li>AshtangaYoga</li>
        <li>Power Yoga</li>
        <li>Shivananda Yoga</li>
        <li>Pranayama</li>
        <li>Yoga Workshops</li>
        <li>Yoga Teacher Training Courses</li>
      </ul></div>
      <div class="col-md-6">
        <h3>Yoga the Way of Life</h3>
        <p style="    font-size: 14px;
        padding: 10px 0px;
        text-align: justify;">One finds the mention of Yoga in the foundational Sutra of ancient Hindu philosophy and a more
        elaborate in PatanjaliYogasutra. Yoga has evolved since ancient times and taken different forms to
        cater to the needs of the changing time. However, the principles laid in Yoga Sutra of Patanjali
      continues to hold relevance in today's practice a part of which forms the basis of Ashtanga Yoga.</p>

      <p style="    font-size: 14px;
      padding: 10px 0px;
      text-align: justify;">maaYog offers the traditional yoga practice which goes in sync with the body's requirement. Every
      individual is unique and so is his or her mind and body composition. Every individual need differs
      from person to person. The beauty of Yoga is that it is not age specific, whether young or old one
      can benefit from Yoga if they practiced in the right for according to a person's ability and
      requirement thus enabling every individual to gain a holistic way of living. We cater the needs of all
    under one roof and make yoga possible for everyone with varying requirements.</p>
  </div>
</div>
</div>
<!-- avinash code ends-->
<?php include 'footer.php';?>