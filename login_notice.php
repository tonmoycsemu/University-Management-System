<?php include('login_header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-calendar"></i>NOTICE</h2>
			</div>
		</div>
		
		<!-- Events Section -->
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
						                while($row=mysqli_fetch_array($result))
						                {
						                  
						            ?>

						            <li><a href="login_notice-details.php?id=<?= $row['id']?>"><i class="fa fa-angle-double-right"></i>  <?php echo ''. $row['dates'].' ';
						            	 echo ' '.  nl2br(substr($row['title'],0,100)).'';
						             ?></a></li>

						            <?php
						                }
						            ?>
								</ul>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php include('login_sidebar.php'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
<?php include('login_footer.php'); ?>