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
                <h2>Department Registration!</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="department.php" class="btn btn-success ">Go Main Page</a>
                <a href="department.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>


            <br>
             <?php 

                  $msg=NULL;

                  if (isset($_POST['update'])) { 
                  $updateid=(int)$_POST['updateid'];
                  $dept=$_POST['dept'];
                  $faculty=(int)$_POST['faculty'];
                  $details=$_POST['details'];
                  $message=$_POST['message'];
                  $overview=$_POST['overview'];


                  $uq="UPDATE dept set dept='$dept',details='$details',message_from_head='$message',faculty=$faculty,overview='$overview' WHERE id=$updateid";
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
            $edit=(int)$_GET['edit'];
            $eq="SELECT * FROM dept WHERE id=$edit";
            $res=mysqli_query($con,$eq);
            $editrow=mysqli_fetch_array($res);

            ?>

              <form method="post" class="mb-5">
                  <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Student Department</label>
                    <select class="form-control" name="dept">

                        <option value="<?= htmlspecialchars($editrow['dept']) ?>"><?= htmlspecialchars($editrow['dept']) ?></option>
                        <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                        <option value="Electrical & Electronic Engineering">Electrical and Electronic Engineering</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Data Science">Data Science</option>
                        <option value="English">English</option>
                        <option value="Economics">Economics</option>
                        <option value="Business Administration">Business Administration</option>
                        <option value="Law & Justice">Law & Justice</option>
                      </select>
                  </div>
                </div>
                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Details</label>
                      <input type="text" class="form-control" name="details" value="<?= htmlspecialchars($editrow['details']) ?>" />
                  </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Faculty Name</label>
                      <select class="form-control" name="faculty">

                      <?php 
                            $qq='SELECT * FROM faculty WHERE id='.(int)$editrow['faculty'];
                            $rresult=mysqli_query($con,$qq);
                            $row=mysqli_fetch_array($rresult);
                           ?>

                          <option value="<?= (int)($row['id'] ?? 0) ?>"><?= htmlspecialchars($row['name'] ?? '') ?></option>
                         <?php
                          $q='SELECT * FROM faculty ORDER BY id ASC';
                          $result=mysqli_query($con,$q);
                          while($row=mysqli_fetch_array($result))
                          {
                            echo "<option value='".(int)$row['id']."'>".htmlspecialchars($row['name'])."</option>";
                          }
                      ?>                      
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Overview</label>
                      <textarea class="form-control" name="overview" id="mywysiwyg" rows="5"><?= htmlspecialchars($editrow['overview']) ?></textarea>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Message from Head</label>
                      <textarea class="form-control" name="message" id="mywysiwyg" rows="5"><?= htmlspecialchars($editrow['message_from_head']) ?></textarea>
                  </div>
                  </div>
                  <div class="col-md-12">
                      <input type="hidden" class="form-control" name="updateid" value="<?= (int)$editrow['id'] ?>" />
                      <input type="submit" class="btn my-btn" value="Update" name="update"/>
                  </div>
              </form>


            <?php } ?>

             <?php if (isset($_GET['entry'])) { 

            if (isset($_POST['submit'])) {
                $dept = $_POST['dept'];
                $faculty = (int)$_POST['faculty'];
                $details = $_POST['details'];
                $message = $_POST['message'];
                $overview = $_POST['overview'];

                $query = "INSERT INTO dept(dept,faculty,details,message_from_head,overview) VALUES('$dept',$faculty,'$details','$message','$overview')";
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
                  <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Student Department</label>
                    <select class="form-control" name="dept">

                        <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                        <option value="Electrical & Electronic Engineering">Electrical & Electronic Engineering</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Data Science">Data Science</option>
                        <option value="English">English</option>
                        <option value="Economics">Economics</option>
                        <option value="Business Administration">Business Administration</option>
                        <option value="Law & Justice">Law & Justice</option>

                      </select>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Details</label>
                      <input type="text" class="form-control" name="details"  />
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="font-weight-bold">Head of Deapartment :</label>
                          <select class="form-control" name="faculty">

                           <?php
                              $q='SELECT * FROM faculty ORDER BY id ASC';
                              $result=mysqli_query($con,$q);
                              while($row=mysqli_fetch_array($result))
                              {
                                echo "<option value='".(int)$row['id']."'>".htmlspecialchars($row['name'])."</option>";
                              }
                            ?>                      
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Overview</label>
                      <textarea class="form-control" name="overview" id="mywysiwyg" rows="5"></textarea>
                  </div>
                  </div>

                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Message from Head</label>
                      <textarea class="form-control" name="message" id="mywysiwyg" rows="5"></textarea>
                  </div>
                  </div>
                  <div class="col-md-12">
                      <input type="submit" class="btn my-btn" value="Submit" name="submit"/>
                  </div>
              </form>
        <?php } ?>

             <?php echo $msg; ?>

                <br><br>
        <h4>All Department List :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Department</th>
              <th>Details</th>
              <th>Name</th>
              <th>Overview</th>
              <th>Message from Head</th>
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = (int)$_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM dept ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo "<td>". htmlspecialchars($row['dept'])."</td>";
                  echo '<td>'. htmlspecialchars($row['details']).'</td>';
                          $qry='SELECT * FROM faculty where id='.(int)$row['faculty'];
                          $res=mysqli_query($con,$qry);
                          $rowc=mysqli_fetch_array($res);

                  echo '<td>'. htmlspecialchars($rowc['name'] ?? '').'</td>';
                  echo '<td align="left">'.  nl2br(htmlspecialchars(substr($row['overview'],0,300))).'</td>';
                  echo '<td align="left">'.  nl2br(htmlspecialchars(substr($row['message_from_head'],0,300))).'</td>';
                  echo '<td> <a href="?edit='. (int)$row['id'] .'" class="btn btn-warning" >Edit</a> 
                  </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM dept";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='department.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>

        </div>
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>