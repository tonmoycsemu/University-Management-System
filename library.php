<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fas fa-book"></i>LIBRARY</h2>
			</div>
		</div>
		
		
		<div class=" section-row evets-row">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="research-content" style="margin:0 0 40px 0;">
			<?php 

	$q='SELECT * FROM pages WHERE title="LIBRARY" ';
    $result=mysqli_query($con,$q);
    $rows=mysqli_fetch_array($result)
 ?>						
							<div class="research-property border-bottom">
								<h2 class="my-h-list-before"><strong><?= $rows['title']?> :</strong></h2>
								<div class="dept-content">
											<div class="my-carousel-div">
							<div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
			                <div class="carousel-inner" role="listbox">

							<?php 
							$c=0;
							$q='SELECT * FROM banner WHERE category=15 ORDER BY id ASC LIMIT 3';
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
							<p align="justify"><?= nl2br($rows['details']); ?></p>

								</div>
							</div>
							<div class="research-property border-bottom">
								<h2 class="my-h-list-before"><strong>OFFICER :</strong></h2>
								<div class="dept-content">
									<div class="faculty-content">
										<div class="row">
<?php $q="SELECT * FROM librarian ORDER BY id ASC";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    {
                ?>													
			<div class="col-md-4">
				<div class="faculty" style="margin: 0 0 20px 0;">
				<div class="faculty-img">
					<a href="librarian-details.php?id=<?= $row['id']?>"><img src="admin/<?= $row['picture'] ?>" alt="event" /></a>
				</div>
				<p class="text-center"><strong><?= $row['name'] ?></strong></p>
				<p class="text-center mb-4"><?= $row['designation'] ?></p>
				</div>
			</div>
	<?php } ?>
											
										</div>
										
									</div>
								</div>
							</div>
							<?php include('contact-section.php'); ?>
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