<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
            <?php include ('leftmenu.php'); ?>
        </div> <!-- end left -->
        <div class="col-md-9">
          <br>
          <div class="row">
            <div class="col-md-7">
                <h2>Curriculam Registration!</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="curriculum.php" class="btn btn-success ">Go Main Page</a>
                <a href="curriculum.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>


            <br>
            <?php 
                  $msg=NULL;
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $deleteq="DELETE FROM curriculam WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                        $msg='<div class="alert alert-success" role="alert">Deleted successfully!</div>';
                      }
                      else{
                         $msg='<div class="alert alert-warning" role="alert">Delete Failed!</div>';
                      }
                  }
          ?>
             <?php 

                  

                  if (isset($_POST['update'])) { 
                      $courseCode = $_POST['courseCode'];
                      $courseTitle = $_POST['courseTitle'];
                      $credit = $_POST['credit'];
                      $hours = $_POST['hours'];
                      $semester = $_POST['semester'];
                      $dept = $_POST['dept'];
                      $updateid = $_POST['updateid'];

                      $uq="UPDATE curriculam set courseCode='$courseCode',courseTitle='$courseTitle',credit='$credit',hours='$hours',semester='$semester',dept =$dept WHERE id=$updateid";
                      $res=mysqli_query($con,$uq);
                      if ($res) {
                        $msg='<div class="alert alert-success" role="alert">Post added successfully!</div>';
                      }
                      else{
                        $msg='<div class="alert alert-warning" role="alert">Failed!</div>';
                      }
              }
                 
                  
             ?>
             

            <?php if (isset($_GET['edit'])) { 
                $edit=$_GET['edit'];
                $eq="SELECT * FROM curriculam WHERE id=$edit";
                $res=mysqli_query($con,$eq);
                $editrow=mysqli_fetch_array($res);
                

            ?>

            
              <form method="post" class="mb-5">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Code</label>
                        <input type="text" class="form-control" name="courseCode" value="<?= $editrow['courseCode'] ?>" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Title</label>
                        <input type="text" class="form-control" name="courseTitle" value="<?= $editrow['courseTitle'] ?>" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label>
                        <input type="text" class="form-control" name="credit" value="<?= $editrow['credit'] ?>" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hours</label>
                        <input type="text" class="form-control" name="hours" value="<?= $editrow['hours'] ?>" />
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Student Department</label>
                        <select class="form-control" name="semester">

                            <option value="<?= $editrow['semester'] ?>"><?= $editrow['semester'] ?></option>
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                            <option value="Semester 3">Semester 3</option>
                            <option value="Semester 4">Semester 4</option>
                            <option value="Semester 5">Semester 5</option>
                            <option value="Semester 6">Semester 6</option>
                            <option value="Semester 7">Semester 7</option>
                            <option value="Semester 8">Semester 8</option>

                          </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="font-weight-bold">Department :</label>
                        <select class="form-control" name="dept">

                        <?php 
                              $qq='SELECT * FROM dept WHERE id='.$editrow['dept'].'';
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
                    <div class="col-md-6">
                        <input type="hidden" name="updateid" value="<?= $editrow['id'] ?>">
                        <input type="submit" class="btn my-btn mt-4" value="Update" name="update"/>
                    </div>
                </div>
              </form>


            <?php } ?>

            

             <?php if (isset($_GET['entry'])) { 

            if (isset($_POST['submit'])) {
                $courseCode = $_POST['courseCode'];
                $courseTitle = $_POST['courseTitle'];
                $credit = $_POST['credit'];
                $hours = $_POST['hours'];
                $semester = $_POST['semester'];
                $dept = $_POST['dept'];

                $query = "INSERT INTO curriculam(courseCode,courseTitle,credit,hours,semester,dept) VALUES('$courseCode','$courseTitle','$credit','$hours','$semester',$dept)";
                $q = mysqli_query($con,$query);
                if ($q) {
                $msg='<div class="alert alert-success" role="alert">Post added successfully!</div>';
              }
              else{
                $msg='<div class="alert alert-warning" role="alert">Failed!</div>';
              }
          }

        ?>
              <form method="post" class="mb-5">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Code</label>
                        <input type="text" placeholder="Course Code" class="form-control" name="courseCode"  />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Title</label>
                        <input type="text" placeholder="Course Title" class="form-control" name="courseTitle"  />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label>
                        <input type="text" placeholder="Credit" class="form-control" name="credit"  />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hours</label>
                        <input type="text" placeholder="Hours" class="form-control" name="hours"  />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Semester</label>
                      <select class="form-control" name="semester">

                          <option value="Semester 1">Semester 1</option>
                          <option value="Semester 2">Semester 2</option>
                          <option value="Semester 3">Semester 3</option>
                          <option value="Semester 4">Semester 4</option>
                          <option value="Semester 5">Semester 5</option>
                          <option value="Semester 6">Semester 6</option>
                          <option value="Semester 7">Semester 7</option>
                          <option value="Semester 8">Semester 8</option>
                         
                      ?>                      
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="font-weight-bold">Deapartment :</label>
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
                  <div class="col-md-6">
                    <input type="submit" class="btn my-btn mt-4" value="Submit" name="submit"/>
                  </div>
                </div>
              </form>
        <?php } ?>

             <?php 



              ?>
              <br>
              <?php echo $msg; ?>
                <br><br>
        <h4>All Curriculam List :</h4>
        <table class="table tbl_stripe" style="width: 100%;">
            <tr>
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Credit</th>
              <th>Hours</th>
              <th>Semester</th>
              <th>Depatment</th>
              <th>Action</th>
            </tr>
            <?php
//$q='SELECT * FROM curriculam,dept where curriculam.dept=dept.id  ORDER BY curriculam.id ASC';            
                
$limit = 32;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM curriculam ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql); 
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo "<td>". $row[1]."</td>";
                  echo '<td>'. $row[2].'</td>';
                  echo '<td>'. $row[3].'</td>';
                  echo '<td>'. $row[4].'</td>';
                  echo '<td>'. $row[5].'</td>';
                    $qry='SELECT * FROM dept where id='.(int)$row['dept'];
$res=mysqli_query($con,$qry);
$rowc=mysqli_fetch_array($res);
echo '<td>'. ($rowc['dept'] ?? 'Department not found') .'</td>';
                  echo '<td> <a href="?edit='. $row[0].'" class="btn btn-warning btn-sm" >Edit</a> 
                    <a href="?deleteid='. $row[0].'" class="btn btn-danger btn-sm" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>
                  </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM curriculam";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='curriculum.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>          
        </div>
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>