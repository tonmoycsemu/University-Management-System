<?php include('header.php'); ?>
<?php include('admin/dbconnect.php');?>
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-graduation-cap"></i>ABOUT US</h2>
			</div>
		</div>
		
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
							<p style="color: #282923"><?php echo '<td align="left">'.  nl2br(substr($row['details'],0,600)).'</td>'; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		

		<!-- Our Teaacher section -->
		<div class="section-row teacher-row">
			<div class="container">
				<div class="row ">
					<div class="section-row-header-center">
						<h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
						<h1 style="font-family: 'Literata', serif;">MEET OUR TEACHERS</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
					<div class="owl-carousel" id="ourTeacher">
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in algorithms and system design.
									Focused on research, teaching, and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/christopher.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Christopher White</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in software development and databases.
									Experienced in practical industry applications.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/andrew.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Andrew Clark</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on artificial intelligence and data analytics.
									Active in research and modern computing.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/jessica.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Jessica Miller</strong></p>
									<p><i>Assistant Professor</i></p>
									<p >
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in computer systems and academic leadership.
									Leading research and departmental development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/david.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. David Wilson</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in machine learning and advanced computing.
									Strong background in research and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/michael.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Michael Brown</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on software engineering and system architecture.
									Experienced in teaching and development practices.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/sarah.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Sarah Davis</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in data science and information systems.
									Passionate about research and student development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/emily.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Emily Johnson</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in network security and cloud computing.
									Active in research and modern technologies.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/ryan.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Ryan Cooper</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-laptop-code"></i>Computer Science & Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on human-computer interaction and applications.
									Experienced in modern software development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/hannah.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Hannah Scott</strong></p>
									<p><i>Instructor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in power systems and electrical engineering.
									Strong in research, teaching, and leadership.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/jonathon.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Jonathan Reed</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in electronic circuits and communication systems.
									Experienced in practical engineering applications.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/daniel.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Daniel Harris</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on control systems and signal processing.
									Active in research and modern technologies.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/olivia.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Olivia Anderson</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in electrical machines and renewable energy.
									Focused on sustainable engineering solutions.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/laura.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Laura Martinez</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in embedded systems and microprocessors.
									Experienced in modern electronic technologies.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/allen.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Charles Allen</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on communication engineering and electronics.
									Strong in teaching and research development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/charlotte.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Charlotte White</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in power electronics and industrial systems.
									Experienced in practical engineering solutions.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/steven.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Steven Collins</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in automation systems and smart grids.
									Active in research and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/kevin.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Kevin Brooks</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-bolt"></i>Electronical & Electronic Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on electronics and circuit design.
									Passionate about teaching and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/natalie.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Natalie Green</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in software architecture and system design.
									Leading development and engineering research activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/alexander.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Alexander King</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in software testing and quality assurance.
									Focused on modern development practices.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/sophia.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Sophia Bennett</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in software systems and application development.
									Experienced in teaching and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/ethan.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Ethan Richardson</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on programming and software engineering principles.
									Active in research and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/lucas.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Lucas Bennett</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in system analysis and software design.
									Experienced in academic and research activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/chloe.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Chloe Mitchell</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in software project management and development.
									Strong in leadership and teaching.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/isabella.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Isabella Turner</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on modern software technologies and systems.
									Experienced in academic research and teaching.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/victoria.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Victoria Adams</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in software security and system performance.
									Active in research and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/cole.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Nathan Cole</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-code"></i>Software Engineering</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in application development and system integration.
									Dedicated to teaching and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/hayes.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Sebastian Hayes</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in data analysis and statistical modeling.
									Leading research in data driven solutions.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/adrian.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Adrian Caldwell</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in machine learning and data mining.
									Focused on modern data technologies.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/elena.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Elena Morris</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in big data analytics and processing.
									Active in research and development activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/victor.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Victor Langford</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on statistical analysis and data interpretation.
									Experienced in teaching and research.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/lily.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Lily Harper</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in predictive modeling and analytics.
									Strong in research and innovation activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/julian.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Julian Mercer</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in data visualization and analysis tools.
									Focused on modern data applications and systems.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/amelia.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Amelia Clarke</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on data engineering and system design.
									Experienced in real world data solutions.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/aaron.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Aaron Whitaker</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in machine learning and AI systems.
									Active in research and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/rachel.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Rachel Simmons</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-database"></i>Data Science</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in data science applications and analytics.
									Dedicated to teaching and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/leonard.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Leonard Shaw</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in academic leadership and departmental management.
									Focused on teaching excellence and research development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/blake.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Jonathan Blake</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in modern teaching methods and student engagement.
									Focused on academic growth and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/sophie.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Sophie Turner</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in research methodologies and subject specialization.
									Active in academic research and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/matthew.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Matthew Collins</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on advanced subject knowledge and teaching.
									Experienced in academic research and mentoring.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/eleanor.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Eleanor Hughes</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in subject expertise and curriculum development.
									Strong in teaching and academic leadership.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/dominic.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Dominic Carter</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on research and academic development.
									Experienced in teaching and student guidance.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/rabecca.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Rebecca Lawson</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in modern teaching techniques and practices.
									Focused on student learning and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/mitchel.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Andrew Mitchell</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in subject knowledge and academic research.
									Dedicated to teaching and mentoring students.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/abigail.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Abigail Foster</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-book-open"></i>English</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on academic excellence and curriculum development.
									Experienced in teaching and research activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/gregory.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Gregory Sullivan</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in academic leadership and subject expertise.
									Focused on teaching excellence and research development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/catherine.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Catherine Tresa</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in subject knowledge and curriculum development.
									Experienced in teaching and academic research.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/richard.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Richard Bennett</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on modern teaching methods and student engagement.
									Dedicated to academic growth and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/parker.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Natalie Parker</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in research methodologies and subject specialization.
									Active in academic research and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/marshall.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Steven Marshall</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in advanced subject knowledge and teaching.
									Experienced in mentoring and academic leadership.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/vanessa.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Vanessa Coleman</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on teaching practices and student development.
									Dedicated to academic excellence and growth.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/reeves.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Daniel Reeves</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in research and academic development.
									Experienced in teaching and student guidance.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/lauren.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Lauren Whitfield</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in subject expertise and curriculum design.
									Focused on research and academic excellence.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/grant.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Theodore Grant</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-chart-line"></i>Economics</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on modern teaching techniques and practices.
									Dedicated to student learning and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/kimberly.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Kimberly Hayes</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in business management and organizational leadership.
									Focused on strategic planning and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/benjamin.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Benjamin Carter</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in marketing and business strategies.
									Experienced in teaching and industry practices.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/olivia-grant.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Olivia Grant</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in finance, management and business analytics.
									Strong in research and decision making.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/pierce.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Jonathan Pierce</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on human resource management and development.
									Active in research and academic activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/melissa.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Melissa Turner</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in business operations and management systems.
									Dedicated to teaching and student development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/morgan.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Kevin Morgan</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in international business and global strategies.
									Experienced in research and academic leadership.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/mitchell.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Sophia Mitchell</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on business analysis and organizational growth.
									Active in research and innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/brandon.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Brandon Hayes</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-briefcase"></i>Business Administration</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in entrepreneurship and business innovation.
									Dedicated to modern teaching practices.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/nicole.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Nicole Rivera</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in legal systems, constitutional law and civil law.
									Focused on justice and legal education.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/anthony.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Anthony Wilson</strong></p>
									<p><i>Professor & Head</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in civil law, constitutional law, and legal practices.
									Experienced in teaching and research.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/lawson.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Victoria Lawson</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in criminal law, cyber law and legal procedures.
									Strong in academic and legal research.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/hoffman.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Gregory Hoffman</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on legal studies and case analysis.
									Dedicated to teaching and student development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/amanda.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Amanda Collins</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in international law and human rights.
									Active in research and legal innovation.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/douglas.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Kevin Douglas</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in corporate law and legal frameworks.
									Experienced in teaching and academic leadership.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/isabella-grant.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Isabella Grant</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Focused on legal education and practical law.
									Dedicated to student learning and development.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/whitmore.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Daniel Whitmore</strong></p>
									<p><i>Assistant Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Specialized in legal research and policy analysis.
									Active in academic and research activities.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/whitman.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Dr. Natalie Whitman</strong></p>
									<p><i>Associate Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
						<div class="teacher-item">
							<h5><i class="fas fa-balance-scale"></i>Law & Justice</h5>
							<div class="teacher-item-inner">
								<p class="teacher-desc">
									Expert in judiciary systems and legal practices.
									Strong in teaching and research excellence.
								</p>
								<div class="col-xs-4 clear-padding teacher-img">
									<img src="assets/img/teacher/sebastian.jpg" alt="teacher" />
								</div>
								<div class="col-xs-8 teacher-details">
									<p><strong>Prof. Sebastian Cole</strong></p>
									<p><i>Professor</i></p>
									<p>
										<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="teacher-know-more-link">
								<a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
							</div>
						</div>
					</div>	
				</div>	
			</div>	
		</div>


		




		
		
		<!-- What we offer section -->
		<div class="row section-row dark-row">
		    <div class="container">
		        <div class="section-row-header-center">
		            <h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
		            <h1>WHAT WE OFFER</h1>
		            <p>We provide quality education, modern facilities, and opportunities to grow in every aspect.</p>
		        </div>

		        <div class="about-row">

		            <div class="col-sm-6 col-md-4">
		                <div class="we-offer-item">
		                    <div class="we-offer-side">
		                        <i class="fa fa-graduation-cap"></i>
		                    </div>
		                    <h5>QUALITY EDUCATION</h5>
		                    <p>We provide modern and practical education to help students build strong academic and professional skills.</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-4">
		                <div class="we-offer-item">
		                    <div class="we-offer-side">
		                        <i class="fa fa-trophy"></i>
		                    </div>
		                    <h5>SPORTS & ACTIVITIES</h5>
		                    <p>We encourage sports and extracurricular activities to ensure physical fitness and teamwork skills.</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-4">
		                <div class="we-offer-item">
		                    <div class="we-offer-side">
		                        <i class="fa fa-book"></i>
		                    </div>
		                    <h5>MODERN LIBRARY</h5>
		                    <p>Our library provides a wide range of books, journals, and digital resources for better learning.</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-4">
		                <div class="we-offer-item">
		                    <div class="we-offer-side">
		                        <i class="fa fa-laptop"></i>
		                    </div>
		                    <h5>TECHNOLOGY SUPPORT</h5>
		                    <p>We offer modern labs and digital tools to enhance practical learning and technical skills.</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-4">
		                <div class="we-offer-item">
		                    <div class="we-offer-side">
		                        <i class="fa fa-users"></i>
		                    </div>
		                    <h5>SKILLED FACULTY</h5>
		                    <p>Our experienced teachers guide students with proper mentorship and real-life knowledge.</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-4">
		                <div class="we-offer-item">
		                    <div class="we-offer-side">
		                        <i class="fa fa-briefcase"></i>
		                    </div>
		                    <h5>CAREER SUPPORT</h5>
		                    <p>We prepare students for future careers through training, workshops, and career guidance.</p>
		                </div>
		            </div>

		            <div class="clearfix"></div>
		        </div>
		    </div>
		</div>
		
		<!-- Numbers Section -->
		<div class="row number-row">

		    <div class="container">

		        <!-- Heading -->
		        <div class="section-row-header-center text-center">
		            <h6 style="font-weight: bold;"><i class="fa fa-star-o"></i> OUR ACHIEVEMENTS <i class="fa fa-star-o"></i></h6>
		            <h1 style="font-weight: bold;">OUR UNIVERSITY IN NUMBERS</h1>
		            <p>We are proud of our achievements and the milestones we have reached over the years.</p>
		        </div>

		        <div class="row">
		            <div class="col-sm-6 col-md-3">
		                <div class="number-card">
		                    <i class="fa fa-book"></i>
		                    <span>200</span>
		                    <p>COURSES OFFERED</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-3">
		                <div class="number-card">
		                    <i class="fa fa-graduation-cap"></i>
		                    <span>70</span>
		                    <p>QUALIFIED TEACHERS</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-3">
		                <div class="number-card">
		                    <i class="fa fa-child"></i>
		                    <span>5000</span>
		                    <p>ENERGETIC STUDENTS</p>
		                </div>
		            </div>

		            <div class="col-sm-6 col-md-3">
		                <div class="number-card">
		                    <i class="fa fa-clock-o"></i>
		                    <span>100+</span>
		                    <p>AWESOME EVENTS</p>
		                </div>
		            </div>
		        </div>

		    </div>
		</div>
		
		<!-- Our Lab & Workshop-->
		<div class="section-row">
		    <div class="container">
		        <div class="section-row-header-center">
		            <h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
		            <h1>OUR LABS & OTHER WORKSHOP</h1>
		            <p>Explore our modern labs and workshops designed to build practical skills and real-world knowledge.</p>
		        </div>

		        <div class="row">
		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-laptop-code"></i> Computer Science & Engineering Lab</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/cse.jpg" alt="CSE Lab" />
		                            </div>
		                            <p class="teacher-desc">
		                                This lab provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-bolt"></i> Electrical & Electronic Engineering Lab</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/eee.jpg" alt="EEE Lab" />
		                            </div>
		                            <p class="teacher-desc">
		                                This lab provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <br><br>

		        <div class="row">
		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-code"></i> Software Engineering Lab</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/swe.jpg" alt="SWE Lab" />
		                            </div>
		                            <p class="teacher-desc">
		                                This lab provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-database"></i> Data Science Lab</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/ds.jpg" alt="Data Science Lab" />
		                            </div>
		                            <p class="teacher-desc">
		                                This lab provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <br><br>

		        <div class="row">
		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-briefcase"></i> Business Administration Workshop</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/ba.jpg" alt="Business Workshop" />
		                            </div>
		                            <p class="teacher-desc">
		                                This workshop provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-book-open"></i> English Workshop</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/eng.jpg" alt="English Workshop" />
		                            </div>
		                            <p class="teacher-desc">
		                                This workshop provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <br><br>

		        <div class="row">
		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-chart-line"></i> Economics Workshop</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/eco.jpg" alt="Economics Workshop" />
		                            </div>
		                            <p class="teacher-desc">
		                                This workshop provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-sm-6 text-center">
		                <div class="teacher-item teacher-about-row">
		                    <div class="teacher-about-row-inner">
		                        <h5><i class="fas fa-balance-scale"></i> Law & Justice Workshop</h5>
		                        <div class="teacher-item-inner">
		                            <div class="clear-padding teacher-img">
		                                <img src="assets/img/lab/law.jpg" alt="Law Workshop" />
		                            </div>
		                            <p class="teacher-desc">
		                                This workshop provides modern facilities and practical learning opportunities for students. It helps develop real-world skills, technical knowledge, and hands-on experience through guided activities and projects.
		                            </p>
		                        </div>
		                        <div class="teacher-know-more-link">
		                            <a href="javascript:void(0);"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
		                        </div>
		                    </div>
		                </div>
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
						<p>" It doesn’t matter who I am, I will work, work and work,<br>All the forces of the universe will also assist me, I will achieve what I dream,<br>Even reaching any part of our Galaxy "</p>
					</div>
				</div>
			</div>
		</div>
		
<?php include('footer.php'); ?>	