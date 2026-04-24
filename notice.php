<?php include('header.php'); ?>

<div class="row page-title page-title-about">
	<div class="container">
		<h2><i class="fa fa-calendar"></i>NOTICE</h2>
	</div>
</div>

<div class="row section-row evets-row">
	<div class="container">
		<div class="col-md-8">
			<div class="event-items"style="margin:0 0 40px 0;">
				<div class="right-side-notice">
						<h2 class="my-h-list-before"><strong>Notice :</strong></h2>
						<ul class="list-group news-event-list">
							<?php
							$q='SELECT * FROM noticeboard ORDER BY id DESC LIMIT 10';
							$result=mysqli_query($con,$q);
							if($result && mysqli_num_rows($result)>0){
								while($row=mysqli_fetch_array($result)){
							?>
							<li>
								<a href="notice-details.php?id=<?= intval($row['id']) ?>">
									<i class="fa fa-angle-double-right"></i>
									<?= htmlspecialchars($row['dates']).' '.nl2br(htmlspecialchars(substr($row['title'],0,100))) ?>
								</a>
							</li>
							<?php } } else { echo '<li>No notice found</li>'; } ?>
						</ul>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<?php include('sidebar.php'); ?>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>