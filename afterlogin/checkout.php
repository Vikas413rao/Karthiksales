<?php
session_start();
if(!isset($_SESSION['newuser']))
{
	echo "<script> location.href='../login.php'; </script>";
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
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="checkout.php">Checkout</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
</div>
        </div>
    </div>


<?php
			include 'config.php';
			$sql = "SELECT orderno from ordertb";
			$result = mysqli_query($con,$sql);
			$num=mysqlI_num_rows($result);
			
			if($num > 0)
			{ 
			while($row = mysqli_fetch_array($result))
			{ 
			$orderno=$row[0];
			}
			}
			else
			{
				$orderno="O000";
			}
			$orderno++;
			?>
    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
			<?php
								include 'config.php';
								$sql1 = "select * from address where userid='".$_SESSION['newuser']."'";
								$result1 = mysqli_query($con,$sql1);
								$count=mysqlI_num_rows($result1);
								$sl=0;
								if($count > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$name=$row1[1];
								$email=$row1[2];
								$phone=$row1[3];
								$district=$row1[4];
								$pincode=$row1[5];
								$address=$row1[6];
								}
								}
								?>
			
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
					<form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>UserName</label>
                            <input class="form-control" pattern="[A-Za-z\s]+" "[A-Za-z0-9\s]+" required  title="only letters" type="text" name="name" value="<?php if($count>0) { echo $name;} ?>"  >
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required type="text" name="email" value="<?php if($count>0) { echo $email;} ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control"  pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" required  type="text" name="phone" value="<?php if($count>0) { echo $phone;} ?>" >
                        </div>
						<div class="col-md-6 form-group">
                            <label>District</label>
                            <input class="form-control" type="text" name="district" value="Dakshina Kannada" readonly>
                        </div>
						
                        <div class="col-md-6 form-group">
                            <label>PIN Code</label>
                            <input class="form-control"  pattern="[0-9]+" title="numbers only" required type="text" name="pincode" value="<?php if($count>0) { echo $pincode;} ?>">
                        </div>
						<div class="col-md-12 form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address" placeholder="Address" ><?php if($count>0) { echo $address;} ?></textarea>
                        </div>
						<div class="card-footer border-secondary bg-transparent">
                        <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Save Address</button>
                    </div>
                    </div>
					</form>
					<?php
						if(isset($_POST['submit']))
						{
							include 'config.php';
							$name=$_POST['name'];
							$email=$_POST['email'];
							$phone=$_POST['phone'];
							$address=$_POST['address'];
							$pincode=$_POST['pincode'];
							if ($count > 0)
							{
								$sql2 = "update address set name='".$name."',email='".$email."',phone='".$phone."',address='".$address."',pincode='".$pincode."' where userid='".$_SESSION['newuser']."'";
								$result2 = mysqli_query($con,$sql2);	
								echo "<script>
										alert('Address Updated');
									</script>";
									echo "<script> location.href='checkout.php'; </script>";
							}
							else
							{
								$sql3 = "insert into address (name,email,phone,address,pincode,userid)values('".$name."','".$email."','".$phone."','".$address."','".$pincode."','".$_SESSION['newuser']."')";
								$result3 = mysqli_query($con,$sql3);	
								echo "<script>
										alert('Address Added');
									</script>";
									echo "<script> location.href='checkout.php'; </script>";
							}
						}
						
					?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
				
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
						<?php
						include 'config.php';
						$sql1 = "SELECT cart.cid, cart.id, cart.qty, cart.userid, addproduct.id, addproduct.image,  addproduct.pname, addproduct.price, addproduct.Description FROM cart INNER JOIN addproduct ON cart.id=addproduct.id where cart.userid='".$_SESSION['newuser']."'";
						$result1 = mysqli_query($con,$sql1);
						$num1=mysqlI_num_rows($result1);
						$sl=0;
						$total=0;
						$tot=0;
						if($num1 > 0)
							{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
									$cid=$row1[0];
									$id=$row1[1];
									$qty=$row1['qty'];
									$userid=$row1['userid'];
									$id=$row1['id'];
									$image=$row1['image'];
									$pname=$row1['pname'];
									$price=$row1['price'];
									$Description=$row1['Description'];
									$tot=$qty*$price;	
									$total=$total+$tot;								
								?>
						
                        <div class="d-flex justify-content-between">
                            <p> <?php echo $pname; ?>-₹.<?php echo $price; ?></p>
							<p><?php echo $qty; ?></p>
                            <p>₹.<?php echo $tot; ?></p>
                        </div>
                        	<?php
								}
							}
							?>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?php echo $total;?></h5>
                        </div>
                    </div>
				
                </div>
				<form action="#" method="post">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="cash_on_delivery" name="payment" id="paypal" required>
                                <label class="custom-control-label" for="paypal">Cash On Delivery</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" name="place" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
					
                </div>
				</form>
				<?php
								if(isset($_POST['place']))
								{
								error_reporting(1);
								include 'config.php';
								
								$sql1 = "SELECT cid, id, qty  FROM cart where userid='".$_SESSION['newuser']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								$total=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
									$cid=$row1[0];
									$pid=$row1[1];
									$qty=$row1[2];
									$payment=$_POST['payment'];
									$query = "insert into ordertb(orderno,id,qty,userid,paymentmethod) values('".$orderno."','".$pid."','".$qty."','".$_SESSION['newuser']."','".$payment."')";
										   
								mysqli_query($con,$query) or die(mysqli_error($con));
										
										
								}
								$query1 = "Delete from cart where userid='".$_SESSION['newuser']."'";
										   
											mysqli_query($con,$query1) or die(mysqli_error($con));
								echo "<script>
												alert('Product placce ordered');
											</script>";
											echo "<script> location.href='index.php'; </script>";
								}
								}
								
								
								
								
								
									?>
				
            </div>
        </div>
    </div>
    <!-- Checkout End -->


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
                    &copy; <a class="text-dark font-weight-semi-bold" href="Index.php">Karthik Sales</a>. All Rights Reserved. Designed
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