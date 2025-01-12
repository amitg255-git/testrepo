<?php include 'head.php'?>
<?php
                                      
										  $id=$_GET['id'];
                                        $query = "SELECT * FROM add_state WHERE cat_id=$id ";
                                        $result = mysqli_query($conn, $query);
                                        $row3 = mysqli_fetch_assoc($result);
                                        ?>


<style>
/* ???????????faq */
.adj ul li a{
    font-size: 10px ;
    padding: 3px 15px;
    color: gold;
    
}
.adj ul li a:hover{

    color: #fff;
    
}
.adj ul{
    background: #1d3965;
    
}
p b {
    border: 1px solid black;
    padding: 5px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background-color: white;

}

.faq-section {
    background: #fdfdfd;


}
.faq-title h2 {
  position: relative;
  margin-bottom: 45px;
  display: inline-block;
  font-weight: 600;
  line-height: 1;
}
.faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #E91E63;
    bottom: -25px;
    margin-left: -30px;
}
.faq-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border: none;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: rgba(233, 30, 99, 0.1);
    padding-left: 10px;
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
  padding-left: 30px;
  padding-right: 30px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 14px;
  float: left;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #E91E63;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
}

.faq .card .card-body {
  padding: 30px;
  padding-left: 35px;
  padding-bottom: 16px;
  font-weight: 400;
  font-size: 16px;
  color: #6F8BA4;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 14px;
}

@media (max-width: 991px) {
  .faq {
    margin-bottom: 30px;
  }
  .faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 10px;
  }
}
    /* ?????????faq? */
    p{
        font-size: 14px!important ;
    }
    h5{
        font-size: 17px !important;
    }

    .kf_edu2_training_des figure {
    overflow: visible !important;
    position: absolute !important;
    left: -41px !important;
    /* top: -55px; */
}

.edu2_training_wrap {
    float: left !important;
    text-align: center !important;
    width: 88% !important;
    margin-top: 46px !important;
}
.fasc{
    margin: 2px;
    padding: 10px;
    background-color: #d2dbeb;
}

.bgimg{
    background-image: url(admin/<?php echo $row['sub_cat_image']; ?>);
}
</style>
     <!--Banner Wrap Start-->
     <div class="kf_inr_banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                        	<div class="inr_banner_heading">
								<h3><?php echo $row3['cat_name']; ?></h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#"><?php echo $row3['cat_name']; ?></a></li>
								</ul>
							</div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->

    	<!--Content Wrap Start-->
    	<div class="kf_content_wrap">
    		<section>
    			<div class="container">
    				<div class="row">
    					<div class="col-md-8">

    						<!--KF_BLOG DETAIL_WRAP START-->
    						<div class="kf_blog_detail_wrap">
	<!--KF_BLOG DETAIL_DES START-->
    <div class="kf_blog_detail_des">
	    							<div class="blog-detl_heading">
	    								<h5><?php echo $row3['cat_name']; ?></h5>
	    							</div>

    								

	    							<p><?php echo $row3['basic_info']; ?> </p>



		<!-- BLOG PG FORM START-->
        <div class="blog_pg_form">
	    							<div class="blog-detl_heading">
	    								<h5>Speak with our advisor.</h5>
	    							</div>
	    							<form action="enquary_db.php" method="POST">
	    								<div class="row">
	    									<div class="col-md-6">
	    										<input type="text" name="name" placeholder="Name">
	    									</div>
	    									<div class="col-md-6">
	    										<input type="text" name="email"  placeholder="E-mail">
	    									</div>
                                            <div class="col-md-6">
	    										<input type="text" name="mobile" placeholder="Mobile">
	    									</div>
	    									<div class="col-md-6">
	    										<input type="text" name="state" placeholder="State">
	    									</div>
                                            <div class="col-md-12">
                                            <select name="subject">
                                            <option value="1">What kind of support are you looking for?</option>
                                            <option value="Scholarship">Scholarship</option>
                                            <option value="Admission">Admission</option>
                                            <option value="Counselling">Counselling</option>
                                         
                                        </select>
	    										
	    									</div>
	    								</div>
	    								<button type="submit" name="submit">Send Comment</button>
	    							</form>
	    						</div>
	    						<!-- BLOG PG FORM END-->
                          
	    						<div class="blog-detl_heading" style="margin-top:20px">
	    								<h5>Best  College in <?php echo $row3['state']; ?></h5>
	    							</div>

									<table class="table table-bordered">
													<thead>
														<tr>
															<th>Sl. No.</th>
															<th>College Name</th>
															<th>ESTD</th>
                                                            <th>Total Intake</th>
														</tr>
													</thead>
													<tbody>
										<?php
                                        $i = '1';
										  $id=$_GET['id'];
                                        $query = "SELECT * FROM state_college WHERE category=$id order by id";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
														<tr>
															<td> <?php echo $i++ ?></td>
															<td>  <?php echo $row['college_name']; ?></td>
															<td>  <?php echo $row['estd']; ?></td>
                                                            <td>  <?php echo $row['intak']; ?></td>
														</tr>
														<?php
                                       }
                                        ?>
													</tbody>
												</table>
	    							<!--KF_BLOG THUMB wRAP START-->
                                    	<!-- STUDY TABLE WRAP START -->
											<div class="study_table_wrap">
												<h6>Course Summary</h6>
												<!--  TABLE  START -->
                                                  <p>Before we dive into the details of  Colleges in <?php echo $row3['state']; ?>, let's take a look at the course overview to understand the admission process.</p>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Course Name</th>
															<th>Duration</th>
															
														</tr>
													</thead>
													<tbody>
													<?php
                                        $i = '1';
										$id=$_GET['id'];
                                        $query = "SELECT * FROM add_course  WHERE category=$id  order by id asc";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
														<tr>
															<td> <?php echo $row['course_name']; ?></td>
															<td> <?php echo $row['duration']; ?></td>
															
														</tr>
														<?php
										}
                                        ?>
													</tbody>
												</table>
												<!--  TABLE  END -->
										
											</div>
                                            <div class="study_table_wrap">
												<h6>Government-affiliated  college  in<?php echo $row3['state']; ?></h6>
												<!--  TABLE  START -->
                                                  <p>Compilation of Public Medical Colleges in <?php echo $row3['state']; ?></p>
												  <table class="table table-bordered">
													<thead>
														<tr>
															<th>Sl. No.</th>
															<th>College Name</th>
															<th>ESTD</th>
                                                            <th>Total Intake</th>
														</tr>
													</thead>
													<tbody>
													<?php
                                        $i = '1';
										  $id=$_GET['id'];
                                         $query = "SELECT * FROM state_college WHERE category=$id AND type=2 order by id";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
														<tr>
															<td> <?php echo $i++ ?></td>
															<td>  <?php echo $row['college_name']; ?></td>
															<td>  <?php echo $row['estd']; ?></td>
                                                            <td>  <?php echo $row['intak']; ?></td>
														</tr>
														<?php
                                       }
                                        ?>
													</tbody>
												</table>
												<!--  TABLE  END -->
										
											</div>
                                            <div class="study_table_wrap">
												<h6><?php echo $row3['state']; ?> NEET Admission Guidance</h6>
												<!--  TABLE  START -->
                                             
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Particular</th>
															<th>Description</th>
														
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><?php echo $row3['state']; ?> NEET Counselling Assistance</td>
															<td>Enquire Now</td>
														
														</tr>
														
													</tbody>
												</table>
												<!--  TABLE  END -->
										
											</div>
											<!-- STUDY TABLE WRAP END -->
	    						
		    						<!--KF_BLOG THUMB wRAP END-->

	    						
	    						</div>
	    						<!--KF_BLOG DETAIL_DES END-->
    							<!-- BLOG DETAIL THUMBNAIL START-->
    					

    				

	    				

	    					

	    				

    						</div>
    						<!--KF_BLOG DETAIL_WRAP END-->
    					</div>

    					<!--KF_EDU_SIDEBAR_WRAP START-->
    					<div class="col-md-4">
    						<div class="kf-sidebar">

    						

    							<!--KF_SIDEBAR_ARCHIVE_WRAP START-->
    							<div class="widget widget-archive ">
    								<h2>International study</h2>
    								<ul class="sidebar_archive_des">
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In India</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Bangladesh</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Nepal</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In China</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Russia</a>
    									</li>
                                        <li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Egypt</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Ukraine</a>
    									</li>
    								</ul>
    							</div>
    							<!--KF_SIDEBAR_ARCHIVE_WRAP END-->


    						

    							<!--KF EDU SIDEBAR COURSES CATEGORieS WRAP START-->
	    						<div class="widget widget-categories">
	    							<h2>Study In India</h2>
									<ul class="sidebar_archive_des">
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Delhi</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Chhhatisgarh</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Chandigarh</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Gujarat</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Karnataka</a>
    									</li>
                                        <li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Kerala</a>
    									</li>
    									<li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Rajasthan</a>
    									</li>
                                        <li>
    										<a href=""><i class="fa fa-angle-right"></i>MBBS In Tamilnadu</a>
    									</li>
    								</ul>
	    						</div>
	    						<!--KF EDU SIDEBAR COURSES CATEGORieS WRAP END-->

	    			

	    				

    						</div>
    					</div>
						<!--KF EDU SIDEBAR WRAP END-->

    				</div>
    			</div>
    		</section>
    	</div>
        <!--Content Wrap End-->
        <!--NEWS LETTERS START-->
		<div class="edu2_ft_topbar_wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="edu2_ft_topbar_des">
							<h5>Subcribe weekly newsletter</h5>
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

<?php  include 'foot.php'   ?>