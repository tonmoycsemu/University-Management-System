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
                <a href="librarian.php" class="btn btn-success ">Go Main Page</a>
                <a href="librarian.php?entry" class="btn btn-primary ">Add Data</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $img=$_GET['img'];
                    $deleteq="DELETE FROM librarian WHERE id=$id";
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
                      $updateid    = $_POST['updateid'];
                      $oldimg      = $_POST['oldimg'];

                      $filename  = $_FILES["picture"]["name"]; 
                      if($filename==NULL){
                        $path=$oldimg;
                      }else{
                        $ext = pathinfo($filename,PATHINFO_EXTENSION);
                        $imgname = "Librarian-".time().".".$ext;
                        $path = 'Librarian/'. $imgname;
                      }

                      $query="UPDATE librarian set designation='$designation',picture='$path',details='$details',name='$name' WHERE id=$updateid";
                       $q = mysqli_query($con,$query);
                      
                      if ($q) {
                        if($filename!=NULL){
                          unlink($oldimg);
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
                $eq="SELECT * FROM librarian WHERE id=$edit";
                $res=mysqli_query($con,$eq);
                $editrow=mysqli_fetch_array($res);

            ?>
            
              <form method="post" class="mb-5" enctype="multipart/form-data">
                <h3 class="mb-3">Edit a post :</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold" >Name :</label>
                      <input type="text" class="form-control"  placeholder="Name" name="name" required="1" value="<?= $editrow['name'] ?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="font-weight-bold">Designation :</label>
                          <input type="text" class="form-control"  placeholder="designation" name="designation" required="1" value="<?= $editrow['designation'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="font-weight-bold">Librarian Details :</label>
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
              
              $filename = $_FILES["picture"]["name"]; 


              $ext = pathinfo($filename,PATHINFO_EXTENSION);
              $imgname = "Librarian-".time().".".$ext;
              $path = 'Librarian/'. $imgname;

              $query="INSERT INTO librarian (designation,picture,details,name) VALUES ('$designation','$path','$details','$name')";

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
                  <label class="font-weight-bold" >Librarian Name :</label>
                  <input type="text" class="form-control"  placeholder="Name" name="name" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                      <label class="font-weight-bold">Designation :</label>
                      <input type="text" class="form-control"  placeholder="designation" name="designation" required="1">
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group">
                      <label class="font-weight-bold">Librarian Details :</label>
                      <textarea placeholder="Librarian Details" class="form-control" name="details" id="mywysiwyg" rows="5"></textarea>
                  </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Image :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
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
              <th>Librarian Name</th>
              <th>Designation</th>
              <th>Image</th>
              <th>Librarian Details</th>
              
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM librarian ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'. $row['name'].'</td>';
                  echo '<td>'. $row['designation'].'</td>';
                  echo "<td><img src='". $row['picture']."' width='100'/></td>";
                  echo '<td align="left">'.  nl2br(substr($row['details'],0,300)).'</td>';

                  echo '<td>
                      <a href="?edit='. $row['id'].'" class="btn btn-warning" >Edit</a>
                      <a href="?deleteid='. $row['id'].'&img='. $row['picture'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                      </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM librarian";  
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