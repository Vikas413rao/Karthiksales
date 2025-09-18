<?php
session_start();
if(!isset($_SESSION['newuser']))
{
	echo "<script> location.href='../beforelogin/login.php'; </script>";
}
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Karthik Sales</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


<link rel="icon" type="img/png" href="img/1.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
				</div>
           <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    </a>
                    <a class="text-dark px-2">
                        <i class="fa fa-phone"></i>
						<span>
						call: +91 9148851499
						</span>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fa fa-envelope"></i>
						<span>
						Email: karthik.rao298@gmail.com
						</span>
						 <a class="text-dark px-2" href="https://maps.app.goo.gl/YYBE7XATLrzi8xGU9">
                        <i class="fa fa-map-marker"></i>
						<span>
						Location
						</span>
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                   <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img/logo1.png" style="height:80px;width:280px;"></h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
               
            </div>
            <?php include 'cartno.php'; ?>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"  href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                </a>
				<?php
								include 'config.php';
								$sql1 = "select * from addbrand";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$bname=$row1['bname'];
								?>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="">
					
                            <a href="moksh.php ?uid=<?php echo $id; ?>" class="nav-item nav-link"><?php echo $bname; ?></a>
                        
                    </div>
                </nav>
				
								<?php
								}
								}
								?>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img/logo1.png"></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link ">Home</a>
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
							 <a href="myorder.php" class="nav-item nav-link">My Order</a>
							 <a href="viewinvoice.php" class="nav-item nav-link">View Invoice</a>
							 <a href="contact.php" class="nav-item nav-link">Feedback</a>
                        </div>
                       
                    </div>
                </nav>
               
            
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Feedback</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="contact.php">Contact</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
</div>
        </div>
    </div>


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Your Feedback</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" method="post" action="#" >
                        <div class="control-group">
                            <input type="text" class="form-control" pattern="[A-Za-z\s]+" "[A-Za-z0-9\s]+" title="only letters" required name="yname" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" name="email" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="message" rows="6" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="sendMessageButton">Send
                                Feedback</button>
                        </div>
                    </form>
					<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	
		$yname=$_POST['yname'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$query = "INSERT INTO feedback(yname,email,subject,message)VALUES('".$yname."','".$email."','".$subject."','".$message."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Feedback Added Successfully');
			</script>";
			echo "<script> location.href='contact.php'; </script>";

}
?>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
					 <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/kr.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/kr2.jpg"alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
                  <p class="mb-2"><a href="https://maps.app.goo.gl/YYBE7XATLrzi8xGU9"><i class="fa fa-map-marker-alt text-primary mr-3"></a></i>NH 66 Beeri Kotekar Manglore</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>karthik.rao298@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 9148851499</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
           <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                   <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img/logo1.png" style="height:80px;width:280px;"></h1>
                </a>
                <p class="mb-2"><a href="https://maps.app.goo.gl/YYBE7XATLrzi8xGU9"><i class="fa fa-map-marker-alt text-primary mr-3"></a></i>NH 66 Beeri Kotekar Manglore</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>karthik.rao298@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 9148851499</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>

                            <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>

                            <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        </div>
						</div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy;  <a class="text-dark font-weight-semi-bold" href="Index.php">Karthik Sales</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://www.instagram.com/im_chiraj/">Chiraj Kumar</a>and<a class="text-dark font-weight-semi-bold" href="https://www.instagram.com/v.ikas._rao/"> Vikas Rao</a><br>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>