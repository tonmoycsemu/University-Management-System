<?php include('header.php'); ?>

<?php 

	$q='SELECT * FROM pages WHERE title="CAMPUS LIFE"';
    $result=mysqli_query($con,$q);
    $rows=mysqli_fetch_array($result);
 ?>

		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fas fa-university"></i><?= $rows['title'] ?></h2>
			</div>
		</div>
		
		
		<div class=" section-row evets-row">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="research-content" style="margin:0 0 30px 0;">
							<div class="research-property border-bottom">
								<h2 class="my-h-list-before"><strong></i><?= $rows['title'] ?> :</strong></h2>
								<div class="dept-content">
									
									<div class="my-carousel-div">
							<div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
			                <div class="carousel-inner" role="listbox">

							<?php 
							$c=0;

							$catQuery = "SELECT id FROM bannercategory WHERE category='Campus Life' LIMIT 1";
							$catResult = mysqli_query($con, $catQuery);
							$catRow = mysqli_fetch_array($catResult);
							$bannerCategoryId = isset($catRow['id']) ? (int)$catRow['id'] : 0;

							$q = "SELECT * FROM banner WHERE category=$bannerCategoryId ORDER BY id DESC LIMIT 3";
							$result = mysqli_query($con,$q);

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

<?php 

	$q='SELECT * FROM pages WHERE title="Cultural"';
    $result=mysqli_query($con,$q);
    $rows=mysqli_fetch_array($result);
 ?>							
							<div class="research-property border-bottom">
								<h2 class="my-h-list-before"><strong><?= $rows['title'] ?> :</strong></h2>
								<div class="dept-content">
									

									
									<p align="justify"><?= nl2br($rows['details']); ?></p>
								</div>
							</div>

		<?php 

	$q='SELECT * FROM pages WHERE title="Residence Halls"';
    $result=mysqli_query($con,$q);
    $rows=mysqli_fetch_array($result);
 ?>							
							
							<div class="research-property border-bottom">
								<h2 class="my-h-list-before"><strong><?= $rows['title'] ?> :</strong></h2>
								<div class="dept-content">
									
									
									<p align="justify"><?= nl2br($rows['details']); ?></p>
									
									
								</div>
							</div>

		<?php 

	$q='SELECT * FROM pages WHERE title="Student Organizations"';
    $result=mysqli_query($con,$q);
    $rows=mysqli_fetch_array($result);
 ?>

							<div class="research-property ">
								<h2 class="my-h-list-before"><strong><?= $rows['title'] ?> :</strong></h2>
								<div class="dept-content">
									
									
									<p align="justify"><?= nl2br($rows['details']); ?></p>
									
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