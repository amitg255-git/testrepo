<?php include 'head.php'


?>


<?php                                
                                        $cid=$_GET['cid'];
                                        $i = '1';
                                        $query = "SELECT * FROM add_sub_category  WHERE sub_cat_id =$cid";
                                        $result = mysqli_query($conn,$query);
                                        $row = mysqli_fetch_assoc($result);
                                        

                                  
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
        font-size: 12px!important ;
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
        <div class="kf_inr_banner bgimg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                        	<div class="inr_banner_heading">
								<h3><?php echo $row['sub_cat_name']; ?></h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">our-blog</a></li>
								</ul>
							</div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->
        <div class="nav_2 adj" id="navigation" style="width:80%;margin-left:130px">
                                <ul style="border: 1px solid black;
    border-radius: 60px;">
                                    <li><a href="#key">Key points</a></li>
                                    <li><a href="#aca">Academic</a></li>
                                    <li><a href="#adm">Admission</a></li>
                       
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#fas">Fascilities</a></li>
                                    <!-- <li><a href="detail.php#vid">Video</a></li> -->
                                    <li><a href="#pla">Placement</a></li>
                                    <li><a href="#loc">Location</a></li>
                                

                                 
                                   
                                    
                                </ul>
                                <!--DL Menu Start-->
                                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="about.php">about us</a></li>

                                        <li class="menu-item kode-parent-menu"><a href="#">College</a>
                                            <ul class="dl-submenu">
                                                <li><a href="cdetail.php">B.Tech Colleges</a></li>

                                                <li><a href="cdetail.php">B.A Colleges</a></li>
                                                <li><a href="cdetail.php">M.Tech Colleges</a></li>

                                                <li><a href="cdetail.php">M.A Colleges</a></li>
                                                <li><a href="cdetail.php">BBA Colleges</a></li>
                                                <li><a href="cdetail.php">B.Sc Colleges</a></li>
                                                <li><a href="cdetail.php">LLB Colleges</a></li>
                                                <li><a href="cdetail.php">MBA Colleges</a></li>
                                                <li><a href="cdetail.php">M.Sc Colleges</a></li>
                                                <li><a href="cdetail.php">LLM Colleges</a></li>
                                                <li><a href="cdetail.php">BCA Colleges</a></li>


                                                <li><a href="cdetail.php">MCA Colleges</a></li>

                                                <li><a href="cdetail.php">Polytechnic Colleges</a></li>
                                                <li><a href="cdetail.php">B.Com Colleges</a></li>
                                                <li><a href="cdetail.php">Agriculture Colleges</a></li>

                                                <li><a href="cdetail.php">M.Com Colleges</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="career.php">Career</a></li>

                                    </ul>
                                </div>
                                <!--DL Menu END-->
                            </div>
    	<!--Content Wrap Start-->
    	<div class="inner-content-holder">
			<div class="container">
				<div class="row">
					<!--EDUCATION BLOG PAGE START-->
					<div class="col-md-8">
						<div class="edu2_blog_page">
    							<!--EDUCATION BLOG PAGE WRAP START-->
    						<div class="edu2_blogpg_wrap" id="key">
    						

								<div class="edu2_blogpg_des">
									
									
									<h5>Key points</h5>
                                    <div class="kf_content_wrap" style="background: #f2f6fd;padding:10px;border-radius:20px">
                                    <div class="col-md-4">
                                  <p><b>Type of College</b><br><?php echo $row['type_college']; ?></p>
                                  <p><b>Affiliation</b><br> <?php echo $row['affiliation']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Established</b><br><?php echo $row['established']; ?></p>
                                    <p><b>Approved By</b><br><?php echo $row['aproved_by']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Location</b><br><?php echo $row['location']; ?></p>
                                    <p><b>Ratings</b><br><?php echo $row['ratings']; ?> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                    </div>
    	                            </div>
								
								</div>
							</div>
							<!--EDUCATION BLOG PAGE WRAP END-->

							<!--EDUCATION BLOG PAGE WRAP START-->
							<div class="edu2_blogpg_wrap" id="aca">
								
								<div class="edu2_blogpg_des">
								
								
									<h5>Broad view of <?php echo $row['sub_cat_name']; ?></h5>
									<p><?php echo $row['c_overview']; ?> </p>

									
								</div>
							</div>
							<!--EDUCATION BLOG PAGE WRAP END-->
                            <div class="edu2_blogpg_wrap" id="fee">
								
								<div class="edu2_blogpg_des">
								
								
									<h5>Courses & Fee</h5>
									<h5>Courses offered by <?php echo $coll=$row['sub_cat_name']; ?> </h5>

                                    <?php
                                        $i = '1';
                                        $queryc = "SELECT * FROM college_course WHERE 	college_name='$coll' order by id asc";
                                        $resultc = mysqli_query($conn, $queryc);
                                        while ($rowc = mysqli_fetch_assoc($resultc)) {
                                        ?>
                                    <div class="col-md-6" style="background:#f2f6fd;padding:10px">
                                  
                                  <p style="margin:15px"><b><?php echo $rowc['course_name']; ?></b><br>INR <?php echo $rowc['fee']; ?></p>
                                  <a href="contact.php" class="readmore btn btn-primary mx-3" style='background:#ea1a25;color:white'>Enquiry </a>
                                  <a href="apply.php" class="readmore btn btn-secondary">Apply Now</a>
                                    </div>

                                    <?php }
       ?>

                                   
								</div>
							</div>

                          

                            <section class="edu2_tarining_bg" id="adm">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="kf_edu2_training_des">
								<figure>
									<img src="images/edunova/training.png" alt=""/>
								</figure>
							</div>
						</div>

						<div class="col-md-12">
							<div class="edu2_training_wrap">
								<h4 style="color:white">Inquiries about Admission?</h4>
								<h3>Enjoy free expert assistance for admission</h3>
								<!--COUNTDOWN START-->
							
								<!--COUNTDOWN END-->
								<!-- <strong>Connect with our Advisor.</strong> -->
								<a href="tel:9709978999" class="btn-1">call now</a>
                                <a href="contact.php" class="btn-1"> callback request</a>
							</div>

						</div>
					</div>
				</div>
			</section>

            			<!--EDUCATION BLOG PAGE WRAP START-->
							<div class="edu2_blogpg_wrap" id="fas">
							
								<div class="edu2_blogpg_des">
							
									<h5>Facilites</h5>
                                    <h5>Facilites of <?php echo $row['sub_cat_name']; ?></h5>
									<div class="col-md-4 fasc" >
                                    <i class="fa fa-building"></i> Boys' living quarters
                                    </div>
                                    <div class="col-md-4 fasc" >
                                    <i class="fa fa-building"></i> Girls' living quarters
                                    </div>
                                    <div class="col-md-4 fasc" >
                                    <i class="fa-solid fa-flask-vial"></i> Science lab
                                    </div>
                                    <div class="col-md-4 fasc" >
                                    <i class="fa fa-key"></i> Protection 
                                    </div>
                                    <div class="col-md-4 fasc" >
                                    <i class="fa fa-bus"></i> Vehicle services
                                    </div>
                                    <div class="col-md-4 fasc" >
                                    <i class="fa fa-globe"></i> Internet
                                    </div>
									
								</div>
							</div>
							<!--EDUCATION BLOG PAGE WRAP END-->


                            <div class="edu2_blogpg_wrap" id="vid">
							
                            <div class="edu2_blogpg_des">
                               
                            </div>
                        </div>

                        <div class="edu2_blogpg_wrap" id="pla">
							
                            <div class="edu2_blogpg_des">
                        
                                <h5>Placement</h5>
                                <h5>Placement Details of  <?php echo $row['sub_cat_name']; ?></h5>
                      
                                <div class="kd-video-post">
                                    <img src="admin/<?php echo $row['image5'];?>" style="width: 100%; height:250px;object-fit:cover" alt="">
                                </div>
                                
                            </div>
                        </div>

                        <div class="edu2_blogpg_wrap" id="faq">
							
                            <div class="edu2_blogpg_des">
                            
                            
                                <h5>FAQ</h5>
                                <h5>FAQ of <?php echo $row['sub_cat_name']; ?> </h5>
                                <section class="faq-section">
<div class="container">
  <div class="row">
                    <!-- ***** FAQ Start ***** -->
                  
                    <div class="col-md-12 offset-md-3">
                        <div class="faq" id="accordion">
                            
                            
                            <?php
                                        $i = '1';
                                        $query1 = "SELECT * FROM faq  order by id asc";
                                        $result1 = mysqli_query($conn, $query1);
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                        ?>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-<?php echo $row1['id']; ?>" data-aria-expanded="false" data-aria-controls="faqCollapse-<?php echo $row1['id']; ?>">
                                            <span class="badge"><?php echo $i++?></span> <?php echo $row1['faq']; ?> 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-<?php echo $row1['id']; ?>" class="collapse" aria-labelledby="faqHeading-<?php echo $row1['id']; ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <p><?php echo $row1['faqans']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                           
                           
                        </div>
                    </div>
                  </div>
                </div>
                </section>
                       
                            </div>
                        </div>

							<!--EDUCATION BLOG PAGE WRAP START-->
							<div class="edu2_blogpg_wrap" id="loc">
							
								<div class="edu2_blogpg_des">
								
								
									<h5>Location</h5>
                                    <h5>Location of  <?php echo $row['sub_cat_name']; ?></h5>
									<?php echo $row['map']; ?>">
								</div>
							</div>
							<!--EDUCATION BLOG PAGE WRAP END-->
						</div>


					

					</div>
					<!--EDUCATION BLOG PAGE END-->

					<!--KF_EDU_SIDEBAR_WRAP START-->
                    <div class="col-md-4">
    						<div class="kf-sidebar">

    			

    				


    							<!--KF EDU SIDEBAR COURSES CATEGORieS WRAP START-->
	    						<div class="widget widget-categories">
	    							<h2>categories</h2>
									<ul>
										<li><a href=""><i class="fa fa-caret-right"></i>B.Tech  &amp; Colleges</a></li>
										<li><a href=""><i class="fa fa-caret-right"></i>
										B.A  &amp; Colleges</a></li>
										<li><a href=""><i class="fa fa-caret-right"></i>
										M.Tech  &amp; Colleges</a></li>
										<li><a href=""><i class="fa fa-caret-right"></i>M.A  Colleges</a></li>
										<li><a href=""><i class="fa fa-caret-right"></i>M.Sc &amp; Colleges</a></li>
										<li><a href=""><i class="fa fa-caret-right"></i>MBA Colleges</a></li>
									</ul>
	    						</div>
	    				

	    						<!--KF SIDE BAR TAG CLOUD WRAP START-->
	    						<div class="widget widget-tag-cloud">
	    							<h2>Tags Cloud</h2>
	    							<ul>
	    								<li><a href="#">B.Tech</a></li>
	    								<li><a href="#">M.Sc</a></li>
	    								<li><a href="#">MBA</a></li>
	    								<li><a href="#">Research</a></li>
	    								<li><a href="#">B.A</a></li>
	    								<li><a href="#">PG</a></li>
	    					
	    							</ul>

	    						</div>
	    						<!--KF SIDE BAR TAG CLOUD WRAP END-->

    						</div>
    					</div>
    						<!--KF EDU SIDEBAR WRAP END-->

				</div>
			</div>
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
        <!--NEWS LETTERS END-->

<?php  include 'foot.php'   ?>