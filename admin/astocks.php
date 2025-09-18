<?php
session_start();
if(isset($_SESSION['admin'])){

	$admin=$_SESSION['admin'];
	
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
  <link rel="shortcut icon" href="images/dp.jpg" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.jpg" class="mr-2" alt="logo"style="width:230px; height:50px;"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/dp.jpg" alt="logo"/></a>
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
            <a class="nav-link" href="abrand.php">
             <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp; Add brand</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="min.php" >
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
            <a class="nav-link" href="astaff.php" >
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
                  <form class="forms-sample" method="post" action="#">
                   <div class="form-group">
					<h3>Add Stock</h3>
					</br>
					 <label for="exampleInputUsername1"><h4>Product Name</h4></label>
					<select class="custom-select" name="sname2">
                                 <?php
								include 'config.php';
								$sql1 = "select * from addproduct";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$pname=$row1['pname'];
								?>
					  
								<option value="<?php echo $id; ?>"><?php echo $pname; ?> </option>
								<?php
								}
								}
								?>
                            </select>
							</div>				
					<div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="date">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Quantity</label>
                      <input type="text" name="quantity"  pattern="[0-9]+" title="numbers only" class="form-control" id="exampleInputEmail1" placeholder="Quantity">
                    </div>
					  <button type="submit" name="ADD" class="btn btn-primary mr-2">ADD</button>
                    </form>
					<?php
						if(isset($_POST['ADD']))
						{
							error_reporting(1);
							include("config.php");
							
								$sname1=$_POST['sname2'];
								$date=$_POST['date'];
								$quantity=$_POST['quantity'];
								
								
							$sql1 = "select * from addstock where sname='".$sname1."'";
							$result1 = mysqli_query($con,$sql1);
							$num1=mysqlI_num_rows($result1);
								
							if ($num1 > 0)
							{
								$sql2 = "update addstock set sname='".$sname1."',date1='".$date."',quantity=quantity+'".$quantity."' where sname='".$sname1."'";
								$result2 = mysqli_query($con,$sql2);	
								echo "<script>
										alert(' Stock Updated');
									</script>";
									echo "<script> location.href='astocks.php'; </script>";
							}
							else{
								
								$sql2 = "insert into addstock (sname,date,quantity)values('".$sname1."','".$date."','".$quantity."')";
								$result2 = mysqli_query($con,$sql2);	
								echo "<script>
										alert('Stock Added');
									</script>";
									echo "<script> location.href='astocks.php'; </script>";
							}
						}
						?>
                </div>
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Stocks</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SI N0</th>
                          <th>Stock Name</th>
						  <th>Date</th>
						  <th>Updation Date</th>
						   
						  <th>Quantity</th>
						
                          <th>Action</th>
						  
                        </tr>
                      </thead>
                      <tbody>
					    <?php
								include 'config.php';
								$sql1 = "select * from addstock";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$sname=$row1[1];
								$date=$row1[2];
								$date1=$row1[3];
								$quantity=$row1[4];
						$sql2 = "select * from addproduct where id='".$sname."'";
						$result2 = mysqli_query($con,$sql2);
						$num2=mysqlI_num_rows($result2);
						if($num2 > 0)
						{ 
						while($row1 = mysqli_fetch_array($result2))
						{ 
						$pname=$row1['pname'];
						}
						}
								?>
                        <tr>
                         <td> <?php echo $sl; ?></td>
                          <td> <?php echo $pname; ?></td>
                           <td> <?php echo $date; ?></td>
                           <td> <?php echo $date1; ?></td>
							 <td> <?php echo $quantity; ?></td>
							 
                           <td> <form  method="post"  action="#" >
						  <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
						 <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                           </td></form>
						   
                        </tr>
						<?php
}
}
?>
                      </tbody>
					  <?php
if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "delete from addstock where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='astocks.php'; </script>";
}
?>
        
                    </table>
                  </div>
                </div>
              </div>
            </div>
			</div>
			</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  Premium Karthik Sales All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">&nbsp; &nbsp; &nbsp; &nbsp; Distributed by  <a class="text-dark font-weight-semi-bold" href="https://www.instagram.com/im_chiraj/">Chiraj Kumar</a> and<a class="text-dark font-weight-semi-bold" href="https://www.instagram.com/v.ikas._rao/"> Vikas Rao</a><br></span> 
          </div>
        </footer> 
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

