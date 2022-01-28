<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="login-form-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login-form-07/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login-form-07/css/style.css">

    <title>Login SPP</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="login-form-07/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Selamat datang dan silahkan login untuk mengakses aplikasi pembayaran SPP.</p>
            </div>
            <form action="login.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" >

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                
              </div>

              <div class="form-group first">
                <label for="role">Role</label>
                <select name="role" class="form-control">
                		<option></option>
                		<option value="petugas">Petugas</option>
                		<!-- <option velue="admin">Admin</option> -->
                		<option velue="siswa">Siswa</option>

            		</select>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="login-form-07/js/jquery-3.3.1.min.js"></script>
    <script src="login-form-07/js/popper.min.js"></script>
    <script src="login-form-07/js/bootstrap.min.js"></script>
    <script src="login-form-07/js/main.js"></script>
  </body>
</html>