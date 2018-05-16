<?php
include'master/root/notification.php';
include'master/config/user_controller.php';
include'master/sweetalert/sweetalert.php';
$query    =new Database();
$kontak   =$query->tampil_kontak();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Lapas Perempuan Medan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!--start-header-->
   <div class="header" id="home">
	 <div class="content white">
		<nav class="navbar navbar-default" role="navigation">
		   <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><h1>Motive<span> Mag</span></h1> </a>
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					 <li><a href="fashion.html">Fashion</a></li>
						<li><a href="sports.html">Sports</a></li>
				    <li class="dropdown">
						<a class="active" href="entertainment.html" class="dropdown-toggle" data-toggle="dropdown">Entertainment<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="entertainment.html">Movies</a></li>
							<li class="divider"></li>
							<li><a href="entertainment.html">Another action</a></li>
							<li class="divider"></li>
							<li><a href="articles.html">Articles</a></li>
							<li class="divider"></li>
							<li><a href="entertainment.html">celebrity</a></li>
							<li class="divider"></li>
							<li><a href="entertainment.html">One more separated link</a></li>
						</ul>
					  </li>
					  <li><a href="typography.html">Politics</a></li>
					  <li class="dropdown">
						<a href="business.html" class="dropdown-toggle" data-toggle="dropdown">Business<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-2">
							<div class="row">
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
										<li><a href="business.html">Action</a></li>
										<li class="divider"></li>
										<li><a href="business.html">bulls</a></li>
									    <li class="divider"></li>
										<li><a href="business.html">markets</a></li>
										<li class="divider"></li>
										<li><a href="business.html">Reviews</a></li>
										<li class="divider"></li>
										<li><a href="typography.html">Short codes</a></li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
									   <li><a href="#">features</a></li>	
										<li class="divider"></li>
										<li><a href="#">Movies</a></li>
									    <li class="divider"></li>
										<li><a href="#">sports</a></li>
										<li class="divider"></li>
										<li><a href="#">Reviews</a></li>
										<li class="divider"></li>
										<li><a href="#">Account</a></li>
									</ul>
								</div>
							</div>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="account.html">My Account</a></li>
				</ul>
			</div>
			<!--/.navbar-collapse-->
		 </div>
	</nav>
	 <!--/.navbar-->
  </div>
 </div>
   <!--/start-banner-->
    <!--//end-banner-->
 <!--/start-main-->
   <div class="main-content">
	   <div class="container">
	        <div class="mag-inner">
			    <div class="col-md-8 mag-innert-left">

				<!--business-->
					 <div class="technology">
			              <h3 class="tittle"><i class="glyphicon glyphicon-music"></i>Video</h3>
						    <div class="business-inner">
						    	<?php foreach ($query->tampil_video() as $row) {?>
							  <div class="col-md-6 m-albums">
							     <?php echo $row['video'];?>
								  <a href="#" class="ma"> <?php echo $row['judul'];?></a>
								 
							  </div>
							  <?php } ?>
							  	<div class="clearfix"></div>
						    </div>
						 </div>
				   <!--//business-->

		
					 <!--//sports-->
				</div>
<!-- SIDEBAR KANAN -->
				 <div class="col-md-4 mag-inner-right">
				  <div class="connect">
				    <h4 class="side" >SOSIAL MEDIA</h4>
					  <ul class="stay">
					  	<?php foreach ($query->tampil_sosmed() as $row) { ?>
							<a target="_blank" href="<?php echo $row['link'];?>">
							 <img src="master/root/<?php echo $row['icon'];?>">
							</a>
                        <?php }?>
						
					  </ul>
			      </div>
				    <div class="modern">
				      <h4 class="side">FEATURED VIDEO</h4>
					  <div id="example1">
			 	        <div id="owl-demo" class="owl-carousel text-center">
			 	        <?php $no=1; foreach ($query->tampil_video() as $row) {?>
					      <div class="item">
							<?php echo $row['video'];?>
					     </div>
					     <?php } ?>
						
				</div>
				</div>
				<!-- requried-jsfiles-for owl -->
										<script src="js/owl.carousel.js"></script>
										  <script>
										  $(document).ready(function() {
											   $("#owl-demo").owlCarousel({
												items :1,
												lazyLoad : true,
												autoPlay : false,
												navigation : true,
												navigationText :  true,
												pagination : false,
												responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
												});
										  });
										</script>

						<!-- //requried-jsfiles-for owl -->
						</div>
						   <!--/start-sign-up-->
						     <div class="sign_main">
							       <h4 class="side">Form Pengaduan</h4>
								   <div class="sign_up">
										<p class="sign">Silahkan Login Untuk Membuat Pengaduan</p>
										<form action="master/root/user_proses.php?aksi=user_login" method="post">
											<input type="text" name="username" class="form-control" required placeholder="Username">
											<input type="password" name="password" required class="form-control" placeholder="Password">
											<input type="submit" name="login" value="login">
										</form>
										<!-- <form id="form-user" method="post">
											<input type="text" class="text" required value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
											<input type="password" required class="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password Address';}">
											<input type="submit" value="submit">
										</form> -->
										<p class="spam">Belum punya AKUN ? <a href="register.php">Daftar</a></p>
									</div>
							</div>
							  <!--//end-sign-up-->
							 <h4 class="side">Pengumuman</h4>
								<div class="edit-pics">
							      <div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f4.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f1.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f1.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f4.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
									</div>
							<!--//edit-pics-->
							<!--/top-news-->
								<!-- <div class="top-news">
								 <h4 class="side">Top News</h4>
							      <div class="top-inner">
								     <div class="top-text">
										 <a href="single.html"><img src="images/slp.jpg" class="img-responsive" alt=""/></a>
										 <h5 class="top"><a href="single.html">POLL: HOW LONG DO YOU OFTEN SLEEP AT NIGHT</a></h5>
										 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
								     </div>
									  <div class="top-text two">
										 <a href="single.html"><img src="images/dest.jpg" class="img-responsive" alt=""/></a>
										 <h5 class="top"><a href="single.html">YOU’VE NEVER SEEN VIVID SYDNEY QUITE LIKE THIS</a></h5>
										 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
								     </div>
								  </div>
	                            </div> -->
							<!--//top-news-->
						</div>
<!-- END SIDEBAR KANAN -->
						<div class="clearfix"></div>
					</div>
	       </div>
      </div>
 <!--//end-main-->
 <!--/start-footer-section-->
				<div class="footer-section">
			   <div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
						<h4>KONTAK KAMI</h4>
						  <div class="editor-pics">
							 
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">Phone</a></h5>
								      <div class="td-post-date"><?php echo $kontak['phone'];?></div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
				
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">Fax</a></h5>
								      <div class="td-post-date"><?php echo $kontak['fax'];?></div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
		
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">Email</a></h5>
								      <div class="td-post-date"><?php echo $kontak['email'];?></div>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-8 footer-grid">
							<h4>LOKASI KAMI</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.4682665380648!2d98.6103301441864!3d3.6164883052296117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43c4965e7c43a28b!2sLembaga+Permasyarakatan+(Lapas)+Anak+Kelas+I+Tanjung+Gusta+Medan!5e0!3m2!1sid!2sid!4v1523971849858" width="100%" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
								<div class="clearfix"></div>
						</div>
		<!-- 				<div class="col-md-4 footer-grid">
								<h4>POPULAR CATEGORY</h4>
								<ul class="td-pb-padding-side">
									<li><a href="#">Architecture<span class="td-cat-no">15</span></a></li>
									<li><a href="#">New look 2015<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Gadgets<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Mobile and Phones<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Recipes<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Decorating<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Interiors<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Street fashion<span class="td-cat-no">13</span></a></li>
									<li><a href="#">Vogue<span class="td-cat-no">13</span></a></li>
								</ul>
								<div class="clearfix"></div>
						</div> -->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--//end-footer-section-->
			<!--/start-copyright-section-->
				<div class="copyright">
						  <p>&copy; 2018 Lapas Perempuan Medan </p>
					</div>


				<!--start-smoth-scrolling-->
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->
<!-- slider -->
<script src="slider/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<!-- // slider -->

</body>
</html>