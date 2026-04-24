<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php include('leftmenu.php'); ?>
    </div>

    <div class="col-md-9">
      <br>
      <div class="row">
        <div class="col-md-7">
          <h2>Student Result Registration</h2>
        </div>
        <div class="col-md-5 text-right">
          <a href="result.php" class="btn btn-success">Go Main Page</a>
          <a href="result.php?entry=1" class="btn btn-primary">Data Entry</a>
        </div>
      </div>

      <br><br>

      <?php
      $msg = NULL;

      // Delete
      if (isset($_GET['deleteid'])) {
        $id = (int)$_GET['deleteid'];
        $deleteq = "DELETE FROM result WHERE id=$id";
        if(mysqli_query($con, $deleteq)){
          $msg = '<div class="alert alert-success" role="alert">Deleted Successfully</div>';
        } else {
          $msg = '<div class="alert alert-danger" role="alert">Delete Failed</div>';
        }
      }

      // Update
      if (isset($_POST['update'])) {
        $studentID  = addslashes($_POST['studentID']);
        $semester   = addslashes($_POST['semester']);
        $courseCode = addslashes($_POST['courseCode']); // actual course code যেমন CSE-101
        $cgpa       = addslashes($_POST['cgpa']);
        $updateid   = (int)$_POST['updateid'];

        $uq = "UPDATE result 
               SET studentID='$studentID',
                   semester='$semester',
                   courseCode='$courseCode',
                   cgpa='$cgpa'
               WHERE id=$updateid";
        $res = mysqli_query($con, $uq);

        if ($res) {
          $msg = '<div class="alert alert-success" role="alert">Updated successfully!</div>';
        } else {
          $msg = '<div class="alert alert-warning" role="alert">Update Failed!</div>';
        }
      }
      ?>

      <?php if (isset($_GET['edit'])) { 
        $edit = (int)$_GET['edit'];
        $eq = "SELECT * FROM result WHERE id=$edit";
        $res = mysqli_query($con, $eq);
        $editrow = mysqli_fetch_array($res);
      ?>
        <form method="post" class="mb-5">
          <h3>Edit a post :</h3>
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="font-weight-bold">Student ID :</label>
                <input type="text" class="form-control" name="studentID" required value="<?= $editrow['studentID'] ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="font-weight-bold">Semester</label>
                <select class="form-control" name="semester">
                  <option value="<?= $editrow['semester'] ?>"><?= $editrow['semester'] ?></option>
                  <option value="Semester 1">Semester 1</option>
                  <option value="Semester 2">Semester 2</option>
                  <option value="Semester 3">Semester 3</option>
                  <option value="Semester 4">Semester 4</option>
                  <option value="Semester 5">Semester 5</option>
                  <option value="Semester 6">Semester 6</option>
                  <option value="Semester 7">Semester 7</option>
                  <option value="Semester 8">Semester 8</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="font-weight-bold">Course Code :</label>
                <select class="form-control" name="courseCode">
                  <?php
                  $selectedCode = $editrow['courseCode'];
                  $qq = "SELECT * FROM curriculam WHERE courseCode='$selectedCode'";
                  $rresult = mysqli_query($con, $qq);
                  $selectedCourse = mysqli_fetch_array($rresult);

                  if ($selectedCourse) {
                    echo "<option value='".$selectedCourse['courseCode']."'>".$selectedCourse['courseCode']."</option>";
                  } else {
                    echo "<option value='".$editrow['courseCode']."'>".$editrow['courseCode']."</option>";
                  }

                  $q = "SELECT * FROM curriculam ORDER BY id ASC";
                  $result = mysqli_query($con, $q);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<option value='".$row['courseCode']."'>".$row['courseCode']."</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="font-weight-bold">CGPA :</label>
                <input type="text" class="form-control" name="cgpa" required value="<?= $editrow['cgpa'] ?>">
              </div>
            </div>

            <div class="col-md-12">
              <input type="hidden" name="updateid" value="<?= $editrow['id'] ?>">
              <input type="submit" class="btn my-btn" value="Update" name="update"/>
            </div>

          </div>
        </form>
      <?php } ?>

      <?php
      if (isset($_GET['entry'])) {
        if (isset($_POST['submit'])) {
          $studentID  = addslashes($_POST['studentID']);
          $semester   = addslashes($_POST['semester']);
          $courseCode = addslashes($_POST['courseCode']); // actual course code
          $cgpa       = addslashes($_POST['cgpa']);

          $query = "INSERT INTO result (studentID, semester, courseCode, cgpa) 
                    VALUES ('$studentID', '$semester', '$courseCode', '$cgpa')";
          $q = mysqli_query($con, $query);

          if ($q) {
            $msg = '<div class="alert alert-success" role="alert">Data Added Successfully!</div>';
          } else {
            $msg = '<div class="alert alert-danger" role="alert">Error! Please try again later.</div>';
          }
        }
      ?>
        <form method="post" action="">
          <div class="form-in">
            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Student ID :</label>
                  <input type="text" class="form-control" placeholder="Student ID" name="studentID" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Semester</label>
                  <select class="form-control" name="semester">
                    <option value="Semester 1">Semester 1</option>
                    <option value="Semester 2">Semester 2</option>
                    <option value="Semester 3">Semester 3</option>
                    <option value="Semester 4">Semester 4</option>
                    <option value="Semester 5">Semester 5</option>
                    <option value="Semester 6">Semester 6</option>
                    <option value="Semester 7">Semester 7</option>
                    <option value="Semester 8">Semester 8</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Course Code :</label>
                  <select class="form-control" name="courseCode">
                    <?php
                    $q = "SELECT * FROM curriculam ORDER BY id ASC";
                    $result = mysqli_query($con, $q);
                    while($row = mysqli_fetch_array($result))
                    {
                      echo "<option value='".$row['courseCode']."'>".$row['courseCode']."</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">CGPA :</label>
                  <input type="text" class="form-control" placeholder="CGPA" name="cgpa" required>
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

      <h4>All Result List :</h4>
      <table class="table tbl_stripe">
        <tr>
          <th>Student ID</th>
          <th>Semester</th>
          <th>Course Code</th>
          <th>CGPA</th>
          <th>Action</th>
        </tr>

        <?php
        $limit = 32;
        $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
        if ($page < 1) { $page = 1; }
        $start_from = ($page - 1) * $limit;

        $sql = "SELECT * FROM result ORDER BY id DESC LIMIT $start_from, $limit";
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result))
        {
          $courseCodeValue = $row['courseCode'];
          $qry = "SELECT * FROM curriculam WHERE courseCode='$courseCodeValue'";
          $res = mysqli_query($con, $qry);
          $rowc = mysqli_fetch_array($res);

          echo '<tr>';
          echo '<td>'.$row['studentID'].'</td>';
          echo '<td>'.$row['semester'].'</td>';
          echo '<td>'.($rowc ? $rowc['courseCode'] : $row['courseCode']).'</td>';
          echo '<td>'.$row['cgpa'].'</td>';
          echo '<td>
                  <a href="?edit='.$row['id'].'" class="btn btn-warning btn-sm">Edit</a>
                  <a href="?deleteid='.$row['id'].'" class="btn btn-danger btn-sm" onClick="return confirm(\'Are you sure to delete data?\')">Delete</a>
                </td>';
          echo '</tr>';
        }
        ?>
      </table>

      <?php
      $sql = "SELECT COUNT(id) FROM result";
      $rs_result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($rs_result);
      $total_records = $row[0];
      $total_pages = ceil($total_records / $limit);

      $pagLink = '<nav aria-label="Page navigation example"><ul class="pagination">';
      for ($i = 1; $i <= $total_pages; $i++) {
        $pagLink .= "<li class='page-item'><a class='page-link' href='?page=".$i."'>".$i."</a></li>";
      }
      echo $pagLink . "</ul></nav>";
      ?>

    </div>
  </div>
</div>

<?php include('footer.php'); ?>