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
                <h2>All Come Message</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="contact.php" class="btn btn-success ">Go Main Page</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $deleteq="DELETE FROM contact WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                        $msg= '<div class="alert alert-success" role="alert">Delated Successfully!</div>';
                      }
                      else{
                        $msg= '<div class="alert alert-danger" role="alert">Delated Failed.</div>';
                      }
                  }
          ?>

        
        <br>
      <?= $msg; ?>
          <br>
        <h4>Subscriber E-mail :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Name</th>
              <th>E-mail</th>
              <th>Phone Number</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
            <?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM contact ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($con, $sql); 
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'. $row['name'].'</td>';
                  echo '<td>'. $row['email'].'</td>';
                  echo '<td>'. $row['phone'].'</td>';
                  echo '<td>'. $row['message'].'</td>';
                  echo '<td>
                  <a href="?deleteid='. $row['id'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>   
                  </td>';
                  echo '</tr>';
                }

            ?>
        </table>
<?php  
$sql = "SELECT COUNT(id) FROM contact";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<nav aria-label="Page navigation example">
              <ul class="pagination">';  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='contact.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
        
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>