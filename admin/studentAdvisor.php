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
                <h2>Student Advisor Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="studentAdvisor.php" class="btn btn-success ">Go Main Page</a>
                <a href="studentAdvisor.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $img=$_GET['img'];
                    $deleteq="DELETE FROM studentadvisor WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                        unlink($img);
                       $msg= '<div class="alert alert-success" role="alert">Delated Successfully!</div>';
                      }
                      else{
                        $msg= '<div class="alert alert-danger" role="alert">Delated Failed.</div>';
                      }
                  }
          ?>

           <?php 

                  

                  if (isset($_POST['update'])) { 
                      $name        = addslashes($_POST['name']);
                      $designation = addslashes($_POST['designation']); 
                      $details     = addslashes($_POST['details']);  
                      $dept        = addslashes($_POST['dept']);
                      $updateid    = $_POST['updateid'];
                      $oldimg      = $_POST['oldimg'];

                      $filename  = $_FILES["picture"]["name"]; 
                      if($filename==NULL){
                        $path=$oldimg;
                      }else{
                        $ext = pathinfo($filename,PATHINFO_EXTENSION);
                        $imgname = "Faculty-".time().".".$ext;
                        $path = 'Faculty/' . $imgname;
                      }

                      $query="UPDATE studentadvisor set name='$name',designation='$designation',details='$details',picture='$path',dept=$dept WHERE id=$updateid";
                       $q = mysqli_query($con,$query);
                      
                      if ($q) {
                        if($filename!=NULL){
                            if(file_exists($oldimg)){
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
          
          <?php if (isset($_GET['edit'])) { 
                $edit=$_GET['edit'];
                $eq="SELECT * FROM studentadvisor WHERE id=$edit";
                $res=mysqli_query($con,$eq);
                $editrow=mysqli_fetch_array($res);

            ?>
            
              <form method="post" class="mb-5" enctype="multipart/form-data">
                <h3 class="mb-3">Edit a post :</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold" >Student Advisor Name :</label>
                      <input type="text" class="form-control"  placeholder="Name" name="name" required="1" value="<?= $editrow['name'] ?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="font-weight-bold">Designation :</label>
                          <select class="form-control" name="designation">

                          <option value="<?= $editrow['designation'] ?>"><?= $editrow['designation'] ?></option>
                          <option value="Student Advisor">Student Advisor</option>                     
                          </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="font-weight-bold">Student Advisor Details :</label>
                          <textarea placeholder="Student Advisor Details" class="form-control" name="details" id="mywysiwyg" rows="5"><?= $editrow['details'] ?></textarea>
                      </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold">Image :</label>
                      <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                      <br/>
                        <img src="<?= $editrow['picture'] ?>" width="200"/>
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
                        
                    <div class="col-md-12">
                        <input type="hidden" name="updateid" value="<?= $editrow['id'] ?>">
                        <input type="hidden" name="oldimg" value="<?= $editrow['picture'] ?>">
                        <input type="submit" class="btn my-btn mt-4" value="Update" name="update"/>
                    </div>
                </div>
              </form>


            <?php } ?>

        <?php
        
        if (isset($_GET['entry'])) { 

            if (isset($_POST['submit'])) {

              $name = addslashes($_POST['name']);
              $designation = addslashes($_POST['designation']); 
              $details = addslashes($_POST['details']);  
              $dept = addslashes($_POST['dept']);
              
              $filename = $_FILES["picture"]["name"]; 


              $ext = pathinfo($filename,PATHINFO_EXTENSION);
              $imgname = "StudentAdvisor-".time().".".$ext;
              $path = 'StudentAdvisor/' . $imgname;

              $query="INSERT INTO studentadvisor (name,designation,details,picture,dept) VALUES ('$name','$designation','$details','$path',$dept)";

              $q=mysqli_query($con,$query);
              if ($q) {
                $msg= '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';
                move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
              }else{
                $msg= '<div class="alert alert-danger" role="alert">Error! Please try again later.</div>';
              }
              
            }

        ?>

          <form method="post" action="" enctype="multipart/form-data" >
          <div class="form-in">
            <div class="row">
              

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold" >Student Advisor Name :</label>
                  <input type="text" class="form-control"  placeholder="Name" name="name" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                      <label class="font-weight-bold">Designation :</label>
                      <select class="form-control" name="designation">

                       <option value="Student Advisor">Student Advisor</option>                     
                      </select>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group">
                      <label class="font-weight-bold">Student Advisor Details :</label>
                      <textarea placeholder="Student Advisor Details" class="form-control" name="details" id="mywysiwyg" rows="5"></textarea>
                  </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Image :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
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

              <div class="col-md-12">
                <input type="submit" class="btn my-btn" name="submit" value="Submit" />
              </div>
            </div>
          </div>
        </form>

      <?php } ?>
      <br>
      <?= $msg; ?>

          <br>
        <h4>All Student Advisor List :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Student Advisor Name</th>
              <th>Designation</th>
              <th>Student Advisor Details</th>
              <th>Image</th>
              <th>Department</th>
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM studentadvisor ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'. $row['name'].'</td>';
                  echo '<td>'. $row['designation'].'</td>';
                  echo '<td align="left">'.  nl2br(substr($row['details'],0,300)).'</td>';

                  echo "<td><img src='". $row['picture']."' width='100'/></td>";
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
$sql = "SELECT COUNT(id) FROM studentadvisor";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
        
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>