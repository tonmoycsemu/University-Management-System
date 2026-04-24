<?php include('header.php'); ?>
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fas fa-poll"></i>RESULT</h2>
			</div>
		</div>
		<div class=" section-row evets-row">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="my-carousel-div" style="margin: 0 0 30px 0;">
							<div id="homeSlider" class="carousel slide" data-ride="carousel">
			                	<div class="carousel-inner" role="listbox">

									<?php 
									$c = 0;
									$q = "SELECT * FROM banner WHERE category=13 ORDER BY id ASC LIMIT 3";
									$result = mysqli_query($con, $q);

					                while($row = mysqli_fetch_array($result))
					                {
					                	$active = ($c == 0) ? 'active' : '';
									?>
					                    <div class="item <?= $active; ?>">
					                        <img src="admin/<?= $row['bannerimg'] ?>" alt="slide1">
					                    </div>
									<?php $c++; } ?>
					                   
				                </div>

				                <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
				                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
				                    <span class="sr-only">Previous</span>
				                </a>
				                <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
				                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
				                    <span class="sr-only">Next</span>
				                </a>
            				</div>
						</div>

						<div class="result-content" style="margin:0 0 30px 0">
							<h2 class="my-h-list-before">Student Result :</h2>
							<form action="" method="post">
								<div class="row">
									<div class="col-sm-5">
										<input type="text" name="id" class="form-control" placeholder="Student Id">
									</div>
									<div class="col-sm-4">
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
									<div class="col-sm-3">
										<input type="submit" name="re_submit" value="Fetch Results" class="btn my-btn ml-3">
									</div>	
								</div>
							</form> 

							<div style="margin: 30px 20px;">
<?php
$msg = NULL;

function gradeFromCgpa($cgpa){
	if($cgpa == 4.00){
		return 'A+';
	} elseif($cgpa >= 3.75){
		return 'A';
	} elseif($cgpa >= 3.50){
		return 'A-';
	} elseif($cgpa >= 3.25){
		return 'B+';
	} elseif($cgpa >= 3.00){
		return 'B';
	} elseif($cgpa >= 2.75){
		return 'B-';
	} elseif($cgpa >= 2.50){
		return 'C+';
	} elseif($cgpa >= 2.25){
		return 'C';
	} elseif($cgpa >= 2.00){
		return 'D';
	} else {
		return 'Fail';
	}
}

if (isset($_POST['re_submit'])) {

    $id = trim($_POST['id']);
    $semester = trim($_POST['semester']);

    if($id == '' || $semester == ''){
        $msg = '<div class="alert alert-danger" role="alert">Please enter Student Id and select Semester.</div>';
    } else {

        $studentQuery = "SELECT * FROM student WHERE studentID='$id'";
        $studentRes = mysqli_query($con, $studentQuery);

        if($studentRes && mysqli_num_rows($studentRes) > 0){

            $student = mysqli_fetch_array($studentRes);

            $deptRow = NULL;
            $deptQuery = "SELECT * FROM dept WHERE id=".$student['dept'];
            $deptRes = mysqli_query($con, $deptQuery);
            if($deptRes){
                $deptRow = mysqli_fetch_array($deptRes);
            }

            $resultQuery = "SELECT * FROM result WHERE studentID='$id' AND semester='$semester' ORDER BY id DESC";
            $resultRes = mysqli_query($con, $resultQuery);

            if($resultRes && mysqli_num_rows($resultRes) > 0){

                $resultRows = [];
                $totalCgpa = 0;
                $totalCredit = 0;

                while($r = mysqli_fetch_array($resultRes)){

                    $curriculumQuery = "SELECT * FROM curriculam WHERE courseCode='".$r['courseCode']."'";
                    $curriculumRes = mysqli_query($con, $curriculumQuery);
                    $curriculum = NULL;

                    if($curriculumRes){
                        $curriculum = mysqli_fetch_array($curriculumRes);
                    }

                    if(!$curriculum){
                        continue;
                    }

                    $r['courseTitle'] = $curriculum['courseTitle'];
                    $r['credit'] = $curriculum['credit'];
                    $r['grade'] = gradeFromCgpa((float)$r['cgpa']);

                    $totalCgpa += (float)$r['cgpa'];
                    $totalCredit += (float)$curriculum['credit'];

                    $resultRows[] = $r;
                }

                $rowcount = count($resultRows);

                if($rowcount > 0){
                    $finalCgpa = $totalCgpa / $rowcount;
                    $finalGrade = gradeFromCgpa($finalCgpa);
?>
								<div class="row">
									<div class="col-sm-12">
										<strong>Name :</strong> <?= $student['name'] ?>
									</div>
									<div class="col-sm-12">
										<strong>Program :</strong> B.Sc in <?= $deptRow ? $deptRow['dept'] : '' ?>
									</div>
									<div class="col-sm-12">
										<strong>Department :</strong> <?= $deptRow ? $deptRow['dept'] : '' ?>
									</div>
									<div class="col-sm-6">
										<strong>Student ID :</strong> <?= $student['studentID'] ?>
									</div>
									<div class="col-sm-6">
										<strong>Semester :</strong> <?= $semester ?>
									</div>
									<div class="col-sm-4">
										<strong>Result :</strong> <?php printf("%.2f", $finalCgpa); ?>
									</div>
									<div class="col-sm-4">
										<strong>Grade :</strong> <?= $finalGrade ?>
									</div>
									<div class="col-sm-4">
										<strong>Creadit :</strong> <?= $totalCredit ?>
									</div>
								</div>

								<br><br>

								<h2><?= $semester; ?></h2>

								<table class="table tbl_stripe">
						            <tr>
						              <th>Course Code</th>
						              <th>Course Title</th>
						              <th>Creadit</th>
						              <th>CGPA</th>
						              <th>Grade</th>
						            </tr>
						            <?php
						            foreach($resultRows as $row){
						            	echo '<tr>';
						            	echo '<td>'.$row['courseCode'].'</td>';
						            	echo '<td>'.$row['courseTitle'].'</td>';
						            	echo '<td>'.$row['credit'].'</td>';
						            	echo '<td>'.$row['cgpa'].'</td>';
						            	echo '<td>'.$row['grade'].'</td>';
						            	echo '</tr>';
						            }

						            echo '<tr>';
						            echo '<td></td>';
						            echo '<td></td>';
						            echo '<td><strong>'.$totalCredit.'</strong></td>';
						            echo '<td><strong>';
						            printf("%.2f", $finalCgpa);
						            echo '</strong></td>';
						            echo '<td><strong>'.$finalGrade.'</strong></td>';
						            echo '</tr>';
						            ?>
						        </table>
<?php
                    } else {
                        $msg = '<div class="alert alert-danger" role="alert">No matched curriculum found for this result data.</div>';
                    }

            } else {
                $msg = '<div class="alert alert-danger" role="alert">Error! You entered wrong Student Id or wrong Semester. Please try again later.</div>';
            }

        } else {
            $msg = '<div class="alert alert-danger" role="alert">Error! You entered wrong Student Id or wrong Semester. Please try again later.</div>';
        }
    }
}

echo $msg;
?>
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4">
						<?php include('sidebar.php'); ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<?php include('footer.php'); ?>