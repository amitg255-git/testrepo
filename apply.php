<?php include 'head.php'  ?>

<?php
//include('conn.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];

$phone=$_POST['phone'];
$state=$_POST['state'];
$college=$_POST['college'];
$course=$_POST['course'];


$sql = "INSERT INTO apply (name,email,phone,state,college,course) VALUES ('$name','$email','$phone','$state','$college','$course')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert(' Successfully Applyed');
            window.location.href='apply.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

}
?>
        <!--Banner Wrap Start-->
        <div class="kf_inr_banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                        	<div class="inr_banner_heading">
								<h3>Apply Now</h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Apply Now</a></li>
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
    				<!--CONTACT HEADING Start-->
    				
    				<!--CONTACT HEADING END-->
                    <div class="contct_wrap">
                        <div class="row">
                            <div class="col-md-8">
                                <form method="post" action="#">
                                    <div class="contact_des" style="display:grid;grid-template-columns:auto auto">
                                        <h4>Apply Form</h4>
                                        <div class="inputs_des des_2">
                                            <input type="text" name="name" placeholder="Name"><i class="fa fa-user"></i>
                                        </div>
    
                                        <div class="inputs_des des_2">
                                            <input type="text" name="email" placeholder="E-mail">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="inputs_des des_2">
                                            <input type="text" name="phone" placeholder="Phone">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="inputs_des des_2">
                                            <input type="text" name="college" placeholder="Where You Want to study">
                                            <i class="fa fa-building"></i>
                                        </div>
                                        <div class="inputs_des des_2">
                                            <input type="text" name="college" placeholder="College">
                                            <i class="fa fa-university"></i>
                                        </div>
                                        <div class="inputs_des des_2">
                                            <input type="text" name="state" placeholder="State">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="inputs_des des_2">
                                            <input type="text" name="course" placeholder="Course">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="inputs_des des_2">
                                           <input class="contact_btn" name="submit" value="submit" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                               <img src="images/edunova/application.jfif" style="width: 100%;" alt="">
                             
                               
                            </div>
                            
                        </div>
	    			</div>
    			</div>
    		</section>
    	</div>

        <?php include 'foot.php'  ?>