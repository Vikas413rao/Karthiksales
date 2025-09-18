<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Karthik Sales</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
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
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/new_logo.jpg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/new_logo.jpg" alt="" style="height:50px;">
						</span>
						<span class="user-name">Sai Flowers Owner</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="home.php">
				<img src="vendors/images/new_logo.jpg" alt="" class="dark-logo">
				<img src="vendors/images/new_logo.jpg" alt="" style="height:50px;width:30%;">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="home.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li>
						<a href="sploffer.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Spcial offers</span>
						</a>
					</li>
					<li>
						<a href="addfooterimg.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Add Footer Images</span>
						</a>
					</li>
					<li>
						<a href="addgallery.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Add Gallery Images</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Sai-flowers-Service</span>
						</a>
						<ul class="submenu">
							<li><a href="mainservice.php">Main Services</a></li>
							<li><a href="addourservice.php">Our Services</a></li>
							<li><a href="vareitydesign.php">Vareity Designs</a></li>
						</ul>
					</li>
					<li>
						<a href="aboutflowers.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">About Flowers</span>
						</a>
					</li>
					<li>
						<a href="ourproduct.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Our Products</span>
						</a>
					</li>
					<li>
						<a href="ordereditems.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">View Ordered Items</span>
						</a>
					</li>
					<li>
						<a href="orderproductitem.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Ordered Cart Product</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">External Billing</span>
						</a>
						<ul class="submenu">
							<li><a href="externalbill.php">Services Bill</a></li>
							<li><a href="externalbill1.php">Products Bill</a></li>
							<li><a href="externalbillview.php">View Bill</a></li>
						</ul>
					</li>
					<li>
						<a href="Logout.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Logout</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	
	<div class="mobile-menu-overlay"></div>
	<div class="main-container" >
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Invoice</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="home.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Billing details</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
						</div>
					</div>
				</div>
					<!-- Form grid Start -->
				<div class="invoice-wrap" id="printableArea">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
<?php
include("config.php");
$sql = "SELECT name,phone,date,bno from external_bill where bno='".$_SESSION['bno']."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	if($count>0)
	{
		while($row = mysqli_fetch_array($result))
		{ 
			$name=$row[0];
			$phone=$row[1];
			$date=$row[2];
			$id=$row[3];
	  }
		
	}
	?>		
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15"><?php echo $name; ?></h5>
								<p class="font-14 mb-5">Date Issued: <strong class="weight-600"><?php echo $date; ?></strong></p>
								<p class="font-14 mb-5">Invoice No: <strong class="weight-600"><?php echo $id; ?></strong></p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5">Karthik Sales </strong></p>
									<p class="font-14 mb-5">NH 66 Beeri Kotekar Manglore</p>
									<p class="font-14 mb-5">Manglore</p>
									<p class="font-14 mb-5">575022</p>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-rate">Sl.No</div>
								<div class="invoice-rate">Products</div>
								
								<div class="invoice-rate">Qty</div>
								<div class="invoice-rate">Rate</div>
								<div class="invoice-subtotal">Subtotal</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
								<?php
								error_reporting(1);
								include("config.php");

								$sql = "SELECT * from external_bill where bno='".$_SESSION['bno']."'";
								$result = mysqli_query($con,$sql);
								$count=mysqlI_num_rows($result);

								$tot=array();
								if($count>0)
								{
									$no=1;
									while($row = mysqli_fetch_array($result))
									{ 
										$rowid=$row[0];
										$products=$row[5];
										$qty=$row[6];
										$price=$row[7];
										$total=$row[8];
										
								?>			
									<li class="clearfix">
										<div class="invoice-rate"><?php echo $no; ?></div>
										<div class="invoice-rate"><?php echo $product; ?></div>
										<div class="invoice-rate"><?php echo $qty; ?></div>
										<div class="invoice-rate"><?php echo $price; ?></div>
										<div class="invoice-subtotal"><span class="weight-600"><?php echo number_format($total,2) ?></span></div>
									</li>
								<?php
								$no=$no+1;
								$tot[]=$total;
								}?>
	  
	  <?php
			
	  $totalamt=array_sum($tot);
		
	}
	else
	{
		$totalamt=0;
		echo "<script>alert('Bill Not Updated');</script>";
		echo "<script> location.href='bill.php'; </script>";
	}
	?>
								
									<li class="clearfix">
										<h5 class="invoice-sub">Total Amount</h5>
										<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger" ><?php echo number_format($totalamt,2); ?></span></div>
									</li>
								</ul>
							</div>
						
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
				<!-- Form grid End -->

<center><button onclick="printDiv('printableArea')" type="submit" class="btn btn-warning">Print</button></center>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<br>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>