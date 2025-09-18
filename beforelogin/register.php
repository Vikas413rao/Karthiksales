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
  margin-top: 80px;
  margin-left: 33%;
  padding: 20px;
  border-radius: 40px;
  height: 70vh;
  font-family: 'Popinns',sans-serif;
  background-color: wheat;
}
.pt-3 h2{
font-family: sans-serif;
text-align: inherit;
margin-left: 150px;
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
  height: 40px;
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
  margin-left: 10px;
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
.mt-3 {
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
              <h2>Register</h2>
              <div class="form-group">
                  <i class="fa fa-user"></i>
                  <input type="name" pattern="[A-Za-z\s]+" "[A-Za-z0-9\s]+" title="only letters" required  name="name" placeholder="User Name">
                </div>
                <div class="form-group">
                  <i class="fa fa-store"></i>
                  <input type="text" pattern="[A-Za-z\s]+" "[A-Za-z0-9\s]+" title="only letters" name="sname" placeholder="Shop Name">
                </div>
                <div class="form-group">
                  <i class="fa fa-envelope"></i>
                  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i>
                  <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <i class="fa fa-phone"></i>
                  <input type="text" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" required name="phone" placeholder="Phone Number">
                </div>
                <div class="mt-3">
                 <button type="submit" name="submit">REGISTER</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
              </form>
			  <?php
			  if(isset($_POST['submit']))
			  {
				  error_reporting(1);
				  include('config.php');
				 $email=$_POST['email'];
				 $sql="select * from register where email='$email'";
				 $result=mysqli_query($con,$sql);
				 $count=mysqli_num_rows($result);
				 if($count>0)
				 {
					 echo"<script>
					 alert('There is an existing account associated with this email');
					 </script>";
					 echo "<script> location.href='index.php';</script>";
				 }
				 else
				 {
					 $name=$_POST['name'];
					 $sname=$_POST['sname'];
					 $email=$_POST['email'];
					 $password=$_POST['password'];
					 $phone=$_POST['phone'];
					 $query="Insert into register(name,sname,email,password,phone) values('".$name."','".$sname."','".$email."','".$password."','".$phone."')";
					 mysqli_query($con,$query) or die(mysqli_error($con));
					 echo "<script>
					 alert(' Registration completed, Please Login');
					 </script>";
					 echo "<script> location.href='login.php'; </script>";
				 }
			  }
			  ?>
            </div>
          </div>
        </div>
</body>
</html>