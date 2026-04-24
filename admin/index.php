<?php
session_start();
include('dbconnect.php');
$msg=NULL;

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 2) {
    header('Location: home.php');
    exit();
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $q="SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $res=mysqli_query($con,$q);
    $rowcount=mysqli_num_rows($res);

    if($rowcount>0){
      $_SESSION["user"] = $username;
      $_SESSION["loggedIn"] = 2;
      header('Location: home.php');
      exit();
    }
    else{
      $msg="Login Failed! Try Again";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../admin/adminPicture/admin-icon.png"/> 
    <title>Admin Pannel</title>
    <style>
      body{}
      .forms{
        background: #FFF;
        border:2px solid #4753FF; 
        padding: 40px 30px 30px 30px;
        box-shadow: 0px 0 25px 0px #888;
       }
       .forms h3{
        text-align: center;
       }
       .login{

        background: url('img/login.png');
        background-position: right bottom;
        background-repeat: no-repeat;
        background-size: auto;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        zoom: 1;
        width: auto;
        height: 100%;
        overflow-x: auto;
      }
      .my-form input{

        margin: 0 0 30px 0;
        border:2px solid #4753FF;
      }
      .my-btn{
        width: 100%;
        color: #FFF;
        background: #4753FF;
        text-transform: uppercase;
        font-weight: 600;
        
      }
       .my-btn:hover{
          color: #4753FF;
          background: #fff;
       }

    </style>
  </head>
  <body>
    <div class="login">
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 "><br/><br/><br/><br/>
            <div class="forms">
               
                  <form method="post" class="my-form">
                    <h4 class="mb-3"><?php echo $msg; ?></h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control text" name="username"  placeholder="Enter username">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" class="form-control text" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <input type="submit" class="btn my-btn" name="login" value="Login"/>
                      </div>
                    </div>
                  </form>
                
                <p align="center">Not a member? <a href="register.php">Register here</a></p>
          </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>