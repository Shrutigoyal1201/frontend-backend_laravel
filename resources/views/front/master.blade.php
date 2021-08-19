<!--Author: Template Stock
Author URL: http://templatestock.co
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a class="active" href="index.html"><span data-hover="Home">home</span></a></li>
				<li><a href="{{url('about')}}">about</a></li>
				<li><a href="{{url('work')}}">work</a></li>
				<li><a href="{{url('services')}}">services</a></li>
				<li><a href="{{url('contact')}}">contact</a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>hello world,</h1> 
				   		 		<h2>i am <span>graphic & web designer</span></h2>
				   		 		<h2>from morocco</h2>
				   		 		</div>
				   		 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
				   	      <div class="banner_center">
				   		 		<h1>Content here,</h1> 
				   		 		<h2>Lorem <span>graphic &  designer</span></h2>
				   		 		<h2>Contrary</h2>
				   		 		</div>
				   		  </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  	<div class="banner-wrap">
				   	       <div class="banner_center">
				   		 		<h1>Lorem Ipsum ,</h1> 
				   		 		<h2>Contrary to <span>&  designer</span></h2>
				   		 		<h2>reproduced below</h2>
				   		 		</div>
				   		 </div>
					 </article>
				 </div>
				
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
    @yield('content')

<!--Footer start-->
	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			<div class="contact-header">
				<h3> contact</h3>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
			</div>
			<div class="social-icon">
				<a href="#"><i class="icon1"></i></a>
				<a href="#"><i class="icon2"></i></a>
				<a href="#"><i class="icon3"></i></a>
				<a href="#"><i class="icon4"></i></a>
				<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>
			</div>
			<div class="contact">
				<form>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value=" name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
					</div>
					<div class="col-md-8 contactgrid1">
						<textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
					</div>
					<div class="col-md-4 contactgrid2">
						<input type="submit" value="[send message]">
					</div>
				   <div class="clearfix"></div>
				</form>
			</div>
			<div class="footer-bottom">

					<p>&copy; 2015 Onepage . All rights  Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a></p>

					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>