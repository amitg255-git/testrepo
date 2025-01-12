<?php include 'head.php'  ?>
<style>
#owl-demo-8 .owl-item{
	width: 200px !important;
}
	.edu2_faculty_des img{
	width: 100px !important;; 
	height: 60px !important;;
	margin: 5px !important;;
	float:none !important;

	padding: 0px !important;
	}
	.edu2_faculty_des figure{
		float: none !important;
	}
	figure center h6 {
		padding: 10px;
	}

	/* ???????????popup */

	.custom-model-main {
		text-align: center;
		overflow: hidden;
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		/* z-index: 1050; */
		-webkit-overflow-scrolling: touch;
		outline: 0;
		opacity: 0;
		-webkit-transition: opacity 0.15s linear, z-index 0.15;
		-o-transition: opacity 0.15s linear, z-index 0.15;
		transition: opacity 0.15s linear, z-index 0.15;
		z-index: -1;
		overflow-x: hidden;
		overflow-y: auto;
	}

	.model-open {
		z-index: 99999;
		opacity: 1;
		overflow: hidden;
	}

	.custom-model-inner {
		-webkit-transform: translate(0, -25%);
		-ms-transform: translate(0, -25%);
		transform: translate(0, -25%);
		-webkit-transition: -webkit-transform 0.3s ease-out;
		-o-transition: -o-transform 0.3s ease-out;
		transition: -webkit-transform 0.3s ease-out;
		-o-transition: transform 0.3s ease-out;
		transition: transform 0.3s ease-out;
		transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
		display: inline-block;
		vertical-align: middle;
		width: 300px;
		margin: 30px auto;
		max-width: 97%;
	}

	.custom-model-wrap {
		display: block;
		width: 100%;
		position: relative;
		background-color: #fff;
		border: 1px solid #999;
		border: 1px solid rgba(0, 0, 0, 0.2);
		border-radius: 6px;
		-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
		box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
		background-clip: padding-box;
		outline: 0;
		text-align: left;
		padding: 20px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		max-height: calc(100vh - 70px);
		overflow-y: auto;
	}

	.model-open .custom-model-inner {
		-webkit-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
		position: relative;
		z-index: 999;
	}

	.model-open .bg-overlay {
		background: rgba(0, 0, 0, 0.6);
		z-index: 99;
	}

	.bg-overlay {
		background: rgba(0, 0, 0, 0);
		height: 100vh;
		width: 100%;
		position: fixed;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		z-index: 0;
		-webkit-transition: background 0.15s linear;
		-o-transition: background 0.15s linear;
		transition: background 0.15s linear;
	}

	.close-btn {
		position: absolute;
		right: 0;
		top: -30px;
		cursor: pointer;
		z-index: 99;
		font-size: 30px;
		color: #fff;
	}

	@media screen and (min-width:800px) {
		.custom-model-main:before {
			content: "";
			display: inline-block;
			height: auto;
			vertical-align: middle;
			margin-right: -0px;
			height: 100%;
		}
	}

	@media screen and (max-width:799px) {
		.custom-model-inner {
			margin-top: 45px;
		}
	}

	/* ???????????popup */
	.kf_cur_catg_des img {
		width: 60px;
		height: 60px;
	}



	p {
		text-align: start;
	}

	/* ?????????????????card */
	.slider {
		display: flex;
		width: 100%;
		margin: 5px auto;
		overflow: hidden;
		padding: 2.5rem;
	}

	.itemm {
		animation: animate 25s linear infinite;
	}

	.itemm img {
		min-width: 190px;
		height: 70px;
		padding: 0 30px;
	}

	.slider:hover .itemm {
		animation-play-state: paused;
	}

	@keyframes animate {
		0% {
			transform: translate3d(0, 0, 0);
		}

		100% {
			transform: translate3d(-1800px, 0, 0);
		}
	}

	/* ?????????????????card */
	.cm_itemss {
		background: #f2f6fd;
		border-radius: 10px;
		text-align: center;
		width: 146px;
		height: 146px;
		display: flex;
		align-items: center;
		flex-direction: column;
		justify-content: center;
		padding: 10px;
		transition: .3s;
		text-decoration: none;
	}
</style>
<div class="edu2_main_bn_wrap">
	<div id="owl-demo-main" class="owl-carousel owl-theme">
		<div class="item">
			<figure>
				<img src="images/wal1.jpeg" style="height:585px;margin:0px" alt="" />
				<figcaption>
					<!-- <span>The Best Learning Institution</span> -->
					<h2>Online Enrollment Portal</h2>
					<!-- <p>We Belive there is nothing more important than Education.</p> -->
					<a href="#" class="btn-1 Click-here">Connect with Our Advisor</a>
				</figcaption>
			</figure>
		</div>
		<div class="item">
			<figure>
				<img src="images/career/2.jpg" style="height:585px;margin:0px" alt="" />
				<figcaption>
					<!-- <span>The Best Learning Institution</span> -->
					<h2>Online Enrollment Portal</h2>
					<!-- <p>We Belive there is nothing more important than Education.</p> -->
					<a href="#" class="btn-1 Click-here">Connect with Our Advisor</a>
				</figcaption>
			</figure>
		</div>
	
		
	</div>
</div>
<section>
				<div class="container">
					<div class="row">
						<!-- HEADING 1 START-->
						<div class="col-md-12">
							<div class="kf_edu2_heading1">
								<h3>Search by Country</h3>
							</div>
						</div>
						<!-- HEADING 1 END-->

						<!-- FACULTY SLIDER WRAP START-->
						<div class="edu2_faculty_wrap">
							<div id="owl-demo-8" class="owl-carousel owl-theme">
							<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/india.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">India</a></h6>
											
										</div>
									</div>
								
								</div>

								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/bangladesh.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">Bangladesh</a></h6>
											
										</div>
									</div>
								
								</div>

								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/china.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">China</a></h6>
											
										</div>
									</div>
								
								</div>

								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/georgia.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">Georgia</a></h6>
											
										</div>
									</div>
								</div>

								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/kajakhastan.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">kajakhastan</a></h6>
											
										</div>
									</div>
								
								</div>
								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/kyrgizstan.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">kyrgizstan</a></h6>
											
										</div>
									</div>
								
								</div>
								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/nepal.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">Nepal</a></h6>
											
										</div>
									</div>
								
								</div>
								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/russia.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">Russia</a></h6>
											
										</div>
									</div>
								
								</div>
								<div class="item">
									<!-- FACULTY DES START-->
									<div class="edu2_faculty_des">
										<figure><img src="images/career/country/ukraine.svg" alt=""/>
											
										</figure>
										<div class="edu2_faculty_des2">
											<h6><a href="#">Ukraine</a></h6>
											
										</div>
									</div>
								
								</div>
							</div>
						</div>
						<!-- FACULTY SLIDER WRAP END-->
					</div>
				</div>
			</section>
<!--ABOUT UNIVERSITY START-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="abt_univ_wrap">
					<!-- HEADING 1 START-->
					<div class="kf_edu2_heading1">

						
						<h3>Success for the last 10+ years</h3>
					</div>
					<!-- HEADING 1 END-->

					<div class="abt_univ_des">
						<!-- 
									<span>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</span> -->
						<h5>The Career Samadhan </h5>
						<p>we understand that the journey to higher education can be both exhilarating and overwhelming. That's why we've dedicated ourselves to creating a seamless and user-friendly platform to streamline the admission process for students, parents, and educational institutions alike.</p>
						<p>to empower students to pursue their dreams by providing them with the tools and resources they need to navigate the complex landscape of college admissions. We aim to democratize access to education by making the application process more transparent, efficient, and equitable for all.</p>
						<!-- <a href="#" class="btn-3">Know More</a> -->

					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="abt_univ_thumb">
					<figure>
						<img src="images/career/students_1.webp" style="height: 250px;" alt="" />
					</figure>
				</div>
			</div>

		</div>
	</div>
</section>
<!--ABOUT UNIVERSITY END-->
<div class="kf_content_wrap">
	<!--COURSE OUTER WRAP START-->
	<div class="kf_course_outerwrap">
		<div class="container">

			<div class="row">
				<div class="col-md-12" style="margin-top: 20px;">
					<center>
						<h3>In-Demand Courses in India</h3>
					</center>
				</div>

				<div class="col-md-6">
					<div class="row">
						<!--COURSE CATEGORIES WRAP START-->
						<div class="kf_cur_catg_wrap">
							<!--COURSE CATEGORIES WRAP HEADING START-->

							<!--COURSE CATEGORIES WRAP HEADING END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-1">
									<span><img src="images/engineering.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Engineering</h6>

									</div>
								</div>
							</div>
							<!--COURSE CATEGORIES DES END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-2">
									<span><img src="images/managment.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Management</h6>

									</div>
								</div>
							</div>


						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<!--COURSE CATEGORIES WRAP START-->
						<div class="kf_cur_catg_wrap">
							<!--COURSE CATEGORIES WRAP HEADING START-->

							<!--COURSE CATEGORIES WRAP HEADING END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-1">
									<span><img src="images/agriculture.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Agriculture</h6>

									</div>
								</div>
							</div>
							<!--COURSE CATEGORIES DES END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-2">
									<span><img src="images/law.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Law</h6>

									</div>
								</div>
							</div>


						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<!--COURSE CATEGORIES WRAP START-->
						<div class="kf_cur_catg_wrap">
							<!--COURSE CATEGORIES WRAP HEADING START-->

							<!--COURSE CATEGORIES WRAP HEADING END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-1">
									<span><img src="images/Paramedical.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Paramedical</h6>

									</div>
								</div>
							</div>
							<!--COURSE CATEGORIES DES END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-2">
									<span><img src="images/computer.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Computer</h6>

									</div>
								</div>
							</div>


						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<!--COURSE CATEGORIES WRAP START-->
						<div class="kf_cur_catg_wrap">
							<!--COURSE CATEGORIES WRAP HEADING START-->

							<!--COURSE CATEGORIES WRAP HEADING END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-1">
									<span><img src="images/medical1.jpg" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Medical</h6>

									</div>
								</div>
							</div>
							<!--COURSE CATEGORIES DES END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-2">
									<span><img src="images/education.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Education</h6>

									</div>
								</div>
							</div>


						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<!--COURSE CATEGORIES WRAP START-->
						<div class="kf_cur_catg_wrap">
							<!--COURSE CATEGORIES WRAP HEADING START-->

							<!--COURSE CATEGORIES WRAP HEADING END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-1">
									<span><img src="images/Journalism.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Journalism
										</h6>

									</div>
								</div>
							</div>
							<!--COURSE CATEGORIES DES END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-2">
									<span><img src="images/hm.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Hotel Management</h6>

									</div>
								</div>
							</div>


						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<!--COURSE CATEGORIES WRAP START-->
						<div class="kf_cur_catg_wrap">
							<!--COURSE CATEGORIES WRAP HEADING START-->

							<!--COURSE CATEGORIES WRAP HEADING END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-1">
									<span><img src="images/Nursing.jpg" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Nursing</h6>

									</div>
								</div>
							</div>
							<!--COURSE CATEGORIES DES END-->

							<!--COURSE CATEGORIES DES START-->
							<div class="col-md-6">
								<div class="kf_cur_catg_des color-2">
									<span><img src="images/pharmacy.png" alt=""></span>
									<div class="kf_cur_catg_capstion" style="margin-top: 25px;">
										<h6>Pharmacy</h6>

									</div>
								</div>
							</div>


						</div>

					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<!--TRAINING WRAP START-->
<section class="edu2_tarining_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="kf_edu2_training_des">
					<figure>
						<img src="images/career/1a.png" alt="" />
					</figure>
				</div>
			</div>

			<div class="col-md-8">
				<div class="edu2_training_wrap" style="margin-top:40px">
					<h4 style="color:white">How about you? Is there a destination on your list you’d love to visit?</h4>
					<h3>Let’s find the perfect option for you!</h3>
					<!--COUNTDOWN START-->

					<!--COUNTDOWN END-->
					<!-- <strong>Connect with our Advisor.</strong> -->
					<a href="#" class="btn-1 Click-here">Connect with our Advisor.</a>
				</div>

			</div>
		</div>
	</div>
</section>
<div class="kf_content_wrap">
	<section class="our_event_page">
		<div class="container">
			<div class="row">

				<!-- HEADING 2 START-->
				<div class="col-md-12">
					<div class="kf_edu2_heading2">
						<h3>Top Colleges in India</h3>
					</div>
				</div>
				<!-- HEADING 2 END-->

				<!-- EDU2 NEW DES START-->
				<?php

				$i = '1';
				$query = "SELECT * FROM add_sub_category WHERE home_c='1'";
				$result = mysqli_query($conn, $query);

				while ($row = mysqli_fetch_assoc($result)) {

				?>
					<div class="col-md-6">
						<div class="edu2_event_wrap side_change">
							<div class="edu2_event_des">
								<div class="col-md-12">

									<p><strong>Approved by :</strong><?php echo $row['aproved_by']; ?></p>
									<p><strong>Streams :</strong> <?php echo $row['streams']; ?> </p>
									<p><strong>Courses :</strong> <?php echo $row['n_courses']; ?> Courses </p>
									<p><strong>Total Package :</strong> INR <?php echo $row['inr']; ?>/- </p>

								</div>

								<!-- <h4>Dec</h4> -->
							
								<a href="detail.php?cid=<?php echo $row['sub_cat_id']; ?>" class="readmore btn btn-primary mx-3" style='background:#ea1a25;color:white'>View Detail</a>
								<a href="apply.php" class="readmore btn btn-secondary">Apply Now</a>
								<!-- <span>24</span> -->

							</div>

							<figure>
								<center>
									<h6 style="font-weight:800"><?php echo $row['sub_cat_name']; ?></h6>
								</center>
								<img src="admin/<?php echo $row['sub_cat_image']; ?>" alt="" />
								<!-- <figcaption><a href="#"><i class="fa fa-plus"></i></a></figcaption> -->
							</figure>
						</div>
					</div>
				<?Php } ?>
				<!-- EDU2 NEW DES END-->

				<div class="col-md-12">
					<!--KF_PAGINATION_WRAP START-->
					<div class="kf_edu_pagination_wrap">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">View All</span>
								</a>
							</li>

						</ul>
					</div>
					<!--KF_PAGINATION_WRAP END-->
				</div>

			</div>
		</div>
	</section>
</div>

<section class="abut-padiing">
	<div class="kf_intro_des_wrap aboutus_page">
		<div class="container">
			<div class="row">
				<!-- HEADING 2 START-->
				<div class="col-md-12">
					<div class="kf_edu2_heading2">
						<h3>The Career Samadhan Services</h3>
					</div>
				</div>
				<!-- HEADING 2 END-->

				<div class="col-md-3 col-sm-6">
					<!-- INTERO DES START-->
					<div class="kf_intro_des">
						<div class="kf_intro_des_caption">
							<span><i class=" icon-earth132 "></i></span>
							<h6>Career Counselling</h6>

						</div>
					</div>
					<!-- INTERO DES END-->
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- INTERO DES START-->
					<div class="kf_intro_des">
						<div class="kf_intro_des_caption">
							<span><i class=" icon-educational18"></i></span>
							<h6>University Shortlist</h6>

						</div>
					</div>
					<!-- INTERO DES END-->
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- INTERO DES START-->
					<div class="kf_intro_des">
						<div class="kf_intro_des_caption">
							<span><i class="icon-teacher4"></i></span>
							<h6>Application Documentation</h6>

						</div>
					</div>
					<!-- INTERO DES END-->
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- INTERO DES START-->
					<div class="kf_intro_des">
						<div class="kf_intro_des_caption">
							<span><i class="fa fa-globe"></i></span>
							<h6>Live Application Tracking</h6>

						</div>
					</div>
					<!-- INTERO DES END-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--COUNTER SECTION START-->
<section class="edu2_counter_wrap">
	<div class="container">
		<!--EDU2 COUNTER DES START-->
		<div class="edu2_counter_des">
			<span><i class="icon-group2"></i></span>
			<h3 class="counter">50</h3>
			<h5>Acedemic Courses</h5>
		</div>
		<!--EDU2 COUNTER DES END-->
		<!--EDU2 COUNTER DES START-->
		<div class="edu2_counter_des">
			<span><i class="icon-book236"></i></span>
			<h3 class="counter">400</h3>
			<h5>Universities</h5>
		</div>
		<!--EDU2 COUNTER DES END-->
		<!--EDU2 COUNTER DES START-->
		<div class="edu2_counter_des">
			<span><i class="icon-win5"></i></span>
			<h3 class="counter">5000</h3>
			<h5>STUDENTS SERVED</h5>
		</div>
		<!--EDU2 COUNTER DES END-->
		<!--EDU2 COUNTER DES START-->
		<div class="edu2_counter_des">
			<span><i class=" icon-user255"></i></span>
			<h3 class="counter">25000</h3>
			<h5>STUDENTS COUNSELLED</h5>
		</div>
		<!--EDU2 COUNTER DES END-->
	</div>
</section>
<!--COUNTER SECTION END-->
<section class="abut-padiing">
	<div class="kf_intro_des_wrap aboutus_page">
		<div class="container">
			<div class="row">
				<!-- HEADING 2 START-->
				<div class="col-md-12">
					<div class="kf_edu2_heading2">
						<h3>Academic Partner Institution</h3>
					</div>
				</div>
				<!-- HEADING 2 END-->

				<div class="slider">
					<div class="itemm"><a><img alt="logo" src="images/career/client/c1.jpg"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c2.jpg"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c3.jpg"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c4.png"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c5.jpg"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c6.png"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c7.jpg"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c8.jpg"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c9.png"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c10.png"></a></div>
					<div class="itemm"><a><img alt="logo" src="images/career/client/c11.png"></a></div>
	
				</div>
			</div>
		</div>
	</div>
</section>
<!--TRAINING WRAP END-->
<!--OUR TESTEMONIAL WRAP START-->
<section>
	<div class="container">
		<div class="row">
			<!-- HEADING 2 START-->
			<div class="col-md-12">
				<div class="kf_edu2_heading2">
					<h3>Hear from Our Students</h3>
				</div>
			</div>
			<!-- HEADING 2 END-->
			<!-- TESTEMONIAL SLIDER WRAP START-->
			<div class="edu2_testemonial_slider_wrap">
				<div id="owl-demo-9">
					<div class="item">
						<!-- TESTEMONIAL SLIDER WRAP START-->
						<div class="edu_testemonial_wrap">
							<figure><img src="images/test.png" alt="" /></figure>
							<div class="kode-text">
								<p> The Career Samadhan helped me to get admission in Banglore for Engineering. The Career Samadhan service are very fair and transparent.
								</p>
								<a href="#">Pankaj Kumar<span>- Happy Student</span></a>
							</div>
						</div>
						<!-- TESTEMONIAL SLIDER WRAP END-->
					</div>

					<div class="item">
						<!-- TESTEMONIAL SLIDER WRAP START-->
						<div class="edu_testemonial_wrap">
							<figure><img src="images/test.png" alt="" /></figure>
							<div class="kode-text">
								<p> The Career Samadhan team provide me friendly support to get Admission in Engineering at Manipal College of Engineering</p>
								<a href="#">Ayushi Agrwal<span>- Happy Student</span></a>
							</div>
						</div>
						<!-- TESTEMONIAL SLIDER WRAP END-->
					</div>

					<div class="item">
						<!-- TESTEMONIAL SLIDER WRAP START-->
						<div class="edu_testemonial_wrap">
							<figure><img src="images/test.png" alt="" /></figure>
							<div class="kode-text">
								<p> The Career Samadhan helped me to get admission in Banglore for Engineering. The Career Samadhan service are very fair and transparent.
								</p>
								<a href="#">Pankaj Kumar<span>- Happy Student</span></a>
							</div>
						</div>
						<!-- TESTEMONIAL SLIDER WRAP END-->
					</div>

					<div class="item">
						<!-- TESTEMONIAL SLIDER WRAP START-->
						<div class="edu_testemonial_wrap">
							<figure><img src="images/test.png" alt="" /></figure>
							<div class="kode-text">
								<p> The Career Samadhan team provide me friendly support to get Admission in Engineering at Manipal College of Engineering</p>
								<a href="#">Ayushi Agrwal<span>- Happy Student</span></a>
							</div>
						</div>
						<!-- TESTEMONIAL SLIDER WRAP END-->
					</div>



					<div class="item">
						<!-- TESTEMONIAL SLIDER WRAP START-->
						<div class="edu_testemonial_wrap">
							<figure><img src="images/test.png" alt="" /></figure>
							<div class="kode-text">
								<p> The Career Samadhan helped me to get admission in Banglore for Engineering. The Career Samadhan service are very fair and transparent.
								</p>
								<a href="#">Pankaj Kumar<span>- Happy Student</span></a>
							</div>
						</div>
						<!-- TESTEMONIAL SLIDER WRAP END-->
					</div>

					<div class="item">
						<!-- TESTEMONIAL SLIDER WRAP START-->
						<div class="edu_testemonial_wrap">
							<figure><img src="images/test.png" alt="" /></figure>
							<div class="kode-text">
								<p> The Career Samadhan team provide me friendly support to get Admission in Engineering at Manipal College of Engineering</p>
								<a href="#">Ayushi Agrwal<span>- Happy Student</span></a>
							</div>
						</div>
						<!-- TESTEMONIAL SLIDER WRAP END-->
					</div>


				</div>
			</div>
			<!-- TESTEMONIAL SLIDER WRAP END-->
		</div>
	</div>
</section>
<!--OUR TESTEMONIAL WRAP END-->

<!--EDU2 FOOTER WRAP START-->
<!--NEWS LETTERS START-->
<div class="edu2_ft_topbar_wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="edu2_ft_topbar_des">
					<h5>Request a Call from Our Experts</h5>
				</div>
			</div>
			<div class="col-md-6">
				<div class="edu2_ft_topbar_des">
					<form>
						<input type="email" placeholder="Enter Valid Email Address">
						<button><i class="fa fa-paper-plane"></i>Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--NEWS LETTERS END-->
<div class="custom-model-main">
	<div class="custom-model-inner">
		<div class="close-btn">×</div>
		<div class="custom-model-wrap">
			<div class="pop-up-content-wrap">
				<form action="enquary_db.php" method="post">
					<div class="contact_des">
						<center>
							<h4>Instant counseling</h4>
						</center>
						<div class="inputs_des des_2">
							<input type="text" name="name" placeholder="Name"><i class="fa fa-user"></i>
						</div>

						<div class="inputs_des des_2">
							<input type="text" name="email" placeholder="E-mail">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="inputs_des des_2">
							<input type="text" name="mobile" placeholder="Phone">
							<i class="fa fa-phone"></i>
						</div>


						<div class="inputs_des des_2">

							<center> <a href="" class="btn btn-primary">
									<input type="submit" name="submit" value="Submit" style="color:black"></a>
							</center>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="bg-overlay"></div>
</div>
<?php include 'foot.php'  ?>


<script>
	$(".Click-here").on('click', function() {
		$(".custom-model-main").addClass('model-open');
	});
	$(".close-btn, .bg-overlay").click(function() {
		$(".custom-model-main").removeClass('model-open');
	});
</script>