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
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.jpg" class="mr-2" alt="logo"style="width:230px; height:50px;"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/dp.jpg" alt="logo"/></a>
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
      <!-- partial:partials/_settings-panel.html -->
      
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
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
            <a class="nav-link" href="astocks.php">
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
            <a class="nav-link" href="min.php">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
              <span class="menu-title"> &nbsp;&nbsp;&nbsp;&nbsp;Minimum stock display</span>
            
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acredit.php">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Add credit</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="astaff.php">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Add staff</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bill.php">
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
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Karthik</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly!<span class="text-primary"></span></h6>
                </div>
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Mangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
			   <?php
								include 'config.php';
								$sql1 = "select * from ordertb group by orderno";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								
								?>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total sales</p>
                      <p class="fs-30 mb-2"><?php echo $num1; ?></p>
                    
                    </div>
                  </div>
                </div>
				 <?php
								include 'config.php';
								$sql1 = "select * from ordertb";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								
								?>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total order</p>
                      <p class="fs-30 mb-2"><?php echo $num1; ?></p>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
			   <?php
								include 'config.php';
								$sql1 = "select * from addbrand";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								
								?>
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Brands</p>
                      <p class="fs-30 mb-2"><?php echo $num1; ?></p>
                     
                    </div>
                  </div>
                </div>
				<?php
								include 'config.php';
								$sql1 = "select * from addstaff";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								?>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Staff</p>
                      <p class="fs-30 mb-2"><?php echo $num1; ?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Search By Month</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="#" method="post">
				  
					<select class="form-control" name="month" >
					<option value="1">January</option>
                    <option value="2">Feb</option>
                    <option value="3">March</option>
                    <option value="4">Apr</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                    </select>
								<br/>
                    <button type="submit" name="submit1" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
			
			<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Search By Year</h6>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="#" method="post">
				  
					<select class="form-control"  name="year" >
                                <?php

                                include 'config.php';
                                $sql1 = "select year(date) from ordertb where status='Accepted' group by year(date)";
                                $result = mysqli_query($con, $sql1);
                                $num1 = mysqlI_num_rows($result);
                                $sl = 0;
                                if ($num1 > 0) {
                                  while ($row = mysqli_fetch_array($result)) {
                                    $sl += 1;
                                    $date = $row[0];
                                    ?>
                        <option value="<?php echo $date; ?>"><?php echo $date; ?></option>
                        <?php
                                  }
                                }
                                ?>
                                </select><br/>
                     <button type="submit" name="submit2" class="btn btn-primary me-2">Submit</button>
                  </form>
              </div>
            </div>
            </div>
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Purchase</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL.NO</th>
                          <th>Order.NO</th>
                          <th>Date</th>
                         
                          
                        </tr>
                      </thead>
                      <tbody>
					  <?php

                     include 'config.php';
                     if (isset($_POST['submit1'])) 
						{
                          $month = $_POST['month'];
                          $sql1 = "select orderid,orderno,date from 
						  ordertb where status='Accepted' and month(date)='".$month."' group by orderno";
                        } 
						else if (isset($_POST['submit2'])) 
						{
                          $year = $_POST['year'];
                          $sql1 = "select orderid,orderno,date from ordertb where status='Accepted' and year(date)='".$year."' group by orderno";
                        } 
						else 
						{
                          $sql1 = "select orderid,orderno,date from ordertb where status='Accepted' group by orderno";
                        }
                        $result = mysqli_query($con, $sql1);
                        $num1 = mysqlI_num_rows($result);
                        $sl = 0;
                        if ($num1 > 0) {
                          while ($row = mysqli_fetch_array($result)) {
                            $sl += 1;
                            $orderid = $row[0];
                            $orderno = $row[1];
                            $date = $row[2];
                            

                            ?>
                        <tr>
                                          
                          <td><?php echo $sl; ?></td>
                          <td><?php echo $orderno; ?></td>
                          <td><?php echo $date; ?></td>
                          
                          
						</tr>
						<?php 
						  }
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
        <!-- partial:partials/_footer.html -->
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

