<?php include('header.php'); ?>

		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-flask"></i>RESEARCH</h2>
			</div>
		</div>

		<!-- Events Section -->
		<div class=" section-row evets-row" style="text-align: justify;">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="research-content"  style="margin:0 0 30px 0;">
							<div class="research-property border-bottom">
								<?php 

									$q='SELECT * FROM pages WHERE title="Laboratory"';
					                $result=mysqli_query($con,$q);
					                $row=mysqli_fetch_array($result);
								 ?>
								<h2 class="my-h-list-before"><strong><?= htmlspecialchars($row['title'] ?? 'Laboratory') ?> :</strong></h2>
								<div class="my-carousel-div">
									<div id="homeSlider" class="carousel slide" data-ride="carousel">

										<div class="carousel-inner" role="listbox">

<?php 
$c=0;
$q='SELECT * FROM banner WHERE category=11 ORDER BY id DESC LIMIT 3';
$result=mysqli_query($con,$q);
while($rowb=mysqli_fetch_array($result))
{
	$active = ($c==0)?'active':'';
?>											
											<div class="item <?= $active; ?>">
												<img src="admin/<?= htmlspecialchars($rowb['bannerimg']) ?>" alt="slide1">
											</div>

<?php $c++; } ?>											
										</div>

										<a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
											<span class="fa fa-arrow-left"></span>
										</a>
										<a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
											<span class="fa fa-arrow-right"></span>
										</a>
									</div>
								</div>

								<p><?= nl2br(htmlspecialchars($row['details'] ?? 'No data found')) ?></p>
							</div>

							<div class="research-property border-bottom">
								<?php 
									$q='SELECT * FROM pages WHERE title="Innovation"';
					                $result=mysqli_query($con,$q);
					                $row=mysqli_fetch_array($result);
								 ?>
								<h2 class="my-h-list-before"><strong><?= htmlspecialchars($row['title'] ?? 'Innovation') ?> :</strong></h2>
								<p><?= nl2br(htmlspecialchars($row['details'] ?? 'No data found')) ?></p>
							</div>

							<div class="research-property">
								<?php 
									$q='SELECT * FROM pages WHERE title="Journal"';
					                $result=mysqli_query($con,$q);
					                $row=mysqli_fetch_array($result);
								 ?>
								<h2 class="my-h-list-before"><strong><?= htmlspecialchars($row['title'] ?? 'Journal') ?> :</strong></h2>
								<p><?= nl2br(htmlspecialchars($row['details'] ?? 'No data found')) ?></p>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>

					<div class="col-md-4">
						<?php include('sidebar.php'); ?>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

<?php include('footer.php'); ?>