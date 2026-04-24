<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fas fa-file-alt"></i>FORMS</h2>
			</div>
		</div>
		
		
		<div class=" section-row evets-row">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="research-content" style="margin:0 0 30px 0;">
							
							<div class="research-property">
								<h2 class="my-h-list-before"><strong>FORMS :</strong></h2>
								<div class="dept-content">
											<div class="my-carousel-div">
							<div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
			                <div class="carousel-inner" role="listbox">

							<?php 
							$c=0;
							$q='SELECT * FROM banner WHERE category=14 ORDER BY id ASC LIMIT 3';
						                $result=mysqli_query($con,$q);
			                while($row=mysqli_fetch_array($result))
			                {
			                	if ($c==0) {
			                		$active='active';
			                	}
			                	else{
			                		$active='';
			                	}

			                	//$c==0?'active':'';
							?>
			                	
			                    <div class="item <?= $active; ?>">
			                        <img src="admin/<?= $row['bannerimg'] ?>" alt="slide1">
			                        
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
					<p align="justify">Students can use these online forms as well as those hard copy forms available in Exam/Admission/Registrar office</p>
	<?php 

	$q='SELECT * FROM form ';
    $result=mysqli_query($con,$q);
    while($rows=mysqli_fetch_array($result)){
 ?>				
									
									<h4><a href="admin/<?= $rows['form']; ?>"><?= $rows['formTitle']; ?></a></h4>
<?php } ?>
								</div>
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