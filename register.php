<?php
include'master/root/notification.php';
include'master/config/user_controller.php';
include'master/sweetalert/sweetalert.php';
$query=new Database();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Motive Mag a Entertainment Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
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
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/lapas1/"><h1>Motive<span> Mag</span></h1> </a>
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
						<li><a href="/lapas1/">Beranda</a></li>
				    <li class="dropdown">
						<a href="entertainment.html" class="dropdown-toggle" data-toggle="dropdown">Berita<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="kategori.php?kategori=umum">Umum</a></li>
							<li class="divider"></li>
							<li><a href="kategori.php?kategori=kegiatan">Kegiatan</a></li>
							<li class="divider"></li>
						</ul>
					  </li>
						<li><a href="kategori.php?kategori=lainnya">Lainnya</a></li>
						<li><a href="video.php">Video</a></li>
						<li><a href="gallery.php">Galery</a></li>
						<li><a href="produk.php">Kerajinan</a></li>
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
				</ul>
			</div>
			<!--/.navbar-collapse-->
		 </div>
	</nav>
	 <!--/.navbar-->
  </div>
 </div>
  <!--/start-banner-->
<!--   <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">My Account</h2>
        </div>
  </div> -->
   <!--//end-banner-->
<!--account-->
   <div class="account">
	  <div class="container">
	       <div class="account-bottom">
				<div class="col-md-6 account-left">
					<form id="form-user" method="POST">
					<div class="account-top heading">
						<h3>DAFTAR</h3>
					</div>
					<div class="address">
						<span>Nama Lengkap</span>
						<input type="text" class="form-control" required name="nama">
					</div>
					<div class="address">
						<span>Alamat</span>
						<input type="text" class="form-control" required name="alamat">
					</div>
					<div class="address">
						<span>No.Hp</span>
						<input type="text" class="form-control" required name="hp" >
					</div>
					<div class="address">
						<span>Username</span>
						<input type="text" class="form-control" required name="username" placeholder="Digunakan sebagai nama pengguna ketika Login">
					</div>
					<div class="address">
						<span>Password</span>
						<input type="password" class="form-control" name="password" required placeholder="Digunakan Sebagai password Ketika Login">
					</div>
					<div class="address new">
						<input type="submit" value="submit">
					</div>
					</form>
				</div> 
				<div class="col-md-6 account-left second">


					<form action="master/root/user_proses.php?aksi=user_login" method="post">
						<div class="account-top heading">
							<h3>LOGIN</h3>
						</div>
						<div class="address">
							<span>Username</span>
							<input type="text" name="username" class="form-control" required placeholder="Username">
						</div>
						<div class="address">
							<span>Password</span>
							<input type="password" name="password" required class="form-control" placeholder="Password">
						</div>
						<div class="address">
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" name="login" value="login">
						</div>
					</form>
					  </div>
				 </div>
				<div class="clearfix"></div>
			</div>
	  </div>


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
						  <p>&copy; 2018 Lembaga Pemasyarakatan Wanita Medan </p>
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