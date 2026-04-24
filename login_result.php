<?php include('login_header.php'); ?>
		
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
               	 <!-- Wrapper for slides -->
				                <div class="carousel-inner" role="listbox">

							<?php 
							$c=0;
							$q='SELECT * FROM banner WHERE category=13 ORDER BY id ASC LIMIT 3';
				                $result=mysqli_query($con,$q);
				                while($row=mysqli_fetch_array($result))
				                {
				                	if ($c==0) {
				                		$active='active';
				                	}
				                	else{
				                		$active='';
				                	}
							?>
				                	
				                    <div class="item <?= $active; ?>">
				                        <img src="admin/<?= htmlspecialchars($row['bannerimg']) ?>" alt="slide1">
				                        	
				                    </div>
								<?php $c++; } ?>
				                   	
				                </div>

				                <!-- Slide Controls -->
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
							<h2 class="my-h-list-before">My Result :</h2>

							<div class="" style="margin: 30px 20px;">
<?php  
	$msg = NULL;

        $session_id = $_SESSION["id"] ?? '';
        $grade = NULL;
        $grades = NULL;
        $creadit = 0; 
        $creadit1 = 0;
        $result=0;
        $results = 0;

        $q="SELECT * FROM student WHERE studentID='".mysqli_real_escape_string($con,$session_id)."'";
        $res=mysqli_query($con,$q);
        $row=mysqli_fetch_array($res);
?>
	
		<div class="row">
			<div class="col-sm-12">
				<strong>Name :</strong> <?= htmlspecialchars($row['name'] ?? '') ?>
			</div>
			<?php 
				$qry='SELECT * FROM dept where id='.(int)($row['dept'] ?? 0);
                $res=mysqli_query($con,$qry);
                $rowc=mysqli_fetch_array($res);
			 ?>
			<div class="col-sm-12">
				<strong>Program  :</strong> BSc in  <?= htmlspecialchars($rowc['dept'] ?? '') ?>
			</div>
			<div class="col-sm-12">
				<strong>Department  :</strong> <?= htmlspecialchars($rowc['dept'] ?? '') ?>
			</div>
			<?php
			 	$q="SELECT * FROM result WHERE  studentID='".mysqli_real_escape_string($con,$session_id)."'";
		        $res=mysqli_query($con,$q);
		        $rowb=mysqli_fetch_array($res);
			?>

			<div class="col-sm-6">
				<strong>Student ID  :</strong> <?= htmlspecialchars($rowb['studentID'] ?? '') ?>
			</div>
			<div class="col-sm-6">
				<strong>Semester  :</strong> All Semester
			</div>
			<?php
				$q="SELECT * FROM result WHERE  studentID='".mysqli_real_escape_string($con,$session_id)."'";
		        $res=mysqli_query($con,$q);
				$rowcounts=mysqli_num_rows($res);

			 	$q="SELECT * FROM result WHERE  studentID='".mysqli_real_escape_string($con,$session_id)."'";
		        $res=mysqli_query($con,$q);
		        while($rowd=mysqli_fetch_array($res)){

		        	if($rowd['cgpa']>=2.00){

		        	$result += $rowd['cgpa'];
		        	$results = $rowcounts>0 ? $result/$rowcounts : 0;
		        	if($results == 4){
		        		$grade = 'A+';
		        	}
		        	elseif($results >=3.75 && $results<= 3.99){
		        		$grade = 'A';
		        	}
		        	elseif($results >=3.50 && $results<= 3.74){
		        		$grade = 'A-';
		        	}
		        	elseif($results >=3.25 && $results<= 3.49){
		        		$grade = 'B+';
		        	}
		        	elseif($results >=3.00 && $results<= 3.24){
		        		$grade = 'B-';
		        	}
		        	elseif($results >=2.50 && $results<= 2.99){
		        		$grade = 'C';
		        	}
		        	elseif($results >=2.00 && $results<= 2.49){
		        		$grade = 'D';
		        	}
		        	else{
		        		$grade = 'Fail';
		        	}

		        	}else{
		        		$grade = 'Fail';
		        		$results =0.00;
		        	}
		        }
			?>

			<?php 
$sql = "SELECT * FROM result WHERE  studentID='".mysqli_real_escape_string($con,$session_id)."' ORDER BY id DESC ";  
$result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result))
                {
                	$qry="SELECT * FROM curriculam where courseCode='".mysqli_real_escape_string($con,$row['courseCode'])."' AND dept=".(int)($rowc['id'] ?? 0)." LIMIT 1";
                        $res=mysqli_query($con,$qry);
                        $rowy=mysqli_fetch_array($res);
                        $creadit = $creadit + (float)($rowy['credit'] ?? 0);
                }

			?>
			<div class="col-sm-4">
				<strong>Result  :</strong> <?php printf ("%.2f", $results ); ?>
			</div>
			<div class="col-sm-4">
				<strong>Grade  :</strong> <?php echo htmlspecialchars($grade ?? ''); ?>
			</div>
			<div class="col-sm-4">
				<strong>Creadit Complete:</strong> <?php echo $creadit; ?>
			</div>
		</div>
		<br><br>

<?php  
	for($i = 1; $i <= 8; $i++){
	$semester='Semester '.$i;
	$seresult = 0;
	$creadit1 = 0;
	$q = "SELECT * FROM result WHERE studentID='".mysqli_real_escape_string($con,$session_id)."' AND semester='$semester' "; 
    $res=mysqli_query($con,$q);
    $rowcount=mysqli_num_rows($res);
	if($rowcount>0){
?>

		<h2><?= $semester;?></h2>
		 <table class="table tbl_stripe">
            <tr>
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Creadit</th>
              <th>CGPA</th>
              <th>Grade</th>
            </tr>
            <?php

$sql = "SELECT * FROM result WHERE studentID='".mysqli_real_escape_string($con,$session_id)."' AND semester='$semester' ORDER BY id DESC ";  
$result = mysqli_query($con, $sql);

                while($row=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                          $qry="SELECT * FROM curriculam where courseCode='".mysqli_real_escape_string($con,$row['courseCode'])."' AND dept=".(int)($rowc['id'] ?? 0)." LIMIT 1";
                          $res=mysqli_query($con,$qry);
                          $rowcc=mysqli_fetch_array($res);
                  echo '<td>'. htmlspecialchars($rowcc['courseCode'] ?? $row['courseCode']).'</td>';
                  echo '<td>'. htmlspecialchars($rowcc['courseTitle'] ?? '').'</td>';
                  echo '<td>'. htmlspecialchars($rowcc['credit'] ?? '').'</td>';
                  echo '<td>'. htmlspecialchars($row['cgpa']).'</td>';
                  	$sub_res = $row['cgpa'];
            		if($sub_res == 4){
		        		$grades = 'A+';
		        	}
		        	elseif($sub_res >=3.75 && $sub_res<= 3.99){
		        		$grades = 'A';
		        	}
		        	elseif($sub_res >=3.50 && $sub_res<= 3.74){
		        		$grades = 'A-';
		        	}
		        	elseif($sub_res >=3.25 && $sub_res<= 3.49){
		        		$grades = 'B+';
		        	}
		        	elseif($sub_res >=3.00 && $sub_res<= 3.24){
		        		$grades = 'B-';
		        	}
		        	elseif($sub_res >=2.50 && $sub_res<= 2.99){
		        		$grades = 'C';
		        	}
		        	elseif($sub_res >=2.00 && $sub_res<= 2.49){
		        		$grades = 'D';
		        	}
		        	else{
		        		$grades = 'Fail';
		        	}
		        	echo '<td>'.$grades.'</td>';
                  	echo '</tr>';
                  	$creadit1 = $creadit1 + (float)($rowcc['credit'] ?? 0);
                  	$seresult = $seresult + $row['cgpa'];
                  	$seresults = $rowcount>0 ? $seresult/$rowcount : 0;
                  	$sub_res = $seresults;
                  	if($sub_res == 4){
		        		$grades = 'A+';
		        	}
		        	elseif($sub_res >=3.75 && $sub_res<= 3.99){
		        		$grades = 'A';
		        	}
		        	elseif($sub_res >=3.50 && $sub_res<= 3.74){
		        		$grades = 'A-';
		        	}
		        	elseif($sub_res >=3.25 && $sub_res<= 3.49){
		        		$grades = 'B+';
		        	}
		        	elseif($sub_res >=3.00 && $sub_res<= 3.24){
		        		$grades = 'B-';
		        	}
		        	elseif($sub_res >=2.50 && $sub_res<= 2.99){
		        		$grades = 'C';
		        	}
		        	elseif($sub_res >=2.00 && $sub_res<= 2.49){
		        		$grades = 'D';
		        	}
		        	else{
		        		$grades = 'Fail';
		        	}
                }
                	echo '<tr>';
                	echo '<td></td>';
                	echo '<td></td>';
                	
                	echo '<td><strong>'.$creadit1.'</strong></td>';
                	echo '<td><strong>';?>
                	<?php printf ("%.2f", $seresults ); ?>
                	<?php echo'</strong></td>';
                	
                	echo '<td><strong>'.$grades.'</strong></td>';
                	echo '</tr>';

            ?>
        </table>

<?php
	}
    }
?>
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
				
			
					<div class="col-md-4">
						<?php include('login_sidebar.php'); ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
<?php include('login_footer.php'); ?>