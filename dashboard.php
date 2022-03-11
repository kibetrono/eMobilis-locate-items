
<?php
 session_start();
 if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
     header("Location: index.html");
     die();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lost and Found System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  <!-- Theme style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/dash.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
      </li>
    
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-0">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="text-decoration:none">
      <img src="assets/img/my_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="opacity: .8">
      <span class="brand-text font-weight-light" >Lost && Found System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
    <img src="https://konza.softwareske.net/assets/admin/img/160x160/img1.jpg" class="img-square elevation-0" style="width:30px;  border-radius:100px;" alt="User Image">        </div>
        <div class="info">
          <a href="#" class="d-block h5" style="text-decoration:none">
          User
        </a>
         <!-- <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> Admin</a> -->
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
   
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                 Dashboard
              </p>
            </a>
      
            <li class="nav-item">
            <a href="items.php" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
             Found Items
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="lost_items.php" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
               Lost Items
              </p>
            </a>
          </li>

          <?php

          require_once 'connect.php';
          $sql = mysqli_query($conn,"SELECT * FROM users WHERE id = '".$_SESSION['user']."'");
          $result = mysqli_fetch_array($sql);
          // $id = $result['id'];
          $id=$_SESSION['current_user'];

          if($id==1){


            echo " <li class='nav-item'>
            <a href='manage.php' class='nav-link'>
              <i class='nav-icon fa fa-list-alt'></i>
              <p>
              Manage Lost Items             
              </p>
            </a>
          </li>";
          echo " <li class='nav-item'>
<a href='managepost.php' class='nav-link'>
  <i class='nav-icon fa fa-list-alt'></i>
  <p>
  Manage Found Items             
  </p>
</a>
</li>";

          }

?>
          <li class="nav-item">
            <a href="report.php" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
               Report Lost Item
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="post.php" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
               Post Found Item
              </p>
            </a>
          </li>

      
          <?php

          require_once 'connect.php';
          $sql = mysqli_query($conn,"SELECT * FROM users WHERE id = '".$_SESSION['user']."'");
          $result = mysqli_fetch_array($sql);
          // $id = $result['id'];
          $id=$_SESSION['current_user'];

          if($id==1){


            echo " <li class='nav-item'>
            <a href='claimedresults.php' class='nav-link'>
              <i class='nav-icon fa fa-list-alt'></i>
              <p>
              Claimed Items             
              </p>
            </a>
          </li>";

          }

        ?>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper whole" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('./assets/img/lost.jpg');">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class=" text-white m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="text-white breadcrumb-item"><a href="#">Home</a></li>
              <li class="text-white breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>50</h3>

                <p>Total Members</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>150</h3>

                <p>Total Lost Items</p>
              </div>
              <div class="icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>21<sup style="font-size: 20px"></sup></h3>

                <p>Total Found Items</p>
              </div>
              <div class="icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
    
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
      
     
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!---------------------footer-------------------------->

  <footer class="main-footer">
    <div class="row">
      <div class="col-md-6">
    <h6 class=" ">&#169; 2022: KibRono | All rights reserved</h6>

      </div>
      <div class="col-md-6">
        <i class="fa fa-facebook "></i>&nbsp;
        <i class="fa fa-twitter "></i>&nbsp;
        <i class="fa fa-linkedin "></i>&nbsp;
      </div>
    </div>
    </footer>

<!---------------------/footer-------------------------->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/pages/dashboard.js"></script>
<script src="Admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Admin/plugins/moment/moment.min.js"></script>
<script src="Admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="Admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Admin/dist/js/pages/dashboard.js"></script>
</body>
</html>
