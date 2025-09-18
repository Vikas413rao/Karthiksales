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
	<link rel="icon" type="img/png" href="img/1.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>
	        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
	
	</style>
	
</head>

<body>
<div id="printableArea">
  <?php
  if(isset($_GET['iid']))
  {
	  $inid=$_GET['iid'];
  }
  
		include 'config.php';
		$sql1 = "SELECT ordertb.*, addproduct.*, address.* FROM ordertb INNER JOIN addproduct ON ordertb.id=addproduct.id INNER JOIN address on ordertb.userid=address.userid where ordertb.orderno='".$inid."'";
		$result1 = mysqli_query($con,$sql1);
		$num1=mysqlI_num_rows($result1);
		$sl=0;
		$total=0;
		
		if($num1 > 0)
		{ 
		while($row1 = mysqli_fetch_array($result1))
		{ 
		$sl+=1;
		$orderid=$row1['orderid'];
		$orderno=$row1['orderno'];
		$id=$row1['id'];
		$qty=$row1['qty'];	
		$id=$row1['id'];
		$image=$row1['image'];
		$pname=$row1['pname'];
		$price=$row1['price'];
		$name=$row1['name'];	
		$email=$row1['email'];
		$phone=$row1['phone'];
		$address=$row1['address'];
		$pincode=$row1['pincode'];
		$total=$qty*$price;
		
		}}
		?>  
  

 
</br>
        <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                   <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img/logo1.png" style="height:80px;width:280px;"></h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">NH 66 Beeri Kotekar Manglore</p>
                        <p class="text-white">+91 9148851499</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.:<?php echo $orderno; ?></h2>
                   
                    <p class="sub-heading">Email Address: <?php echo $email; ?> </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: <?php echo $name; ?> </p>
                    <p class="sub-heading">Address:<?php echo $address; ?>  </p>
                    <p class="sub-heading">Phone Number:<?php echo $phone; ?>  </p>
                    <p class="sub-heading">Pincode:<?php echo $pincode;?>  </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <tbody>
				<?php
		include 'config.php';
		$sql1 = "SELECT ordertb.*, addproduct.*, address.* FROM ordertb INNER JOIN addproduct ON ordertb.id=addproduct.id INNER JOIN address on ordertb.userid=address.userid where ordertb.orderno='".$inid."'";
		$result1 = mysqli_query($con,$sql1);
		$num1=mysqlI_num_rows($result1);
		$sl=0;
		$total=0;
		$tot=0;
		$subtot=0;
		
		if($num1 > 0)
		{ 
		while($row1 = mysqli_fetch_array($result1))
		{ 
		$sl+=1;
		$orderid=$row1['orderid'];
		$orderno=$row1['orderno'];
		$id=$row1['id'];
		$qty=$row1['qty'];
		$id=$row1['id'];
		$image=$row1['image'];
		$pname=$row1['pname'];
		$price=$row1['price'];
		$name=$row1['name'];	
		$email=$row1['email'];
		$phone=$row1['phone'];
		$address=$row1['address'];
		$pincode=$row1['pincode'];
		$tot=$qty*$price;	
		$total=$total+$tot;	
		
		?>
                    <tr>
                        <td><?php echo $pname; ?></td>
                        <td>₹.<?php echo $price; ?></td>
                        <td><?php echo $qty;?></td>
                        <td><?php echo $tot; ?></td>
                    </tr>
                    <?php 
		}
		}
		?>
		
                    <tr>
					
					
					 <td colspan="3" class="text-right">Grand Total</td>
                        <td> <?php echo $total; ?></td>
					</tr>
                </tbody>
            </table>
            <br>
            
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

             
    </div>  
    </div> 
<center>	
	 <a href="" onclick="printDiv('printableArea')">Print</a></center>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

    <!-- Footer Start -->
   
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