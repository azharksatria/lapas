<?php
include'master/root/notification.php';
include'master/config/user_controller.php';
include'master/sweetalert/sweetalert.php';
$query    =new Database();
$pimpinan =$query->tampil_pimpinan();
$berita   =$query->tampil_berita();
$kontak   =$query->tampil_kontak();

if(isset($_GET['notif'])){
	echo '<script>swal("Ops.!","Password atau Usernama Salah","error")</script>';
}
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
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!-- slider -->
<link rel="stylesheet" href="slider/JiSlider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slider/style.css" type="text/css" media="screen" />

<!-- /slider -->
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
	 <!--/.navbar-->
     </div>
	</nav>
  </div>
 </div>
<!--/start-banner-->
 <div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Ciptakan Pesta Raya Durian  </h3>
									 <p>Menerima Pesanan Durian Dalam Partai Besar</p>
										<div class="more">
									<!-- <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
									</div>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Durian Siap Saji</h3>
									 <p>Durian Dalam Kemasan Dengan Kualitas Terbaik</p>
										<div class="more">
									<!-- <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
									</div>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Pancake Untuk Perayan Hari Istimewa </h3>
									 <p>Pesan Pancake, Kami Antar ke Tempat Anda </p>
									<div class="more">
									<!-- <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
									</div>
								</div>	
								
							</div>
						</div>
					</li>

			</ul>
		</div>
      </div>
    <!--//end-banner-->
 <!--/start-main-->
   <div class="main-content">
	   <div class="container">
	        <div class="mag-inner">
			    <div class="col-md-8 mag-innert-left">
						<!--/start-Technology-->
						 <div class="technology">
			              <h2 class="tittle"><i class="glyphicon glyphicon-certificate"> </i>pimpinan</h2>
							<div class="col-md-5 tech-img">
					          <img src="master/root/<?php echo $pimpinan['gambar'];?>" class="img-responsive" alt=""/>
					          <h5><?php echo $pimpinan['nama'];?></h5>
							</div>
							 <div class="col-md-6 tech-text">
					            <div class="editor-pics">
								
											<div class="col-md-14 item-details" style="text-align: center;">
												<h4 class="inner two"><?php echo $pimpinan['title'];?></h4>
											 </div>
											<div class="clearfix"></div>
											<div class="col-md-14 item-details" >
												<h5 class="inner two"><p><?php echo $pimpinan['kata_sambutan'];?></p></h5>
											 </div>
										</div>				
							</div>
					    <div class="clearfix"></div>
				      </div>
					  <!--//end-Technology-->
					<!--   <div class="gallery">
							<div class="main-title-head">
							  <h3 class="tittle"><i class="glyphicon glyphicon-picture"></i>Gallery</h3>
							</div>
							<div class="gallery-images">
								<div class="course_demo1">
								  <ul id="flexiselDemo1">	
									 <li>
										<a href="single.html"><img src="images/mg1.jpg" alt="" /></a>						
									 </li>
									 <li>
										<a href="single.html"><img src="images/mg2.jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="images/mg3.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="images/mg4.jpg" alt="" /></a>
									 </li>	
								 </ul>
							 </div>
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
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
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
						 </div>
						  <div class="course_demo1">
								  <ul id="flexiselDemo">	
									 <li>
										<a href="single.html"><img src="images/mg7.jpg" alt="" /></a>							
									 </li>
									 <li>
										<a href="single.html"><img src="images/mg3.jpg" alt="" /></a>	
									  </li>	
									 <li>
										<a href="single.html"><img src="images/mg6.jpg" alt="" /></a>	
									 </li>	
									 <li>
										<a href="single.html"><img src="images/mg2.jpg" alt="" /></a>	
									 </li>	
									 <li>
										<a href="single.html"><img src="images/mg6.jpg" alt="" /></a>	
									 </li>	
								 </ul>
							 </div>
							 <a class="more" href="single.html">More  +</a>
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
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
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>

					</div> -->
				<!--business-->
					 <div class="latest-articles">
			              <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>Berita</h3>
			   		<?php foreach ($berita as $row) { 
							$date     =$row['date'];
							$pecah    =explode('-',$date);
							$tahun    =$pecah[0];
							$bulan    =$pecah[1];
							$tanggal  =substr($pecah[2],0,2);
			   			?>
			              
				  <div class="business-inner">
				    <div class="col-md-6 b-img">
				    	<a href="single.php?id=<?php echo $row['id_berita'];?>"><img class="img-responsive" src="master/root/<?php echo $row['photo'];?>" alt=""/></a>
				    </div>
				    <div class="col-md-6 b-text">
				      <h5><a href="single.php?id=<?php echo $row['id_berita'];?>"><?php echo $row['judul'];?></a></h5>
					  <h6><i class="glyphicon glyphicon-time"></i><?php echo $tanggal.'/'.$bulan.'/'.$tahun;?></h6> 
					   <div class="clearfix"></div>
					  <p><?php echo $row['berita'];?></p>
					  <a class="read" href="single.php?id=<?php echo $row['id_berita'];?>">Selanjutnya</a>
				     </div>
					 <div class="clearfix"></div>
					<!-- 		  <div class="business-bottom-content">
							  <div class="col-md-6 business-bottom">
							      <div class="col-md-3 b-bottom-pic">
								  <a href="single.html"><img class="img-responsive" src="images/ti1.jpg" alt=""/></a>
								  </div>
								  <div class="col-md-9 b-bottom-text">
								    <h5><a href="single.html"> NOW IS THE TIME TO CHANGE WORK</a></h5> 
									<h6><i class="glyphicon glyphicon-time"></i>Jun 25, 2015</h6> <div class="icons"><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a><a href="#"><i class="glyphicon glyphicon-comment"></i>2</a><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i>152</a><a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> 26</a></div>
							        <div class="clearfix"></div>
								  </div>
								  <div class="clearfix"></div>
							  </div>
							    <div class="col-md-6 business-bottom">
							      <div class="col-md-3 b-bottom-pic">
								  <a href="single.html"><img class="img-responsive" src="images/ti1.jpg" alt=""/></a>
								  </div>
								  <div class="col-md-9 b-bottom-text">
								    <h5><a href="single.html"> NOW IS THE TIME TO CHANGE WORK</a></h5> 
									<h6><i class="glyphicon glyphicon-time"></i>Jun 25, 2015</h6> <div class="icons"><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a><a href="#"><i class="glyphicon glyphicon-comment"></i>2</a><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i>152</a><a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> 26</a></div>
							       <div class="clearfix"></div>
								  </div>
								  <div class="clearfix"></div>
							  </div>
							   <div class="clearfix"></div>
							 </div> -->
						  </div>
						 <div class="business-inner two"></div>
					<?php } ?>
					
					</div>
<!-- 					 <a class="more" href="single.html">Semua  +</a>
 -->				   <!--//business-->
				    <!--//latest-articles-->
			<div class="latest-articles">
					    <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>Berita lainnya</h3>
					 
				        <div class="world-news-grids">
				        	<?php foreach ($query->tampil_list_berita() as $row) {?>
				        		<div class="world-news-grid">
				        			<img src="master/root/<?php echo $row['photo'];?>">
									<a href="single.php?id=<?php echo $row['id_berita'];?>" class="wd"><?php echo $row['judul'];?></a>
									<p><?php echo substr($row['berita'],0,100);?></p>
								</div>
							<?php } ?>	
								
								<div class="clearfix"></div>
							</div>

					</div>
					<a class="more" href="single.html">Semua  +</a>
							 <!--//articles-->
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
			     <!--//end-mag-inner-->
                     <!--/mag-bottom-->
				 <div class="mag-bottom">
                     <h3 class="tittle bottom"><i class="glyphicon glyphicon-euro"></i>produk</h3>
		             <div class="grid">
		             	<?php foreach ($query->tampil_produk() as $row ) { ?>
		          
						  <div class="col-md-4 m-b">
							<a href="single.html"> <figure class="effect-layla"></a>
								<img src="master/root/<?php echo $row['photo'];?>" alt="img25"/>
					
							  </figure>
							   <div class="m-b-text">
									<a href="detail_produk.php?id=<?php echo $row['id'];?>" class="wd"><?php echo $row['nama'];?> </a>
									
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