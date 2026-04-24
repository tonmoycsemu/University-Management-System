<?php
session_start();
$msg=NULL;
include('dbconnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Register</title>
    <style>
      
      body{}
      .my-form{
        background: #FFF;
        border:2px solid #4753FF; 
        padding: 40px 30px 30px 30px;
        box-shadow: 0px 0 25px 0px #888;
       }
       .my-form h3{
        text-align: center;
       }
       .register{

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
    <div class="register">
    <div class="container-fluid ">
      <div class="row justify-content-center">
        <div class="col-md-5 "><br/><br/><br/>
          <?php 
            if (isset($_POST['register'])) {
                $username = $_POST['username'];

                $q="SELECT * FROM admin WHERE username='$username'";
                $res=mysqli_query($con,$q);
                $rowemail=mysqli_num_rows($res);
                if ($rowemail>0) {
                  $msg="This username id already exist";
                }
                else{
                    if ($_POST['password2']==$_POST['password']) {
                      
                      $username = $_POST['username'];
                      $password = md5($_POST['password']);
                      $password2 = $_POST['password2'];

                      $query = "INSERT INTO admin(username,password) VALUES('$username','$password')";
                      $q = mysqli_query($con,$query);
                      if ($q) {
                        $msg="User added successfully!";
                      }
                    }//end if for password check
                    else{
                      $msg="Password did not match!";
                    }
                }
                    
                
          }

        ?>

        
            <form method="post" class="my-form">
              <h4 class="mb-3"><?php echo $msg; ?></h4>
              <div class="form-group">
                <input type="text" class="form-control" name="username"  placeholder="Name" required="1">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password"  placeholder="Password" required="1">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password2"  placeholder="Confirm Password" required="1">
              </div>

              <input  type="submit" class="btn my-btn" value="Register" name="register" />

              <p align="center">Alredy a member? <a href="index.php">Login here</a></p>
            </form>
            <br/>
            
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