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
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="text-decoration:none">
      <img src="assets/img/my_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lost and Found System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
    <img src="assets/img/me.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="User Image">        </div>
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px;text-decoration:none">David Rono</a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> Admin</a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="items.php" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
               Lost and Found Items
              </p>
            </a>
          </li>
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
         
      
          <li class="nav-item">
            <a href="#" class="nav-link">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <h2 class="text-center text-secondary" > Report Lost Item(s)</h2>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <form action="" method="POST" autocomplete="off">

        <div class="row">
          <div class="col-md-6">
            <label for="">First Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-6">
          <label for="">Last Name</label>
            <input type="text" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
          <label for="">Email Address</label>
            <input type="email" class="form-control">
          </div>
          <div class="col-md-6">
          <label for="">Telephone Number</label>
            <input type="tel" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="">Name of item lost</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">Lost Item's Color</label>
            <input type="text" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="">Date Lost</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">Date Lost</label>
            <input type="date" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="">Location Lost</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Lost Item's Image</label>

<input type="file" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">Lost Item's Description</label><br>
            <textarea name="" id="" cols="60" rows="5"></textarea>
          </div>
        </div>

    

        <div class="row my-4">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <input type="submit" class="form-control bg-secondary" style="width:100%" value="Report Lost Item">
          </div>
          <div class="col-md-3"></div>
         
        </div>

      </form>
    </section>
    <!-- /Main content -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/pages/dashboard.js"></script>
</body>
</html>