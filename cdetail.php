<?php include 'head.php'  ?>
<style>
    p b{
        font-size: 15px;
    }
    p{ 
        font-size: 15px;
    }
    figure img{
        border-radius: 100%;
        height: 320px;
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
								<h3>Courses List</h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Courses List</a></li>
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
    			<!--courses_outer_wrap Start-->
    			<div class="kf_courses_outer_wrap">
	    			<div class="container">
	    				<div class="row">
	    					<div class="col-md-9">
							<?Php                                $i = '1';
                                        $cat_id =$_GET['cat_id'];
                                        $query = "SELECT * FROM add_sub_category WHERE cat_id =$cat_id";
                                        $result = mysqli_query($conn,$query);
                                        $rowcount=mysqli_num_rows($result);
										while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
	    						<!--kf_courses_wrap Start-->
    							<div class="kf_courses_wrap">
    								<div class="row">
	    								<div class="col-lg-5 col-md-12 col-sm-5">
		    								<figure>
		    									<img src="admin/<?php echo $row['sub_cat_image']; ?>" alt=""/>
		    									
		    								</figure>
		    							</div>

		    							<div class="col-lg-7 col-md-12 col-sm-7 ">
		    								<!--kf_courses_des Start-->
		    								<div class="kf_courses_des">
		    									<div class="courses_des_hding1">
		    										<h5><?php echo $row['sub_cat_name']; ?></h5>
                                                    <span><?php echo $row['c_address']; ?>|<small>5.00</small></span>
		    									</div>
		    								
                                         

												<p><b>Approved by : </b>  <?php echo $row['aproved_by']; ?></p>
                                                <p><b>No. Of Courses : </b> <?php echo $row['n_courses']; ?> Courses</p> &nbsp;&nbsp;
                                               
                                                <p><b>Streams : </b>  <?php echo $row['streams']; ?></p>
                                                <p><b>TOTAL PACKAGE : </b> INR  <?php echo $row['inr']; ?><span style="color:white">Lorem ipsum dolor sit amet consectetur</span></p>
												<a href="detail.php?cid=<?php echo $row['sub_cat_id']; ?>" style="background:#fff;color:black">View Detail</a><a href="apply.php" style="background:#ea1a25;color:white">Apply Now</a>
		    								</div>
		    								<!--kf_courses_des end-->
		    							</div>
		    						</div>
    							</div>
								<?php
										}
                                        ?>
    							<!--kf_courses_wrap end-->

    								<!--kf_courses_wrap Start-->
                                    
    							<!--kf_courses_wrap end-->

	    					</div>

    						<!--KF_EDU_SIDEBAR_WRAP START-->
	    					<div class="col-md-3">
    						<div class="kf-sidebar">

    			

    							<!--KF_SIDEBAR_ARCHIVE_WRAP START-->
    							
    							<!--KF_SIDEBAR_ARCHIVE_WRAP END-->


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
	    						<!--KF EDU SIDEBAR COURSES CATEGORieS WRAP END-->


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
    			<!--courses_outer_wrap end-->
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
		<!--NEWS LETTERS END-->

<?php include 'foot.php'  ?>