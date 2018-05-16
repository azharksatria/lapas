<?php
include'sweetalert/sweetalert.php';
include'config/controller.php';
include'root/notification.php';
$query= new Database();
  // var_dump($berita);
  // var_dump($slider);
  // var_dump($pimpinan);
  // var_dump($pengaduan);
  // var_dump($edit_admin);
  // var_dump($admin);
  // var_dump($produk);
  // var_dump($edit_berita);
  //var_dump($lihat_pengaduan);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lapas Perempuan Medan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- CK EDITOR 4 -->
  <script src="../ckeditor.js"></script>
  <script src="js/sample.js"></script>
  <link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
<!-- ! CK EDITOR 4 -->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
            
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
     
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>

          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

       <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="#slider" data-toggle="tab"><i class="fa fa-book"></i> <span>Slider</span></a></li>
        <li><a href="#pimpinan" data-toggle="tab"><i class="fa fa-book"></i> <span>Pimpinan</span></a></li>
        <li><a href="#berita" data-toggle="tab"><i class="fa fa-book"></i> <span>Berita</span></a></li>
        <li><a href="#pengaduan" data-toggle="tab"><i class="fa fa-book"></i> <span>Pengaduan</span></a></li>
        <li><a href="#produk" data-toggle="tab"><i class="fa fa-book"></i> <span>Produk</span></a></li>
        <li><a href="#video" data-toggle="tab"><i class="fa fa-book"></i> <span>Video</span></a></li>
        <li><a href="#sosmed" data-toggle="tab"><i class="fa fa-book"></i> <span>Sosial Media</span></a></li>
        <li><a href="#kontak" data-toggle="tab"><i class="fa fa-book"></i> <span>Kontak</span></a></li>
        <?php if($_SESSION['level']==2)
        {
        echo'<li><a href="#admin" data-toggle="tab"><i class="fa fa-book"></i> <span>Admin</span></a></li>';
        }?>
        <li><a href="#admin" data-toggle="tab"><i class="fa fa-book"></i> <span>Admin</span></a></li>
        <li><a href="logout.php" ><i class="fa fa-book"></i> <span>Log Out</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
               <div class="tab-content">                
               <div class="tab-pane <?php echo $pengaduan;?>" id="pengaduan">
                    <?php include'views/pengaduan.php';?>
               </div>

               <div class="tab-pane <?php echo $slider;?>" id="slider">
                    <?php include'views/slider.php';?>
               </div>

               <div class="tab-pane <?php echo $pimpinan;?>" id="pimpinan">
                    <?php include'views/pimpinan.php';?>
               </div>

               <div class="tab-pane <?php echo $berita;?>" id="berita">
                    <?php include'views/berita.php';?>
               </div>

               <div class="tab-pane" id="tambah_berita">
                     <?php include'views/input_berita.php';?>
               </div>

               <div class="tab-pane <?php echo $edit_berita;?>" >
                     <?php include'views/edit_berita.php';?>
               </div>

               <div class="tab-pane <?php echo $edit_sosmed;?>" >
                     <?php include'views/edit_sosmed.php';?>
               </div>

               <div class="tab-pane <?php echo $admin;?>" id="admin">
                    <?php include'views/admin.php';?>
               </div>

               <div class="tab-pane <?php echo $edit_admin;?>" id="edit_admin">
                    <?php include'views/edit_admin.php';?>
               </div>

               <div class="tab-pane <?php echo $update_kontak;?>" id="kontak">
                    <?php include'views/kontak.php';?>
               </div>

               <div class="tab-pane" id="input_produk">
                     <?php include'views/input_produk.php';?>
               </div>

               <div class="tab-pane <?php echo $produk;?>" id="produk">
                     <?php include'views/produk.php';?>
               </div>

               <div class="tab-pane"  id="tambah_admin">
                    <?php include'views/input_admin.php';?>
               </div>

               <div class="tab-pane <?php echo $edit_produk;?>">
                    <?php include'views/edit_produk.php';?>
               </div>

               <div class="tab-pane <?php echo $lihat_pengaduan;?>">
                    <?php include'views/lihat_pengaduan.php';?>
               </div>

               <div class="tab-pane <?php echo $video;?>" id="video">
                    <?php include'views/lihat_video.php';?>
               </div>

               <div class="tab-pane <?php echo $sosmed;?>" id="sosmed">
                    <?php include'views/lihat_sosmed.php';?>
               </div>

               <div class="tab-pane" id="input_sosmed">
                    <?php include'views/input_sosmed.php';?>
               </div>

               <div class="tab-pane" id="input_video">
                    <?php include'views/input_video.php';?>
               </div>
          
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
<!-- <script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })
</script> -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



<!-- jQuery 3 -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    }) 
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    }) 
    $('#example4').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    }) 
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example6').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })  
  })
</script>
<script>
  initSample();
</script>

</body>
</html>
