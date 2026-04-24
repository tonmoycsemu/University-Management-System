<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fas fa-calendar-alt"></i>CLASS ROUTINE</h2>
			</div>
		</div>
		
		
		<div class=" section-row evets-row">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="research-content" style="margin:0 0 30px 0;">
							<h2 class="my-h-list-before"><strong>CLASS ROUTINE :</strong></h2>
<?php 
	$q='SELECT * FROM routine';
    $result=mysqli_query($con,$q);
    while($rows=mysqli_fetch_array($result)){
 ?>	
							
			<?php 
			
			$qry='SELECT * FROM dept where id='.$rows['dept'].'';
                    $res=mysqli_query($con,$qry);
                    $rowc=mysqli_fetch_array($res);
			 ?>		
			 			<div class="research-property border-bottom">
								<h4 class="my-h-list-before" style="margin:20px 0;"><strong><?= $rowc['dept']?> :</strong></h4>
								<div class="dept-content">
							
									
									<img src="admin/<?= $rows['picture']?>" alt="" style="margin:0 0 20px 0;width:100%;"/>

									<p><a class="btn btn-primary" href="admin/<?= $rows['file']?>">Download Routine</a></p>
									
									<p align="justify">First Year : Semister I</p>
									<p align="justify">First Year : Semister II</p>
									<p align="justify">Second Year : Semister I</p>
									<p align="justify">Second Year : Semister II</p>
									<p align="justify">Third Year : Semister I</p>
									<p align="justify">Third Year : Semister II</p>
									<p align="justify">Fourth Year : Semister I</p>
									<p align="justify">Fourth Year : Semister II</p>

								</div>
							</div>

	<?php } ?>						
							
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