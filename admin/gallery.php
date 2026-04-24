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
                <h2>Gallery Photo Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="gallery.php" class="btn btn-success ">Go Main Page</a>
                <a href="gallery.php?entry" class="btn btn-primary ">Add Data</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                  $id = $_GET['deleteid'];

                  $res = mysqli_query($con, "SELECT image FROM gallery WHERE id=$id");
                  $row = mysqli_fetch_assoc($res);
                  $img = $row['image'];

                  $deleteq = "DELETE FROM gallery WHERE id=$id";
                  
                  if(mysqli_query($con, $deleteq)){

                      // file delete (safe way)
                      if(!empty($img) && file_exists($img)){
                          unlink($img);
                      }

                      $msg= '<div class="alert alert-success" role="alert">Deleted Successfully!</div>';
                  }
                  else{
                      $msg= '<div class="alert alert-danger" role="alert">Delete Failed.</div>';
                  }
              }
          ?>

           <?php 

                  

                  if (isset($_POST['update'])) { 
                      $title = addslashes($_POST['title']); 
                      $category = $_POST['category'];
                      $updateid = $_POST['updateid'];
                      $oldimg = $_POST['oldimg'];

                      $filename  = $_FILES["picture"]["name"]; 
                      if($filename==NULL){
                        $path=$oldimg;
                      }else{
                        $ext = pathinfo($filename,PATHINFO_EXTENSION);
                        $imgname = "Gallery-".time().".".$ext;
                        $path = 'Gallery/' . $imgname;
                      }

                      $query="UPDATE gallery set image='$path',title='$title',category='$category' WHERE id=$updateid";
                       $q = mysqli_query($con,$query);
                      
                      if ($q) {
                        if($filename!=NULL){
                          if(!empty($oldimg) && file_exists($oldimg) && is_file($oldimg)){
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
                $eq="SELECT * FROM gallery WHERE id=$edit";
                $res=mysqli_query($con,$eq);
                $editrow=mysqli_fetch_array($res);

            ?>
            
              <form method="post" class="mb-5" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold" >Image Title :</label>
                        <input type="text" class="form-control" name="title" value="<?= $editrow['title'] ?>" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold">Image category</label>
                      <select class="form-control" name="category">

                      <?php 
                            $qq='SELECT * FROM gallerycategory WHERE id='.$editrow['category'].'';
                            $rresult=mysqli_query($con,$qq);
                            $row=mysqli_fetch_array($rresult);
                           ?>

                          <option value="<?= $row['id'] ?>"><?= $row['category'] ?></option>
                         <?php
                          $q='SELECT * FROM gallerycategory ORDER BY id ASC';
                          $result=mysqli_query($con,$q);
                          while($row=mysqli_fetch_array($result))
                          {
                            echo "<option value='".$row['id']."'>".$row['category']."</option>";
                          }
                      ?>                      
                        </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold">Image :</label>
                      <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                      <img src="<?= $editrow['image'] ?>" width="200"/>
                    </div>
                  </div>

                  
                  
                    
                    <div class="col-md-6">
                        <input type="hidden" name="updateid" value="<?= $editrow['id'] ?>">
                        <input type="hidden" name="oldimg" value="<?= $editrow['image'] ?>">
                        <input type="submit" class="btn my-btn mt-4" value="Update" name="update"/>
                    </div>
                </div>
              </form>


            <?php } ?>

        <?php
        
        if (isset($_GET['entry'])) { 

            if (isset($_POST['submit'])) {

              $title = addslashes($_POST['title']); 
              $category = addslashes($_POST['category']);
              
              $filename = $_FILES["picture"]["name"]; 


              $ext = pathinfo($filename,PATHINFO_EXTENSION);
              $imgname = "Gallery-".time().".".$ext;
              $path = 'Gallery/' . $imgname;

              $query="INSERT INTO gallery (image,title,category) VALUES ('$path','$title','$category')";

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
                  <label class="font-weight-bold" >Image Title :</label>
                  <input type="text" class="form-control"  placeholder="Notice Title" name="title" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Image Category</label>
                      <select class="form-control" name="category">

                       <?php
                          $q='SELECT * FROM gallerycategory ORDER BY id ASC';
                          $result=mysqli_query($con,$q);
                          while($row=mysqli_fetch_array($result))
                          {
                            echo "<option value='".$row['id']."'>".$row['category']."</option>";
                          }
                        ?>                      
                      </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Image :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                </div>
              </div>

              <div class="col-md-6">
                <input type="submit" class="btn my-btn" name="submit" value="Submit" />
              </div>
            </div>
          </div>
        </form>

      <?php } ?>
      <br>
      <?= $msg; ?>

          <br>
        <h4>All Gallery Photo :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Page Title</th>
              <th>Page Details</th>
              <th>Page Image</th>
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM gallery ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'. $row['title'].'</td>';

                    $qry='SELECT * FROM gallerycategory where id='.$row['category'].'';
                          $res=mysqli_query($con,$qry);
                          $rowc=mysqli_fetch_array($res);

                  echo '<td>'. $rowc['category'].'</td>';
                  echo "<td><img src='". $row['image']."' width='100'/></td>";
                  echo '<td>
                      <a href="?edit='. $row['id'].'" class="btn btn-warning" >Edit</a>
                      <a href="?deleteid='. $row['id'].'&img='. $row['image'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                      </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM gallery";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='gallery.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
        
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>