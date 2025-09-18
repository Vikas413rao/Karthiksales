
<?php
						include 'config.php';
						$sql1 = "SELECT cart.cid, cart.id, cart.qty, cart.userid, addproduct.id, addproduct.image,  addproduct.pname, addproduct.price, addproduct.Description FROM cart INNER JOIN addproduct ON cart.id=addproduct.id where cart.userid='".$_SESSION['newuser']."'";
						$result1 = mysqli_query($con,$sql1);
						$num1=mysqlI_num_rows($result1);
						$sl=0;
						$total=0;
					?>

 <div class="col-lg-3 col-6 text-right">
                <a href="cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge"><?php echo $num1; ?> </span>
                </a>
				<a href="logout.php" class="btn border">
                    <span class="badge">Logout</span>
                </a>
            </div>