
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="assets/css/log.css">

    <title>Lost and Found</title>

</head>
<body style="background-color:rgb(186 193 199);">

   <!--navigation-->

<nav class="navbar navbar-expand-sm navbar-light ">
	  <div class="container-fluid ">
		<a class="navbar-brand"  href="#">Lost and Found System</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		  <ul class="navbar-nav">
	
      <li class="nav-item">
			  <a class="nav-link active " aria-current="page" href="register.php">Register</a>

          </li>	
          <li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="index.html">Login</a>

              </li>		
		  </ul>		  
		</div>
	  </div>
	</nav>
   <!--/navigation-->

<!---------------------content-------------------------->

   <div class="container-fluid content ">
<div class="row">
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="login-box">
        <div class="login-logo">
        </div>
        <!-- /.login-logo -->
        <div class="card mt-4 ref_form">
          <form class="card-body login-card-body mt-0"  action="validateregister.php" method="POST" autocomplete="off">
              <h1 class=" text-center mb-4 fw-normal">Registration Form</h1>
              
                      <div class="form-group">
                <div class="inner-addon left-addon">
                  <i class="fa fa-user"></i>
                <input type="text"  name="username" class="form-control" placeholder="Username" required><br>

              </div>
              </div>

                <div class="form-group">
                  <div class="inner-addon left-addon">
                    <i class="fa fa-envelope "></i>
                  <input type="email"   name="email" class="form-control" placeholder = "Email Address" required><br>
          
                </div>
                </div>
          
                <div class="form-group">
                  <div class="inner-addon left-addon">
                    <i class="fa fa-lock "></i>
                  <input type="password"  name="password" class="form-control" placeholder="Password" required><br>
          
                </div>
                </div>
          
               <div class="form-group">
        <div class="inner-addon left-addon">
          <i class="fa fa-lock "></i>
        <input type="password"  name="confirm_pwd" class="form-control" placeholder="Confirm Password" required><br>

      </div>
      </div>
          
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <input type="submit" name="register" style="width:90%;" class="btn btn-secondary" value="Register"><br>
          
                    </div>
                    <div class="col-md-2"></div>
                  </div>
          
                </div>
          
          </form>
      
            <p class=" text-center">
              <a href="index.html">Login to your account</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
</div>
</div>
<!---------------------/content-------------------------->

<!---------------------footer-------------------------->
  <div class="container-fluid footer">
    <div class="row">
      <div class="col-md-6 mt-5">
    <h6 class="">&#169; 2022: KibRono | All rights reserved</h6>

      </div>
      <div class="col-md-6 mt-5">
        <i class="fa fa-facebook "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-twitter "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-linkedin "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>

 
  </div>

<!---------------------/footer-------------------------->


</body>
</html>