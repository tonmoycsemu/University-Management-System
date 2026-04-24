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
                <h2>Affiliate Logo Registration</h2>
            </div>
            <div class="col-md-5 text-right">
                <a href="affiliate-Logo.php" class="btn btn-success ">Go Main Page</a>
                <a href="affiliate-Logo.php?entry" class="btn btn-primary ">Data Entry</a>
            </div>
          </div>

          <br/><br/>
          
          <?php 

                  $msg=NULL;
                 
                  if (isset($_GET['deleteid'])) {
                    $id=$_GET['deleteid'];
                    $logo = $_GET['img'];
                    $deleteq="DELETE FROM affiliatelogo WHERE id=$id";
                      if(mysqli_query($con,$deleteq)){
                       unlink($logo);
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

          $link     =addslashes($_POST['link']); 
          $filename = $_FILES["picture"]["name"]; 


          $ext = pathinfo($filename,PATHINFO_EXTENSION);
          $imgname = "Profile-".time().".".$ext;
          $path = 'affiliate-Logo/' . $imgname;

          $query="INSERT INTO affiliatelogo (logo,link) VALUES ('$path','$link')";

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
          <form method="post" action="" class="my-form" enctype="multipart/form-data" >
          <div class="form-in">
            <div class="row justify-content-center">
              

              <div class="col-md-12">
                <div class="form-group">
                  <label class="font-weight-bold" >Affiliate Logo Link :</label>
                  <input type="text" class="form-control"  placeholder="Affiliate Logo Link" name="link" required="1">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label class="font-weight-bold">Affiliate Logo Picture :</label>
                  <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
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
        <h4>All Affiliate Logo List :</h4>
        <table class="table tbl_stripe">
            <tr>
              <th>Affiliate Logo Image</th>
              <th>Affiliate Logo Link</th>
              <th>Action</th>
            </tr>
            <?php
                $q='SELECT * FROM affiliatelogo ORDER BY id DESC';
                $result=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo "<td><img src='". $row['logo']."' width='100'/></td>";
                  echo '<td>'. $row['link'].'</td>';
                  echo '<td>
                  <a href="?deleteid='. $row['id'].'&img='. $row['logo'].'" class="btn btn-danger" onClick="return confirm(\' Are you sure to delete data..\') ">Delete</a>   
                  </td>';
                  echo '</tr>';
                }

            ?>
        </table>

        
        </div>
      </div>
  </div>

<?php include('footer.php'); ?>