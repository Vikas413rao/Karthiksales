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
      <!-- partial -->
      <div class="main-panel">
         <div class="content-wrapper">
          <div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card" style="padding-left:200px;padding-right:-180px;">
                <div class="card-body">
                  <h4 class="card-title">Products</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SI N0</th>
                          <th>Brand Name</th>
						  <th>Product Name</th>
						  <th>Image</th>
						  <th>Prize</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
								include 'config.php';
								$sql1 = "SELECT addproduct.id,addproduct.brand,addproduct.pname,addproduct.image,addproduct.price,addproduct.Description,addstock.quantity FROM addstock INNER JOIN addproduct ON addproduct.id=addstock.sname where addstock.quantity!=0"; 
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0; 
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$apid=$row1[0];
								$brand=$row1[1];
								$pname=$row1[2];
								$image=$row1[3];
								$price=$row1[4];
								$Description=$row1[5];
								$quantity=$row1[6];
								
								?>
                        <tr>
                          <td> <?php echo $sl; ?></td>
                          <td> <?php echo $brand; ?></td>
                           <td> <?php echo $pname; ?></td>
						    <td> <img src="product/<?php echo $image; ?>"</td>
							 <td> Rs.<?php echo $price; ?></td>
                           <td> <form  method="post"  action="wselect1.php" >
						  <input type="text" name="pid[]" value="<?php echo $apid; ?>" hidden="true">
						 <button type="submit" name="submit1" class="btn btn-primary btn-sm">Select</button>
						</form></td>
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
	$query1 = "delete from addproduct where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='aproduct.php'; </script>";
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