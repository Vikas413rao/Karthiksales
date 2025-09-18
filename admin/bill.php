<?php
session_start();
if(isset($_SESSION['admin']))
{
	error_reporting(1);
	include("config.php");
	if(!isset($_SESSION['name']))
	{
	unset($_SESSION['bno']);
	}
	if(!isset($_SESSION['phone']))
	{
	$sql2 = "SELECT bno from external_bill";
	$result2 = mysqli_query($con,$sql2);
	$count2=mysqlI_num_rows($result2);
	if($count2>0)
	{
		while($row2= mysqli_fetch_array($result2))
		{
			$bno=$row2[0];
		}
	}
	else
	{
		$bno=0;
	}
	$bno=$bno+1;
	$_SESSION['bno']=$bno;
	}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Karthik Sales</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="logo.jpg"  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .card-box{
	background-color: #fff;
    border-radius: 10px;
    -webkit-box-shadow: 0 0 28px rgba(0,0,0,.08);
    box-shadow: 0 0 28px rgba(0,0,0,.08);
  }
  .md-30 {
	  margin-bottom:30px;
  }
  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
  }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.jpg" class="mr-2" alt="logo"style="width:230px; height:50px;"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               <img src="images/pic.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
             
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
         
        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
      
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" style="background-color:#e4e4e4" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
             <i class="fa fa-home" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="aproduct.php" >
             <i class="fa fa-plus" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add product</span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="astocks.php" >
             <i class="fa fa-plus-circle" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add stocks</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link"  href="abrand.php" >
             <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp; Add brand</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="min.php">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
              <span class="menu-title"> &nbsp;&nbsp;&nbsp;&nbsp;Minimum stock display</span>
            
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="acredit.php" >
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Add credit</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="astaff.php" >
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Add staff</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="bill.php" >
            <i class="fa fa-print" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Generate bill & Print</span>
           </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">
            <i class="fa fa-first-order" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;View order</span>
            </a>
          </li>
		  
		   <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;View User</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="feedback.php">
             <i class="fa fa-comments-o" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;View feedback</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="logout.php">
             <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
         <div class="content-wrapper">
          <div class="row">
	<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container">
     <form action="#" method="post">
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>User Name</label>
									<input type="text" pattern="[A-Za-z\s]+" "[A-Za-z0-9\s]+"title="only letters" required name="name" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" name="phone" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Date</label>
									<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Click Save</label>
									<button type="submit" name="save" class="form-control btn btn-success">Save</button>
								</div>
							</div>
						</div>
					</form>
					<?php
			if(isset($_POST['save']))
			{
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$date=$_POST['date'];
				$_SESSION['phone']=$phone;
				$_SESSION['date']=$date;
				$_SESSION['name']=$name;
				include("config.php");
				$query = "update external_bill set name='".$name."',date='".$date."', phone='".$phone."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
			}
			if(isset($_SESSION['phone']) && isset($_SESSION['date']))
			{
			?>
		<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label><b style="color:red;">Name:<?php echo $_SESSION['name']; ?></b></label>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label><b style="color:red;">Phone:<?php echo $_SESSION['phone']; ?></b> </label>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label><b style="color:red;">Date:<?php echo $_SESSION['date'];?></b> </label>
								</div>
							</div>
						</div>
						<?php
			}
			?>
    <div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Select Item Details</h4>
							</div>
						</div>
						<div class="row">
							<div>
								<div class="form-group">
								<form action="display.php" method="post" >
									<button type="submit" class="form-control btn btn-info">Select</button>
								</form>
								</div>
							</div>
						</div>
							<?php
							if(isset($_SESSION['pid']))
							{
							include("config.php");
							$pid=$_SESSION['pid'];
							$sql1 = "SELECT addproduct.id,addproduct.brand,addproduct.pname,addproduct.image,addproduct.price,addproduct.Description,addstock.quantity,addstock.id FROM addstock INNER JOIN addproduct ON addproduct.id=addstock.sname where addproduct.id='".$pid."'";
							$result1 = mysqli_query($con,$sql1);
							$count1=mysqlI_num_rows($result1);

							if($count1>0)
							{
								while($row1= mysqli_fetch_array($result1))
								{ 
									$pname=$row1[2];
									$price=$row1[4];
									$quantity=$row1[6];
									$id=$row1[7];
						?>
						<form action="#" method="post">
						<div class="row">
							<div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Item Name" name="pname" value="<?php echo $pname; ?>" readonly>
								</div>
							</div>
							<div>
							
								<div class="form-group">
									<input type="text" name="qty"  pattern="[0-9]+" title="numbers only" class="form-control" placeholder="Qty" min="1" max="<?php echo $quantity>=0; ?>" value="1">
								</div>
								
							</div>
							<div>
								<div class="form-group">
									<input type="text" name="price" class="form-control" placeholder="Rate" value="<?php echo $price; ?>" readonly>
								</div>
							</div>
							<div>
								<div class="form-group">
									<input type="text" name="bsid" class="form-control" placeholder="Rate" value="<?php echo $id; ?>" readonly hidden>
								</div>
							</div>
							<div>
								<div class="form-group">
								<input type="text" name="id1[]" value="<?php echo $id; ?>" hidden="true">
									<button type="submit" name="add" class="form-control btn btn-warning">Add</button>
								</div>
							</div>
						</div>
					</form>
					<?php
		}
		}
		}
		
		if(isset($_POST['add']))
		{
		if(isset($_SESSION['phone']))
				{	
		foreach ($_POST['id1'] as $key =>$value)
					{
						$id1=$value;
					}
		error_reporting(1);
		include("config.php");
		$bsid=$_POST['bsid'];
		$price=$_POST['price'];
		$pname=$_POST['pname'];
		$qty=$_POST['qty'];
		$total=$price*$qty;
		$sname=$_SESSION['name'];
		$sphone=$_SESSION['phone'];
		$sdate=$_SESSION['date'];
		$query1 = "insert into external_bill(bno,name,phone,date,product,qty,price,total,bsid) values('".$_SESSION['bno']."','".$sname."','".$sphone."','".$sdate."','".$pname."','".$qty."','".$price."','".$total."','".$bsid."')";
		
        mysqli_query($con,$query1) or die(mysqli_error($con));
		$query2= "update addstock set quantity=quantity-'".$qty."' where id='".$id1."'";
				mysqli_query($con,$query2) or die(mysqli_error($con));
		
		echo "<script> location.href='bill.php'; </script>"; 
		unset($_SESSION['pid']);
		}
		else
		{
			echo '<script>alert "please add name, phone and date."</script>';
		}
		}
	?>
      <div class="card-box mb-30">
         
             <table class="table table-bordered">
						<thead>
							<tr>
								<th>Sl.No</th>
								<th>Product</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Total</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
						<?php
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
			$bpname=$row[5];
			$bqty=$row[6];
			$bprice=$row[7];
			$btotal=$row[8];
			$bsid1=$row[10];
			?>
						
							<tr>
						 <td> <?php echo $no; ?></td>
                           <td> <?php echo $bpname; ?></td>						   						   
							 <td> <?php echo $bqty; ?></td>
							  <td> <?php echo $bprice; ?></td>
							  <td> <?php echo number_format($btotal,2); ?></td>
								
								<form action="#" method="post">
							<input type="text" name="id[]" value="<?php echo $rowid;?>" hidden="true">
							<input type="text" name="id2[]" value="<?php echo $bsid1; ?>" hidden="true">
                            <td class="align-middle"><button type="submit" name="delete" class="btn btn-sm btn-warning"><i class="fa fa-times"></i></button>
							</form></td>
							</tr>
							
							
					<?php 
					$no=$no+1;
					$tot[]=$btotal;
					}
					$totalamt=array_sum($tot);
	}
	else
	{
		$totalamt=0;
	}
	?>
		
						<tr>
								<th colspan="4">Total Amount</th>
								<td><?php echo number_format($totalamt,2); ?></td>
								<form action="#" method="post">
								<td><button type="submit"  name="confirm" class="btn btn-info">Confirm</button></td>
								</form>
							</tr>
							<?php
			if($totalamt!=0)
			{
				?>
						</tbody>
					</table>
				</div>
				<?php
				if(isset($_POST['confirm']))
				{
				error_reporting(1);
				include("config.php");
				$status="Confirm";
				$query = "update external_bill set status ='".$status."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
				unset($_SESSION['phone']);
				unset($_SESSION['date']);
				unset($_SESSION['name']);
				echo "<script> location.href='invoice.php'; </script>"; 
			}
			}
			?>
			
			
			
			<?php
			if(isset($_POST['delete']))
			{
				foreach ($_POST['id2'] as $key =>$value)
					{
						$id2=$value;
					}
				foreach($_POST['id'] as $key=>$value)
				{
					$id=$value;
				}
				
				$query1="delete from external_bill where id='".$id."'";
				mysqli_query($con,$query1) or die(mysqli_error($con));
				$query2= "update addstock set quantity=quantity+'".$bqty."' where id='".$id2."'";
				mysqli_query($con,$query2) or die(mysqli_error($con));
				echo "<script>
				alert('deleted.....');
				</script>";
				echo "<script> location.href='bill.php';</script>";
			}
			?>
						</tbody>
					</table>
             </div>
			</div>
                </div>
              </div>
            </div>
			</div>
			</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
      <!--  <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  Premium Karthik Sales All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by Chiraj kumar And Vikas Rao</span> 
          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php
}
else{
	echo "<script> location.href='index.php'; </script>";
}
?>