<?php include('header.php'); ?>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
            <?php include ('leftmenu.php'); ?>
        </div> <!-- end left -->
        <div class="col-md-9">

          <?php
        $msg='';
        if (isset($_POST['submit'])) {

          $studentId =addslashes($_POST['studentId']); 
          $name      =addslashes($_POST['name']); 
          $address   =addslashes($_POST['address']);
          $phone     =addslashes($_POST['phone']);
          $email     =addslashes($_POST['email']);
          $password  =addslashes($_POST['password']);
          $dept       = $_POST['dept'];
          $filename  = $_FILES["picture"]["name"]; 


          $ext = pathinfo($filename,PATHINFO_EXTENSION);
          $imgname = "Student-".time().".".$ext;
          $path = 'StudentPicture/' . $imgname;

          $query="INSERT INTO student (studentID,name,address,phone,picture,email,password,dept) VALUES ($studentId,'$name','$address','$phone','$path','$email','$password','$dept')";

            $q=mysqli_query($con,$query);
            if ($q) {
              $msg= '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';
              move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
            }else{
              $msg= '<div class="alert alert-danger" role="alert">Error! Please try again later.</div>';
            }
          
        }

        ?>

          <h2>Student Registration</h2>
            <br>
          <form method="post" action="" enctype="multipart/form-data" >
          <div class="form-in">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">StudentID</label>
                  <input type="text" class="form-control"  placeholder="Enter StudentID" name="studentId" required="1">
                </div>
              </div> 

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="name" required="1">
                </div>
              </div> 

               <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address" required="1">
                </div>
              </div>

               <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">phone</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter phone number" name="phone" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlFile1">Profile Picture</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"  placeholder="Password" name="password" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Deapartment</label>
                      <select class="form-control" name="dept">

                       <?php
                          $q='SELECT * FROM dept ORDER BY id ASC';
                          $result=mysqli_query($con,$q);
                          while($row=mysqli_fetch_array($result))
                          {
                            echo "<option value='".$row['id']."'>".$row['dept']."</option>";
                          }
                        ?>                      
                      </select>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <input type="submit" class="btn my-btn" name="submit" value="Submit" />
              </div>
            </div>
          </div>
        </form>


          <?php
          // $pass=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );
          // echo $pass=md5($pass);
          // $themsg="Your password for bidyaloy is : <br/>
          //               $pass";
          // mail($_POST['email'],"Your password for Bidyaloy",$themsg);
            ?>
              <br>
            <?php echo $msg; ?>
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>