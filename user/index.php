<?php
include'../master/root/notification.php';
include'../master/config/controller.php';
include'../master/sweetalert/sweetalert.php';
if($_SESSION['username']==FALSE){
	header('location:../');
}
$query    =new Database();
function destroy(){
	session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lapas Perempuan Medan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="../master/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../master/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../master/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../master/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../master/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../master/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../master/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../master/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../master/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="../master/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="../master/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Lapas Perempuan</b></span>
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
          <li class="dropdown user user-menu">
            <a href="#">
              <span class="hidden-xs"><?php echo $_SESSION['username'];?></span>
            </a>
            <ul class="dropdown-menu">
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a onClick ='destroy()'><i class="fa fa-circle-o text-aqua"></i> <span>Log Out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Pengaduan Masyarakat
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
               <div class="tab-content">
               <div class="tab-pane active" id="pengaduan">
                    <?php include'views/pengaduan.php';?>
               </div>
               <div class="tab-pane <?php echo $pimpinan;?>" id="pimpinan">
                    <?php include'views/pimpinan.php';?>
               </div>
               <div class="tab-pane <?php echo $berita;?>" id="berita">
                    <?php include'views/berita.php';?>
               </div>
               </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 Lapas Perempuan Medan
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="../master/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../master/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../master/bower_components/raphael/raphael.min.js"></script>
<script src="../master/bower_components/morris.js/morris.min.js"></script>
<script src="../master/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="../master/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../master/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../master/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="../master/bower_components/moment/min/moment.min.js"></script>
<script src="../master/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../master/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../master/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../master/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../master/dist/js/adminlte.min.js"></script>
<script src="../master/dist/js/pages/dashboard.js"></script>
<script src="../master/dist/js/demo.js"></script>
<script src="../master/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })
</script>
<script src="../master/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../master/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  initSample();
</script>
</body>
</html>
