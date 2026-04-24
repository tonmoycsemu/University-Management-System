<?php include('login_header.php'); ?>
		
        <div class="row">
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
                        <div class="carousel-caption">
							<h4 class="para animated bounceInDown delay-2s"><i class="fa fa-star-o"></i><?= $row['text1'] ?><i class="fa fa-star-o"></i></h4>
                            <h2 class="para animated bounceInUp delay-2s"><?= $row['text2'] ?></h2>
                        </div>
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
        <!-- end slider -->
		
		<!-- Principal Intro Section -->
		<div class="principal-intro-row p-100">
			<div class="container">
				<div class="row">
					<?php 

						$q='SELECT * FROM vc WHERE designation="Vice-Chancellor"';
		                $result=mysqli_query($con,$q);
		                $row=mysqli_fetch_array($result);
					 ?>
					<div class="col-md-5">
						<div class="principal-intro-img">
							<?php echo "<img src='admin/". $row['picture']."'/>"; ?>
						</div>
						
					</div>
					<div class="col-md-7 ">
						<div class="principal-intro">
							<h6><i class="fa fa-star-o"></i><span>MEET OUR STAR</span><i class="fa fa-star-o"></i></h6>
							<h3>Vice-Chancellor Description</h3>
							
							
							<h4 class=""><?=  $row['name'] ?></h4>
							<h5><strong><?=  $row['designation'] ?></strong></h5>
							<p><?php echo '<td align="left">'.  nl2br(substr($row['details'],0,300)).'</td>'; ?></p>
							<div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- ACADEMIC Section -->
		
		<div class="academic-section p-100">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="academic-left academic-lefts" style="margin:0 0 30px 0;">
							<div class="academic-left-head">
								<p>Department of Our Unipix University</p>
							</div>
							
							<table class="home-table">
								<tbody>
                                    <?php
                                    $q='SELECT * FROM dept ORDER BY id ASC LIMIT 8';
                                    $result=mysqli_query($con,$q);
                                    $count = 0;
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        if($count % 4 == 0){
                                            echo '<tr>';
                                        }
                                        echo '<td><a href="dept.php?id='.(int)$row['id'].'"><span>'.htmlspecialchars($row['dept']).'</span></a></td>';
                                        if($count % 4 == 3){
                                            echo '</tr>';
                                        }
                                        $count++;
                                    }
                                    if($count > 0 && $count % 4 != 0){
                                        while($count % 4 != 0){
                                            echo '<td></td>';
                                            $count++;
                                        }
                                        echo '</tr>';
                                    }
                                    ?>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="academic-right">
							<ul class="list-group side-dept-list">
								<li><a href="">Results</a></li>
								<li><a href="">Class Routine</a></li>
								<li><a href="">Forms</a></li>
								<li><a href="">Library</a></li>
								<li><a href="">Campus Life</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- news-event-notice Section -->
		
		<div class="news-event-notice-section p-100 section-row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="news-event-right">
							<h2>Notice Board</h2>
							<div class="news-event-right-content">
								<ul class="list-group news-event-list">
									<?php
						                $q='SELECT * FROM noticeboard ORDER BY id DESC LIMIT 5';
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
							<div class="view-btn">
								<a href="login_notice.php" >View All Notice <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="campus-faciliti p-100">
			<div class="container">
				<div class="campus-faciliti-header">
					<h1>Campus Facilities</h1>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="campus-faciliti-card text-center">
							<i class="fa fa-wifi"></i>
							<h3>Free Wi-Fi Access</h3>
							<p>Students are given access to high speed internet all over the campus through wifi.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="campus-faciliti-card text-center">
							<i class="fa fa-flask"></i>
							<h3>Highly Equipped Labs</h3>
							<p>There are labs equipped with modern instruments in every relevant department.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="campus-faciliti-card text-center">
							<i class="fa fa-users"></i>
							<h3>Extra Curricular Activities</h3>
							<p>Students can participate in various extra curricular activities through various clubs.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="campus-faciliti-card text-center">
							<i class="fa fa-book"></i>
							<h3>Rich Library</h3>
							<p>The university has a fully air-conditioned and computerized rich library.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="campus-faciliti-card text-center">
							<i class="fa fa-building"></i>
							<h3>AC Class Rooms</h3>
							<p>Classrooms are air conditioned, so the students can study in comfort.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="campus-faciliti-card text-center">
							<i class="fas fa-coins"></i>
							<h3>Up to 75% Waiver</h3>
							<p>Meritorious students are rewarded with up to 75% waiver based on several criterias.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	
		<!-- Know More Info & Admission apply row -->
		<div class=" apply-know-row">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 admission-row">
						<h3>Albert Einstein</h3>
						<p>" Any intelligent fool can make things bigger, more complex, and more violent. It takes a touch of genius -- and a lot of courage -- to move in the opposite direction. "</p>

					</div>
					<div class="col-sm-6 info-row">
						<h3> Dr. APJ Abdul Kalam</h3>
						<p>" It doesn’t matter who I am, I will work, work and work,<br>All the forces of the universe will also assist me, I will achieve what I dream,<br>Even reaching any part of our Galaxy "</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="affiliations p-100">
				<div class="container">
					<div class="affiliations-header">
					<h1>Affiliations</h1>
				</div>
				
				<div class="affiliations-in">
					<div class="row">
						<?php
			                $q='SELECT * FROM affiliatelogo ORDER BY id ASC';
			                $result=mysqli_query($con,$q);
			                while($row=mysqli_fetch_array($result))
			                {

			            ?>
						<div class="col-sm-2">
							<div class="affiliations-img">
								<a href="<?php echo $row['link']; ?>" target="_blank">
									<?php echo "<img src='admin/". $row['logo']."'/>"; ?>
								</a>
							</div>
						</div>
						
						<?php
					}
						?>
					</div>
				</div>
				
				
			</div>
		</div>
		
<?php include('login_footer.php'); ?>		