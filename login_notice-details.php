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
									if (isset($_GET['id'])) {
									  $id=$_GET['id'];
									  
									  $qry="SELECT * FROM noticeboard WHERE id= $id ";
									  $res=mysqli_query($con,$qry);
									  $row=mysqli_fetch_array($res);
						                
						                  
						            ?>

						           
						           <p style="color: #000"><strong><?php echo ' '.  nl2br(substr($row['title'],0,150)).'';?></strong></p>
						           <p style="color: #000"> <?php echo ''. $row['dates'].' ';?></p>
						           <p style="color: #000"><?php echo ' '.  nl2br(substr($row['details'],0,100000)).'';?></p>

						            <?php
						               } 
						            ?>
								</ul>
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
		
<?php include('login_footer.php'); ?>