<?php
include'master/root/notification.php';
include'master/config/user_controller.php';
include'master/sweetalert/sweetalert.php';
$query    =new Database();
$id=$_GET['id'];
$row=$query->tampil_produk_where($id);
// var_dump($row);

$waktu   =$row['date'];
$date    =explode('-', $waktu);
$tahun   =$date[0];
$bulan   =$date[1];
$tanggal =substr($date[2],0,2);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Motive Mag a Entertainment Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
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
						<li><a href="gallery.php">Galery</a></li>
						<li><a href="video.php">Video</a></li>
						<li><a href="produk.php">Kerajinan</a></li>
				</ul>
			</div>
			<!--/.navbar-collapse-->
		 </div>
	</nav>
	 <!--/.navbar-->
  </div>
 </div>
   <!--/start-banner-->
   <!--  <div class="banner two">
       <div class="container"> 
	           <h2 class="inner-tittle">Single Page</h2>
       </div>
    </div> -->
    <!--//end-banner-->
 <!--/start-main-->
   <div class="main-content">
	   <div class="container">
	        <div class="mag-inner">
			    <div class="col-md-8 mag-innert-left">
	                            <div class="banner-bottom-left-grids">
											<div class="single-left-grid">
												<img src="master/root/<?php echo $row['photo'];?>" alt="">
												<h4><?php echo $row['nama'];?></h4>
												<p class="text"><?php echo $row['keterangan'];?></p>
												<div class="single-bottom">
													<ul>
														<li><a>Terbit</a> <a><?php echo $tanggal.'/'.$bulan.'/'.$tahun;?></a></li>
													
														
													</ul>
												</div>
											</div>
									</div>
									<!-- late post more -->
									<!-- <div class="post">
									   <a href="#"><h3>Latest Posts</h3></a>
									        <div class="post-grids">
												<div class="col-md-3 post-left">
													<a href="single.html"><img src="images/f1.jpg" alt=""></a>
												</div>
												<div class="col-md-9 post-right">
													<h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
													<p class="comments">August 28 2015, <a href="#">8 Comments</a></p>
													<p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur......</p>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="post-grids">
												<div class="col-md-3 post-left">
													<a href="single.html"><img src="images/f2.jpg" alt=""></a>
												</div>
												<div class="col-md-9 post-right">
													<h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
													<p class="comments">August 30 2015, <a href="#">8 Comments</a></p>
													<p class="text">Lorem ipsum ex vix Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur... illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="post-grids">
												<div class="col-md-3 post-left">
													<a href="single.html"><img src="images/f3.jpg" alt=""></a>
												</div>
												<div class="col-md-9 post-right">
													<h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
													<p class="comments">Sep 4 2015, <a href="#">8 Comments</a></p>
													<p class="text">Lorem ipsum ex vix illud nonummy,Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur... novum tation et his. At vix scripta patrioque scribentur...</p>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="post-grids">
												<div class="col-md-3 post-left">
													<a href="single.html"><img src="images/f4.jpg" alt=""></a>
												</div>
												<div class="col-md-9 post-right">
													<h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
													<p class="comments">Sep 4 2015, <a href="#">8 Comments</a></p>
													<p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his.Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur... At vix scripta patrioque scribentur...</p>
												</div>
												<div class="clearfix"> </div>
											</div> -->
							<!--leave-->
										<!-- <div class="leave">
											<h4>Leave a comment</h4>
											<form id="commentform">
												 <p class="comment-form-author-name"><label for="author">Name</label>
													<input id="author" type="text" value="" size="30" aria-required="true">
												 </p>
												 <p class="comment-form-email">
													<label class="email">Email</label>
													<input id="email" type="text" value="" size="30" aria-required="true">
												 </p>
												 <p class="comment-form-comment">
													<label class="comment">Comment</label>
													<textarea></textarea>
												 </p>
												 <div class="clearfix"></div>
												<p class="form-submit">
												   <input type="submit" id="submit" value="Send">
												</p>
												<div class="clearfix"></div>
											   </form>

											</div>
										</div> -->
				<!--//leave-->
				<!-- Berita Lainnya -->
				  <!--//latest-articles-->
					  <div class="latest-articles">
					    <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>Produk lainnya</h3>
					    <?php foreach ($query->tampil_berita() as $limit) { ?>
					 
				        <div class="world-news-grids">
				        	<?php foreach ($query->tampil_produk_full() as $row) {?>
				        		<div class="world-news-grid">
				        			<img src="master/root/<?php echo $row['photo'];?>">
									<a href="?id=<?php echo $row['id'];?>" class="wd"><?php echo $row['nama'];?></a>
									<p><?php echo substr($row['keterangan'],0,100);?> ...</p>
								</div>
							<?php } ?>	
								
								<div class="clearfix"></div>
							</div>
						<?php } ?>

					</div>
							 <!--//articles-->
				<!-- // Berita lainnya -->
				</div>

				 <div class="col-md-4 mag-inner-right">
				  <div class="connect">
				    <h4 class="side" >STAY CONNECTED</h4>
					  <ul class="stay">
					    <li class="c5-element-facebook"><a href="#"><span class="icon"></span><h5>700</h5><span class="text">Followers</span></a></li>
                        <li class="c5-element-twitter"><a href="#"><span class="icon1"></span><h5>201</h5><span class="text">Followers</span></a></li>
						 <li class="c5-element-gg"><a href="#"><span class="icon2"></span><h5>111</h5><span class="text">Followers</span></a></li>
						<li class="c5-element-dribble"><a href="#"><span class="icon3"></span><h5>99</h5><span class="text">Followers</span></a></li>
						
					  </ul>
			      </div>
				    <div class="modern">
				      <h4 class="side">FEATURED VIDEO</h4>
					  <div id="example1">
			 	        <div id="owl-demo" class="owl-carousel text-center">
					      <div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					     </div>
						 <div class="item">
					
							<img class="img-responsive lot" src="images/p2.jpg" alt=""/>
					    </div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p33.jpg" alt=""/>
					    </div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					</div>
					<div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					</div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p2.jpg" alt=""/>
					</div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p33.jpg" alt=""/>
					</div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					</div>
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
							       <h4 class="side">FORM PENGADUAN</h4>
								   <div class="sign_up">
										<p class="sign">Silahkan Login Untuk Membuat Pengaduan</p>
											<form action="master/root/user_proses.php?aksi=user_login" method="post">
											<input type="text" name="username" class="form-control" required placeholder="Username">
											<input type="password" name="password" required class="form-control" placeholder="Password">
											<input type="submit" value="login">
										</form>
										<p class="spam">Belum punya AKUN ? <a href="">Daftar</a></p></p>
									</div>
							</div>
							  <!--//end-sign-up-->
							 <h4 class="side">Pengumuman</h4>
								<div class="edit-pics">
							    
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f1.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="#">New iPad App to stimulate your Guitar</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f4.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="#">New iPad App to stimulate your Guitar</a></h5>
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
										 <h5 class="top"><a href="#">POLL: HOW LONG DO YOU OFTEN SLEEP AT NIGHT</a></h5>
										 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
								     </div>
									  <div class="top-text two">
										 <a href="single.html"><img src="images/dest.jpg" class="img-responsive" alt=""/></a>
										 <h5 class="top"><a href="#">YOU’VE NEVER SEEN VIVID SYDNEY QUITE LIKE THIS</a></h5>
										 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
								     </div>
								  </div>
	                            </div> -->
							<!--//top-news-->
						</div>
						<div class="clearfix"></div>
					</div>
			     <!--//end-mag-inner-->
                     <!--/mag-bottom-->
					 <div class="mag-bottom">
                     <h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>produk</h3>
		             <div class="grid">
		             	<?php foreach ($query->tampil_produk() as $row ) { ?>
		          
						  <div class="col-md-4 m-b">
							<a href="single.html"> <figure class="effect-layla"></a>
								<img src="master/root/<?php echo $row['photo'];?>" alt="img25"/>
					
							  </figure>
							   <div class="m-b-text">
									<a href="single.html" class="wd"><?php echo $row['nama'];?> </a>
									
								</div>
						  </div>
						  <?php } ?>
					
						 <div class="clearfix"></div>
						</div>
				  </div>
				 <!--//mag-bottom-->
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
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
				
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">Fax</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
		
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">Email</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 footer-grid">
							<h4>LOKASI KAMI</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.4682665380648!2d98.6103301441864!3d3.6164883052296117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43c4965e7c43a28b!2sLembaga+Permasyarakatan+(Lapas)+Anak+Kelas+I+Tanjung+Gusta+Medan!5e0!3m2!1sid!2sid!4v1523971849858" width="650" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
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

</body>
</html>