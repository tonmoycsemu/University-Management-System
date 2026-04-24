<?php include('header.php'); ?>

		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-flask"></i>RESULT</h2>
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
									$c=0;
									$q='SELECT * FROM banner WHERE category=13 ORDER BY id ASC LIMIT 3';
									$result=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($result))
									{
										$active = ($c==0) ? 'active' : '';
									?>

			                    	<div class="item <?= $active; ?>">
			                        	<img src="admin/<?= htmlspecialchars($row['bannerimg']) ?>" alt="slide1">
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
							<form action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-5">
										<input type="text" name="id" class="form-control" placeholder="Student Id" required>
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

							<div style="margin:20px 0;">
								<h4 class="my-h-list-before">Grading System</h4>
								<img src="assets/img/grading-system.png" alt="Grading System" class="img-responsive" style="max-width:100%; border:1px solid #ddd; padding:5px;">
							</div>

							<div class="" style="margin: 30px 20px;">
<?php  
	function grade_from_point($point){
		if ($point >= 4.00) {
			return 'A+';
		} elseif ($point >= 3.75) {
			return 'A';
		} elseif ($point >= 3.50) {
			return 'A-';
		} elseif ($point >= 3.25) {
			return 'B+';
		} elseif ($point >= 3.00) {
			return 'B';
		} elseif ($point >= 2.75) {
			return 'B-';
		} elseif ($point >= 2.50) {
			return 'C+';
		} elseif ($point >= 2.25) {
			return 'C';
		} elseif ($point >= 2.00) {
			return 'D';
		}
		return 'F';
	}

	$msg = NULL;

	if (isset($_POST['re_submit'])) {

        $id = trim($_POST['id']);
        $semester = trim($_POST['semester']);
        $finalPoint = 0.00;
        $finalGrade = 'F';
        $totalCredit = 0.00;
        $totalWeightedPoint = 0.00;
        $resultRows = array();

        $q="SELECT * FROM student WHERE studentID='".mysqli_real_escape_string($con,$id)."'";
        $res=mysqli_query($con,$q);
        $student=mysqli_fetch_array($res);

        if (!$student) {
        	echo '<div class="alert alert-warning">Student not found!</div>';
        } else {

	        $qry='SELECT * FROM dept WHERE id='.(int)$student['dept'];
	        $res=mysqli_query($con,$qry);
	        $deptRow=mysqli_fetch_array($res);

	        $resultQuery="SELECT * FROM result WHERE studentID='".mysqli_real_escape_string($con,$id)."' AND semester='".mysqli_real_escape_string($con,$semester)."'";
	        $resResult=mysqli_query($con,$resultQuery);

	        if (!$resResult || mysqli_num_rows($resResult) == 0) {
	        	echo '<div class="alert alert-warning">No result found for this student and semester.</div>';
	        } else {

	        	while($rowe=mysqli_fetch_array($resResult)){
	        		$courseCode = $rowe['courseCode'];
	        		$courseTitle = '';
	        		$credit = 0.00;
	        		$cgpa = (float)$rowe['cgpa'];

	        		$curriculumQuery = "SELECT * FROM curriculam WHERE courseCode='".mysqli_real_escape_string($con,$courseCode)."' AND dept=".(int)$student['dept']." LIMIT 1";
	        		$curriculumRes = mysqli_query($con,$curriculumQuery);
	        		$curriculumRow = mysqli_fetch_array($curriculumRes);

	        		if ($curriculumRow) {
	        			$courseTitle = $curriculumRow['courseTitle'];
	        			$credit = (float)$curriculumRow['credit'];
	        		}

	        		$totalCredit += $credit;
	        		$totalWeightedPoint += ($cgpa * $credit);

	        		$resultRows[] = array(
	        			'courseCode' => $courseCode,
	        			'courseTitle' => $courseTitle,
	        			'credit' => $credit,
	        			'cgpa' => $cgpa,
	        			'grade' => grade_from_point($cgpa)
	        		);
	        	}

	        	if ($totalCredit > 0) {
	        		$finalPoint = $totalWeightedPoint / $totalCredit;
	        	} else {
	        		$sumPoint = 0.00;
	        		foreach($resultRows as $item){
	        			$sumPoint += $item['cgpa'];
	        		}
	        		$finalPoint = count($resultRows) > 0 ? ($sumPoint / count($resultRows)) : 0.00;
	        	}

	        	$finalGrade = grade_from_point($finalPoint);
?>

		<div class="row">
			<div class="col-sm-12">
				<strong>Name :</strong> <?= htmlspecialchars($student['name']) ?>
			</div>
			<div class="col-sm-12">
				<strong>Program :</strong> BSc in <?= htmlspecialchars($deptRow['dept'] ?? '') ?>
			</div>
			<div class="col-sm-12">
				<strong>Department :</strong> <?= htmlspecialchars($deptRow['dept'] ?? '') ?>
			</div>
			<div class="col-sm-6">
				<strong>Student ID :</strong> <?= htmlspecialchars($student['studentID']) ?>
			</div>
			<div class="col-sm-6">
				<strong>Semester :</strong> <?= htmlspecialchars($semester) ?>
			</div>
			<div class="col-sm-4">
				<strong>Result :</strong> <?php printf ("%.2f", $finalPoint ); ?>
			</div>
			<div class="col-sm-4">
				<strong>Grade :</strong> <?= htmlspecialchars($finalGrade) ?>
			</div>
			<div class="col-sm-4">
				<strong>Credit :</strong> <?php printf ("%.2f", $totalCredit ); ?>
			</div>
		</div>
		<br><br>

		<table class="table tbl_stripe">
			<tr>
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Credit</th>
              <th>Grade Point</th>
              <th>Letter Grade</th>
            </tr>
<?php 
	foreach($resultRows as $item){
?>            
            <tr>
            	<td><?= htmlspecialchars($item['courseCode']) ?></td>
            	<td><?= htmlspecialchars($item['courseTitle']) ?></td>
            	<td><?php printf("%.2f", $item['credit']); ?></td>
            	<td><?php printf("%.2f", $item['cgpa']); ?></td>
            	<td><?= htmlspecialchars($item['grade']) ?></td>
            </tr>
<?php } ?>
			<tr>
            	<td></td>
            	<td><strong>Total / Final</strong></td>
            	<td><strong><?php printf ("%.2f", $totalCredit ); ?></strong></td>
            	<td><strong><?php printf ("%.2f", $finalPoint ); ?></strong></td>
            	<td><strong><?= htmlspecialchars($finalGrade); ?></strong></td>
            </tr>
		</table>		

<?php
			}
	    }
    }
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