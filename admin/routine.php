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
                <h2>Student Routine Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="routine.php" class="btn btn-success ">Go Main Page</a>
                <a href="routine.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $logo = $_GET['img'];
                    $file = $_GET['file'];
                    $deleteq="DELETE FROM routine WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                          if(!empty($logo) && file_exists($logo) && is_writable($logo)){
                              unlink($logo);
                          }
                          if(!empty($file) && file_exists($file) && is_writable($file)){
                              unlink($file);
                          }
                          $msg= '<div class="alert alert-success" role="alert">Deleted Successfully!</div>';
                      }
                      else{
                        $msg= '<div class="alert alert-danger" role="alert">Delated Failed.</div>';
                      }
                  }
          ?>

          
          <?php
          
            ?>

        <?php
        
        if (isset($_GET['entry'])) { 
            if (isset($_POST['submit'])) {

              $dept     = $_POST['dept']; 
              $filename = $_FILES["picture"]["name"]; 
              $pdf = $_FILES["pdf"]["name"]; 

              $ext = pathinfo($filename,PATHINFO_EXTENSION);
              $imgname = "Routine-".time().".".$ext;
              $path = 'Routine/' . $imgname;

              $pext = pathinfo($pdf,PATHINFO_EXTENSION);
              $pdfname = "Routine-".time().".".$pext;
              $pdfpath = 'Routine/' . $pdfname;

              $query="INSERT INTO routine (dept,picture,file) VALUES ('$dept','$path','$pdfpath')";

            $q=mysqli_query($con,$query);
            if ($q) {
              $msg= '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';
              move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
            }else{
              $msg= '<div class="alert alert-danger" role="alert">Error! Please try again later.</div>';
            }
              
            }

        ?>
        <div class="row justify-content-center">
          <div class="col-md-8">
          <form method="post" action="" enctype="multipart/form-data" >
          <div class="form-in">
            <div class="row">
              

              <div class="col-md-12">
                <div class="form-group">
                  <div class="form-group">
                      <label class="font-weight-bold">Deapartment Name :</label>
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
                <div class="form-group">
                  <label class="font-weight-bold">Department Routine :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label class="font-weight-bold">Routine PDF File:</label>
                  <input type="file" class="form-control-file" name="pdf" id="exampleFormControlFile1">
                </div>
              </div>

              <div class="col-md-12">
                <input type="submit" class="btn my-btn" name="submit" value="Submit" />
              </div>
            </div>
          </div>
        </form>
        </div>
        </div>
      <?php } ?>
        <br>
      <?= $msg; ?>
          <br>
        <h4>All Department Routine :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Department Name</th>
              <th>Department Routine</th>
              <th>Routine PDF File</th>
              
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM routine ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                    $qry='SELECT * FROM dept where id='.$row['dept'].'';
                          $res=mysqli_query($con,$qry);
                          $rowc=mysqli_fetch_array($res);
                  echo '<td>'. $rowc['dept'].'</td>';
                  echo "<td><img src='". $row['picture']."' width='100'/></td>";
                  echo '<td>'. $row['file'].'</td>';
                  echo '<td>
                  <a href="?deleteid='. $row['id'].'&img='. $row['picture'].'&file='. $row['file'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>   
                  </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM routine";  
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