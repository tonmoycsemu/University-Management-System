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
                <h2>Contact Information Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="contact_info.php" class="btn btn-success ">Go Main Page</a>
                <a href="contact_info.php?entry" class="btn btn-primary ">Add Data</a>
            </div>
          </div>
            <br>
          <?php 
                  $msg=NULL;
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $img=$_GET['img'];
                    $deleteq="DELETE FROM contactinfo WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                        if(!empty($img) && file_exists($img)){
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
        $msg='';
        if (isset($_GET['entry'])) {
        if (isset($_POST['submit'])) {
 
          $name      =addslashes($_POST['name']); 
          $address   =addslashes($_POST['address']);
          $phone     =addslashes($_POST['phone']);
          $fax       =addslashes($_POST['fax']);
          $website   =addslashes($_POST['website']);
          $email     =addslashes($_POST['email']);
          $filename  = $_FILES["picture"]["name"]; 


          $ext = pathinfo($filename,PATHINFO_EXTENSION);
          $imgname = "Contactinfo-".time().".".$ext;
          $path = 'Contactinfo/' . $imgname;

          $query="INSERT INTO contactinfo (name,address,phone,fax,website,email,picture) VALUES ('$name','$address','$phone','$fax','$website','$email','$path')";

            $q=mysqli_query($con,$query);
            if ($q) {
              $msg= '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';
              move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
            }else{
              $msg= '<div class="alert alert-danger" role="alert">Error! Please try again later.</div>';
            }
          
        }

        ?>

          <h2>Contact Information</h2>
            <br>
          <form method="post" action="" enctype="multipart/form-data" >
          <div class="form-in">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Institiute Name :</label>
                  <input type="text" class="form-control"  placeholder="Institiute Name" name="name" required="1">
                </div>
              </div> 

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Institiute Address :</label>
                  <input type="text" class="form-control" placeholder="Institiute Address " name="address" required="1">
                </div>
              </div> 

               <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number" name="phone" required="1">
                </div>
              </div>

               <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Fax :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Fax number" name="fax" required="1">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Website :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Website Name" name="website" required="1">
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
                  <label for="exampleFormControlFile1">Logo</label>
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
            <h4>Contact Information List :</h4>
              <table class="table tbl_stripe">
              <tr>
                  <th>Institiute Name</th>
                  <th>Institiute Address</th>
                  <th>Phone</th>
                  <th>Fax</th>
                  <th>Website</th>
                  <th>E-mail</th>
                  <th>Logo</th>
                  <th>Action</th>
              </tr>
              <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM contactinfo ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql); 
                    while($row=mysqli_fetch_array($result))
                    {
                      echo '<tr>';
                      echo '<td>'. $row['name'].'</td>';
                      echo '<td>'. $row['address'].'</td>';
                      echo '<td>'. $row['phone'].'</td>';
                      echo '<td>'. $row['fax'].'</td>';
                      echo '<td>'. $row['website'].'</td>';
                      echo '<td>'. $row['email'].'</td>';
                      echo "<td><img src='". $row['picture']."' width='100'/></td>";
                      echo '<td>

                      <a href="?deleteid='. $row['id'].'&img='. $row['picture'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                      </td>';
                      echo '</tr>';
                    }

                ?>
            </table>
<?php  
$sql = "SELECT COUNT(id) FROM contactinfo";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='contact_info.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
        
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>