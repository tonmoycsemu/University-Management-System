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
                <h2>Image category Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="image_categoty.php" class="btn btn-success ">Go Main Page</a>
                <a href="image_categoty.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                   
                    $deleteq="DELETE FROM gallerycategory WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                       
                        $msg= '<div class="alert alert-success" role="alert">Delated Successfully!</div>';
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

          $category     =addslashes($_POST['category']); 
          
          $query="INSERT INTO gallerycategory (category) VALUES ('$category')";

        $q=mysqli_query($con,$query);
        if ($q) {
          $msg= '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';
          
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
                  <label class="font-weight-bold" >Gallery category :</label>
                  <input type="text" class="form-control"  placeholder="Gallery Category" name="category" required="1">
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
        <h4>All Image Category :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Gallery category</th>
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM gallerycategory ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'. $row['category'].'</td>';
                  echo '<td>
                  <a href="?deleteid='. $row['id'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>  
                  </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM gallerycategory";  
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