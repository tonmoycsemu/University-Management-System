<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-preschool">
			<div class="container">
				<h2><i class="fas fa-book-open"></i>ACADEMIC PROGRAMS</h2>
			</div>
		</div>
		
		<!-- Academics Section -->
		<div class="row section-row">
			<div class="container">
				<div class="col-md-4">
						<?php include('sidebar.php'); ?>
					</div>
				<div class="col-md-8">
					<div class="academic-content-box" style="text-align: justify; line-height: 1.8;">
						<?php 

							$q='SELECT * FROM pages WHERE title="ABOUT OUR ACADEMIC PROGRAMS DETAILS"';
			                $result=mysqli_query($con,$q);
			                $rows=mysqli_fetch_array($result);
						 ?>
						<h3 class="my-h-list-before"><?= $rows['title'] ?></h3>
						<div class="my-carousel-div">
							<div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
			                <div class="carousel-inner" role="listbox">

							<?php 
							$c=0;
							$q='SELECT * FROM banner WHERE category=12 ORDER BY id DESC LIMIT 3';
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
						
						<p><?= nl2br($rows['details']); ?></p>

						<div class="section-divider"></div>
						<h3 class="my-h-list-before">INSTITUTE TIMINGS</h3>
						<div class="timings-table">
							<p class="header">
								<span>SUN - FRI</span>
							</p>
							<p>
								<span>10:00am TO 4:00pm</span>
							</p>
						</div>
						<div class="section-divider"></div>
							<h3>Institute</h3>
							<div id="pAccordion" class="p-accordion faq-accordion">

								<?php 

										$q='SELECT * FROM faculty WHERE designation="Professor & Head"';
						                $result=mysqli_query($con,$q);
						                while($row=mysqli_fetch_array($result)){
								?>
							<?php 

								$qry='SELECT * FROM dept where id='.$row['dept'].'';
	                          	$res=mysqli_query($con,$qry);
	                          	$rowc=mysqli_fetch_array($res);
							?>

								<h4 class="accordion-header"><?= $rowc['dept']; ?></h4>
								<div class="accordion-inner">
									<div class="row">
									

										<div class="col-md-3">
											<img style="width: 100px;  margin: 0 auto;" src="admin/<?= $row['picture']; ?>" alt="teacher" />
										</div>
										<div class="col-md-9">
											<h5 class="Head-name"><?= $row['name']; ?></h5>
											<p>Professor & Head of the <?= $rowc['dept']; ?></p>
											<p style="line-height: 24px;"><?= nl2br($row['details']); ?></p>

										</div>
									</div>
								</div>

							<?php } ?>

							</div>
						
					</div>
				</div>
			</div>
		</div>
		
<?php include('footer.php'); ?>	