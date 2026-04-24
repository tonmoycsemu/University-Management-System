<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
            <?php include ('leftmenu.php'); ?>
        </div> <!-- end left -->
        <div class="col-md-10">

         <?php $msg=NULL; ?>
            <br>
           <div class="row">
            <div class="col-md-7">
                <h2>All Student Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="allStudent.php" class="btn btn-success ">Go Main Page</a>
            </div>
          </div>
            <br>
          <?php 
                $msg=NULL;
                if (isset($_GET['deleteid'])) {
                  $id=$_GET['deleteid'];
                  $img=$_GET['img'];
                  $deleteq="DELETE FROM student WHERE id=$id";
                    if(mysqli_query($con,$deleteq)){
                      if(!empty($img) && file_exists($img) && is_writable($img)){
                          unlink($img);
                      }
                      $msg='<div class="alert alert-success" role="alert">Deleted successfully!</div>';
                    }
                    else{
                       $msg='<div class="alert alert-warning" role="alert">Delete Failed!</div>';
                    }
                }
          ?>
            


        <?php
          // update a post
            if (isset($_POST['update'])) {
              
              $studentID =$_POST['studentID']; 
              $name      =addslashes($_POST['name']); 
              $address   =addslashes($_POST['address']);
              $phone     =addslashes($_POST['phone']);
              $email     =addslashes($_POST['email']);
              $password  =addslashes($_POST['password']);
              $dept       = $_POST['dept'];
              
              $updateID = $_POST['updateid'];
              $oldimg = $_POST['oldimg'];

              $filename  = $_FILES["picture"]["name"]; 

              if($filename==NULL){
                $path=$oldimg;
              }else{
                $ext = pathinfo($filename,PATHINFO_EXTENSION);
                $imgname = "Student-".time().".".$ext;
                $path = 'StudentPicture/' . $imgname;
              }

              $query = "UPDATE student SET 
              studentID=$studentID,
              name='$name',
              address='$address',
              phone='$phone',
              picture='$path',
              email='$email',
              password='$password',
              dept='$dept'
              WHERE  id=$updateID
              ";

                      $q = mysqli_query($con,$query);
                      
                      if ($q) {
                      if($filename != NULL){
                        if(!empty($oldimg) && file_exists($oldimg) && is_writable($oldimg)){
                            unlink($oldimg);
                        }
                        move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
                      }
                      $msg='<div class="alert alert-success" role="alert">Post added successfully!</div>';
                  }
                  else{
                      $msg='<div class="alert alert-warning" role="alert">Failed!</div>';
                  }
            }
          ?>


       <?php 
          //this section for editing an  item
          if (isset($_GET['edit'])) {

                $qq='SELECT * FROM student WHERE id='.$_GET['edit'].'';
                $rresult=mysqli_query($con,$qq);
                $rrow=mysqli_fetch_array($rresult);
                

              
        ?>
         
         

            <form method="post" enctype="multipart/form-data">
              <h3 class="mb-3">Edit a Post :</h3>
              <div class="">
                <div class="row">
                  <div class="col-md-6"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Id</label>
                        <input type="text" class="form-control" name="studentID" value="<?= $rrow['studentID'] ?>"  >
                    </div>
                  </div>

                  <div class="col-md-6"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $rrow['name'] ?>"  >
                    </div>
                  </div>

                  <div class="col-md-6"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Id</label>
                        <input type="text" class="form-control" name="address" value="<?= $rrow['address'] ?>"  >
                    </div>
                  </div>

                  <div class="col-md-6"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="<?= $rrow['phone'] ?>"  >
                    </div>
                  </div>

                  <div class="col-md-6"> 
                    <div class="form-group">

                        <label for="exampleInputEmail1">Student Image</label>
                        <input type="file" name="picture" class="form-control-file" />
                        <br/>
                        <img src="<?= $rrow['picture'] ?>" width="200"/>
                    </div>
                  </div>

                  <div class="col-md-6"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student E-mail</label>
                        <input type="email" class="form-control" name="email" value="<?= $rrow['email'] ?>"  >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Password</label>
                        <input type="password" class="form-control" name="password" value="<?= $rrow['password'] ?>"  >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Student Department</label>
                      <select class="form-control" name="dept">

                      <?php 
                            $qq='SELECT * FROM dept WHERE id='.$rrow['dept'].'';
                            $rresult=mysqli_query($con,$qq);
                            $row=mysqli_fetch_array($rresult);
                           ?>

                          <option value="<?= $row['id'] ?>"><?= $row['dept'] ?></option>
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

                  <input type="hidden" name="updateid" value="<?= $rrow['id'] ?>">
                  <input type="hidden" name="oldimg" value="<?= $rrow['picture'] ?>">

                  <input type="submit" class="btn my-btn"  name="update" value="Submit"/>
                  </div>
                </div>
              </form>
              
<br/>
<?php } ?>

  <?= $msg; ?>
          <br>
            <h4>All Student Informaiton :</h4>
              <table class="table tbl_stripe">
              <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Student Address</th>
                  <th>Student Phone Number</th>
                  <th>Student Image</th>
                  <th>Student email</th>
                  <th>Student Dept</th>
                  <th>Action</th>
              </tr>
              <?php
              $limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM student ORDER BY id DESC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($con, $sql);  
 
                    while($row=mysqli_fetch_array($rs_result))
                    {
                      echo '<tr>';
                      echo '<td>'. $row['studentID'].'</td>';
                      echo '<td>'. $row['name'].'</td>';
                      echo '<td>'. $row['address'].'</td>';
                      echo '<td>'. $row['phone'].'</td>';
                      echo "<td><img src='". $row['picture']."' width='100'/></td>";
                      echo '<td>'. $row['email'].'</td>';


                          $qry='SELECT * FROM dept where id='.$row['dept'].'';
                          $res=mysqli_query($con,$qry);
                          $rowc=mysqli_fetch_array($res);
                            
                      echo '<td>'. $rowc['dept'].'</td>';
                      echo '<td>
                      <a href="?edit='. $row['id'].'" class="btn btn-warning" >Edit</a>
                      <a href="?deleteid='. $row['id'].'&img='. $row['picture'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                      </td>';
                      echo '</tr>';
                    }

                ?>
            </table>

<?php  
$sql = "SELECT COUNT(id) FROM student";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='allStudent.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>