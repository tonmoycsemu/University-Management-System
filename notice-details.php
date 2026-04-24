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
							if (isset($_GET['id'])) {
								$id=(int)$_GET['id'];
								$qry="SELECT * FROM noticeboard WHERE id=$id";
								$res=mysqli_query($con,$qry);
								$row=mysqli_fetch_array($res);

								if($row){
							?>
							<p style="color:#000"><strong><?= htmlspecialchars($row['title']) ?></strong></p>
							<p style="color:#000"><?= htmlspecialchars($row['dates']) ?></p>
							<p style="color:#000"><?= nl2br(htmlspecialchars($row['details'])) ?></p>
							<?php } else {
								echo '<p>Notice not found</p>';
							} } ?>
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