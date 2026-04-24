<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="page-title page-title-about">
			<div class="container">
				<div class="row ">
					<h2><i class="fas fa-user-plus"></i>ADMISSIONS</h2>
				</div>
			</div>
		</div>
		
		<div class="admission p-100">
			<div class="container">
				<div class="row ">
					<div class="col-md-8">
						<?php 

							$q='SELECT * FROM pages WHERE title="Admission Requirements"';
			                $result=mysqli_query($con,$q);
			                $rows=mysqli_fetch_array($result);
						 ?>
						<div class="admission-content" style="margin:0 0 30px 0;">
							<h2 class="my-h-list-before"><strong><?= $rows['title'] ?> :</strong></h2>
							<div class="my-carousel-div">
								<div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

				<?php 
				$c=0;
				$q='SELECT * FROM banner WHERE category=9 ORDER BY id DESC LIMIT 3';
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
						</div>
					</div>
					
					<div class="col-md-4">
						<?php include('sidebar.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- Know More Info & Admission apply row -->
		<div class="row apply-know-row">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 admission-row">
						<h3>Albert Einstein</h3>
						<p>" Any intelligent fool can make things bigger, more complex, and more violent. It takes a touch of genius -- and a lot of courage -- to move in the opposite direction. "</p>

					</div>
					<div class="col-sm-6 info-row">
						<h3> Dr. APJ Abdul Kalam</h3>
						<p>" It doesn’t matter who I am, I will work, work and work,<br>All the forces of the universe will also assist me, I will achieve what I dream,<br>Even reaching any part of our Galaxy. "</p>
					</div>
				</div>
			</div>
		</div>
		
<?php include('footer.php'); ?>	