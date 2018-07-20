		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul>
						<li>
							<a href="<?php echo base_url('dashboard'); ?>">
								Home
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>">
								Contact Us
							</a>
						</li>
						<li>
							<a href="#">
								About Us
							</a>
						</li>
					</ul>
				</nav>
				<p class="copyright pull-right">
					&copy;
					<script>
						document.write(new Date().getFullYear())
					</script>
					<a href="" style="color:black;">Provided by</a>, Purpledot
				</p>
			</div>
		</footer>
	</div>
</div>
</body>
<input type="hidden" id="base_url" value="<?php echo  base_url(); ?>">






<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->

<script src="<?php echo base_url(); ?>assets/js/popper.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap-material-design.min.js" type="text/javascript"></script>

<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap-wizard.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap-selectpicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.min.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.sharrre.js"></script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<script src="https://cdn.rawgit.com/kybarg/mdl-selectfield/mdl-menu-implementation/mdl-selectfield.min.js"></script>

<script>
 $(document).ready(function() {
		var base_url = $('#base_url').val();
 });
 
 $("body").on("click",".alert .close", function() {
	$(this).closest('div').hide();
});

// $('body').on('mouseenter','.dropdown.NotificationIcon',function(){
	// $(this).addClass('open');
	// console.log('sneha');
// });


// $(document).ready(function() {

    // $('input.datetimepicker').datetimepicker();
// });


// $(document).ready(function() {

    // $('input.datepicker').datepicker();
// });

// $('.datetimepicker').on('blur', function(){
	// $date = $(this).val();
	// if($date != ''){
	 // $(this).closest('div').removeClass('is-empty');
	// }else{
		 // $(this).closest('div').addClass('is-empty');
	// }
// });

// //REST API DOWNLOADED CODE FROM CREATIVE TIM
  // $(document).ready(function(){
    
    
    // $('#facebook').sharrre({
  // share: {
    // facebook: true
  // },
  // enableHover: false,
  // enableTracking: false,
  // enableCounter: false,
  // click: function(api, options){
    // api.simulateClick();
    // api.openPopup('facebook');
  // },
  // template: '<i class="fab fa-facebook-f"></i> Facebook',
  // url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
// });

    // $('#google').sharrre({
  // share: {
    // googlePlus: true
  // },
  // enableCounter: false,
  // enableHover: false,
  // enableTracking: true,
  // click: function(api, options){
    // api.simulateClick();
    // api.openPopup('googlePlus');
  // },
  // template: '<i class="fab fa-google-plus"></i> Google',
  // url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
// });

    // $('#twitter').sharrre({
  // share: {
    // twitter: true
  // },
  // enableHover: false,
  // enableTracking: false,
  // enableCounter: false,
  // buttons: { twitter: {via: 'CreativeTim'}},
  // click: function(api, options){
    // api.simulateClick();
    // api.openPopup('twitter');
  // },
  // template: '<i class="fab fa-twitter"></i> Twitter',
  // url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
// });

    
    // var _gaq = _gaq || [];
// _gaq.push(['_setAccount', 'UA-46172202-1']);
// _gaq.push(['_trackPageview']);

// (function() {
    // var ga = document.createElement('script');
    // ga.type = 'text/javascript';
    // ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    // var s = document.getElementsByTagName('script')[0];
    // s.parentNode.insertBefore(ga, s);
// })();

    // // Facebook Pixel Code Don't Delete
// !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
// n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
// n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
// t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
// document,'script','//connect.facebook.net/en_US/fbevents.js');

// try{
  // fbq('init', '111649226022273');
  // fbq('track', "PageView");

// }catch(err) {
  // console.log('Facebook Track Error:', err);
// }

  // });
</script>
<noscript>
  <img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
/>

</noscript>
<script>
//Calendar remove scroll code 
  // $(document).ready(function(){
    // // initialise Datetimepicker and Sliders
    // md.initFormExtendedDatetimepickers();
    // if($('.slider').length != 0){
      // md.initSliders();
    // }
  // });
</script>
</html>