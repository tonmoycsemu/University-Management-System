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
                <h2>Pages Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="pages.php" class="btn btn-success ">Go Main Page</a>
                <a href="pages.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>

          <br/><br/>

          <?php 
                  $msg=NULL;

                  if (isset($_GET['deleteid'])) {
                    $id=(int)$_GET['deleteid'];
                    $img=$_GET['img'];
                    $deleteq="DELETE FROM pages WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                        if(!empty($img) && file_exists($img) && is_writable($img)){
                            unlink($img);
                        }
                       $msg= '<div class="alert alert-success" role="alert">Delated Successfully!</div>';
                      }
                      else{
                        $msg= '<div class="alert alert-danger" role="alert">Delated Failed.</div>';
                      }
                  }
          ?>

           <?php 
                  if (isset($_POST['update'])) { 
                      $title = addslashes($_POST['title']); 
                      $details = addslashes($_POST['details']);
                      $updateid = (int)$_POST['updateid'];
                      $oldimg = $_POST['oldimg'];

                      $filename  = $_FILES["picture"]["name"];

                      if($filename != NULL){
                        $ext = pathinfo($filename,PATHINFO_EXTENSION);
                        $imgname = "Pages-".time().".".$ext;
                        $path = 'Pages/' . $imgname;

                        if(!is_dir('Pages')){
                            mkdir('Pages', 0777, true);
                        }
                      }else{
                        $path = $oldimg;
                      }

                      $query="UPDATE pages set title='$title',details='$details',image='$path' WHERE id=$updateid";
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

          <?php if (isset($_GET['edit'])) { 
                $edit=(int)$_GET['edit'];
                $eq="SELECT * FROM pages WHERE id=$edit";
                $res=mysqli_query($con,$eq);
                $editrow=mysqli_fetch_array($res);

                if($editrow){
            ?>

              <form method="post" class="mb-5" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold" >Page Title :</label>
                        <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($editrow['title']) ?>" />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="font-weight-bold">Pages Details :</label>
                      <textarea class="form-control" name="details" id="mywysiwyg" rows="5"><?= htmlspecialchars($editrow['details']) ?></textarea>
                    </div>
                  </div>

                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="font-weight-bold">Page Image :</label>
                      <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                      <?php if(!empty($editrow['image'])){ ?>
                        <img src="<?= htmlspecialchars($editrow['image']) ?>" width="200"/>
                      <?php } ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                        <input type="hidden" name="updateid" value="<?= (int)$editrow['id'] ?>">
                        <input type="hidden" name="oldimg" value="<?= htmlspecialchars($editrow['image']) ?>">
                        <input type="submit" class="btn btn-primary mt-4" value="Update" name="update"/>
                  </div>
                </div>
              </form>

            <?php 
                } else {
                    echo '<div class="alert alert-warning" role="alert">Page data not found!</div>';
                }
            } ?>

        <?php
        if (isset($_GET['entry'])) { 

            if (isset($_POST['submit'])) {

              $title = addslashes($_POST['title']); 
              $details = addslashes($_POST['details']);
              $filename = $_FILES["picture"]["name"];

              if($filename==NULL){
                $path='';
              }else{
                $ext = pathinfo($filename,PATHINFO_EXTENSION);
                $imgname = "Pages-".time().".".$ext;
                $path = 'Pages/' . $imgname;

                if(!is_dir('Pages')){
                    mkdir('Pages', 0777, true);
                }
              }

              $query="INSERT INTO pages (title,details,image) VALUES ('$title','$details','$path')";

              $q=mysqli_query($con,$query);
              if ($q) {
                if($filename != NULL){
                    move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
                }
                $msg= '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';

              }else{
                $msg= '<div class="alert alert-danger" role="alert">Error! Please try again later.</div>';
              }

            }
        ?>

          <form method="post" action="" enctype="multipart/form-data" >
          <div class="form-in">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="font-weight-bold" >Pages Title :</label>
                  <input type="text" class="form-control"  placeholder="Page Title" name="title" required="1">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                    <label class="font-weight-bold">Pages Details :</label>
                    <textarea class="form-control" placeholder="Page Details" name="details" id="mywysiwyg" rows="5"></textarea>
                  </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label class="font-weight-bold">Page Image :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                </div>
              </div>

              <div class="col-md-6">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
              </div>
            </div>
          </div>
        </form>

      <?php } ?>
      <br>
      <?= $msg; ?>

          <br>
        <h4>All Pages List :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Page Title</th>
              <th>Page Details</th>
              <th>Page Image</th>
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = (int)$_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM pages ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'. htmlspecialchars($row['title']).'</td>';
                  echo '<td align="left">'.  nl2br(htmlspecialchars(substr($row['details'],0,300))).'</td>';
                  if(!empty($row['image'])){
                    echo "<td><img src='". htmlspecialchars($row['image'], ENT_QUOTES) ."' width='100'/></td>";
                  }else{
                    echo '<td>No Image</td>';
                  }
                  echo '<td>
                      <a href="?edit='. (int)$row['id'].'" class="btn btn-warning" >Edit</a>
                      <a href="?deleteid='. (int)$row['id'].'&img='. urlencode($row['image']) .'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                      </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM pages";  
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