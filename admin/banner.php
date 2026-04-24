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
                <h2>Banner Image Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="banner.php" class="btn btn-success ">Go Main Page</a>
                <a href="banner.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $img=$_GET['img'];
                    $deleteq="DELETE FROM banner WHERE id=$id";
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
                      $text1 = addslashes($_POST['text1']);
                      $text2 = addslashes($_POST['text2']); 
                      $category = addslashes($_POST['category']);  

                      $updateid    = $_POST['updateid'];
                      $oldimg      = $_POST['oldimg'];

                      $filename  = $_FILES["picture"]["name"]; 
                      if($filename==NULL){
                        $path=$oldimg;
                      }else{
                        $ext = pathinfo($filename,PATHINFO_EXTENSION);
                        $imgname = "BannerImage-".time().".".$ext;
                        $path = 'BannerImage/' . $imgname;
                      }

                      $query="UPDATE banner set bannerimg='$path',text1='$text1',text2='$text2',category=$category WHERE id=$updateid";
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
                $eq="SELECT * FROM banner WHERE id=$edit";
                $res=mysqli_query($con,$eq);
                $editrow=mysqli_fetch_array($res);

            ?>
            
              <form method="post" class="mb-5" enctype="multipart/form-data">
                <h3 class="mb-3">Edit a post :</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold" >Text 1 :</label>
                      <input type="text" class="form-control" name="text1" r value="<?= $editrow['text1'] ?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold" >Text 2 :</label>
                      <input type="text" class="form-control" name="text2"  value="<?= $editrow['text2'] ?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold">Image :</label>
                      <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                      <br/>
                        <img src="<?= $editrow['bannerimg'] ?>" width="200"/>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-weight-bold">Banner category :</label>
                      <select class="form-control" name="category">

                      <?php 
                            $qq='SELECT * FROM bannercategory WHERE id='.$editrow['category'].'';
                            $rresult=mysqli_query($con,$qq);
                            $row=mysqli_fetch_array($rresult);
                           ?>

                          <option value="<?= $row['id'] ?>"><?= $row['category'] ?></option>
                         <?php
                          $q='SELECT * FROM bannercategory ORDER BY id ASC';
                          $result=mysqli_query($con,$q);
                          while($row=mysqli_fetch_array($result))
                          {
                            echo "<option value='".$row['id']."'>".$row['category']."</option>";
                          }
                      ?>                      
                        </select>
                    </div>
                  </div>
                        
                    <div class="col-md-12">
                        <input type="hidden" name="updateid" value="<?= $editrow['id'] ?>">
                        <input type="hidden" name="oldimg" value="<?= $editrow['bannerimg'] ?>">
                        <input type="submit" class="btn my-btn mt-4" value="Update" name="update"/>
                    </div>
                </div>
              </form>


            <?php } ?>

        <?php
        
        if (isset($_GET['entry'])) { 

            if (isset($_POST['submit'])) {

              $text1 = addslashes($_POST['text1']);
              $text2 = addslashes($_POST['text2']); 
              $category = addslashes($_POST['category']);  
              
              $filename = $_FILES["picture"]["name"]; 

              $ext = pathinfo($filename,PATHINFO_EXTENSION);
              $imgname = "BannerImage-".time().".".$ext;
              $path = 'BannerImage/' . $imgname;

              $query="INSERT INTO banner (bannerimg,text1,text2,category) VALUES ('$path','$text1','$text2',$category)";

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
                  <label class="font-weight-bold" >Text 1 :</label>
                  <input type="text" class="form-control"  placeholder="Name" name="text1" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold" >Text 1 :</label>
                  <input type="text" class="form-control"  placeholder="Name" name="text2">
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Banner Image :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                      <label class="font-weight-bold">Banner Category :</label>
                      <select class="form-control" name="category">

                       <?php
                          $q='SELECT * FROM bannerCategory ORDER BY id ASC';
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
        <h4>Banner Image List :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Banner Image</th>
              <th>Text 1</th>
              <th>Text 2</th>
              <th>Banner Category</th>
              <th>Action</th>
            </tr>
            <?php

$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM banner ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);  
 

                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo "<td><img src='". $row['bannerimg']."' width='100'/></td>";
                  echo '<td>'. $row['text1'].'</td>';
                  echo '<td>'. $row['text2'].'</td>';

                      $qry='SELECT * FROM bannercategory where id='.$row['category'].'';
                          $res=mysqli_query($con,$qry);
                          $rowc=mysqli_fetch_array($res);
                  echo '<td>'. $rowc['category'].'</td>';
                  echo '<td>
                      <a href="?edit='. $row['id'].'" class="btn btn-warning" >Edit</a>
                      <a href="?deleteid='. $row['id'].'&img='. $row['bannerimg'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                      </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM banner";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='banner.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
        
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>