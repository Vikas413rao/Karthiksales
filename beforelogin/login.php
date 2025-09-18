<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Krthik sales</title>
  <link rel="icon" type="img/png" href="img/1.png">
   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<style>
.container{
  width: 30%;
  margin-top: 170px;
  margin-left: 33%;
  padding: 20px;
  height: 50vh;
  border-radius: 40px;
  font-family: 'Popinns',sans-serif;
  background-color: wheat;
}
.pt-3 h4{
font-family: sans-serif;
text-align: inherit;
font-size: 1em;
}
.brand-logo{
  margin-left: 10px;
}
form{
  margin-left: 10px;
}
.form-group{
  position: relative;
  width:90%;
  padding: 10px;
  height: 30px;
  border-bottom:2px solid #162938 ;
  margin-top: 30px 0;
}

.form-group input{
  width: 90%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color:#162938;
  font-weight: 600;
}
.form-group i{
  position: absolute;
  right: 8px;
  font-size: 1.2em;
  color: #162938;
  line-height: 40px;
}
button{
  margin-top: 20px;
  height: 45px;
  width:90%;
  background-color: rgba(255, 0, 0);
  border: 2px solid red;
  outline: none;
  border-radius: 15px;
  cursor: pointer;
  font-size: 1em;
  color: white;
  font-weight: 500;
}
p{
font-size: 1em;
color: #162938;
font-weight: 500;
padding: 5px;
}
.mt-3{
	color: white;
}
  </style>
</head>
<body>
  <div class="container">
 <div class="brand-logo">
                <img src="img/logo1.png" alt="logo" style="width:200px;">
              </div>
              <form class="pt-3" action="#" method="post">
              <h2>Sign In</h2>
                <div class="form-group">
                  <i class="fa fa-envelope"></i>
                  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required  name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i>
                  
                  <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                 <button type="submit" name="submit">LOG IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                 <p> Don't have an account? <a href="register.php">Register</a></p>
              </form>
			  <?php
			  if (isset($_POST["submit"]))
			  {
				 error_reporting(1);
				 include("config.php");
				 $email=$_POST['email'];
				 $password=$_POST['password'];
				 $sql="select * from register where email='".$email."' and password='".$password."'";
				 $result=mysqli_query($con,$sql);
				 $count=mysqli_num_rows($result);
				 if($count>0)
				 {
					 session_start();
					 $_SESSION['newuser']=$email;
					 $id=$_SESSION['newuser'];
					 echo "<script>
								alert('Login Successfull $id');
								</script>";
					echo "<script> location.href='../afterlogin/index.php';</script>";
				 }
				 else
				 {
				 echo "<script>
							alert('Login not Successfull');
							</script>";
			  }
			  }
			  ?>
            </div>
          </div>
        </div>
</body>
</html>