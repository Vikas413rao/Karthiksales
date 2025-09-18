<?Php
session_start();
foreach ($_POST['id1'] as $key =>$value)
					{
						$id1=$value;
foreach ($_POST['bid'] as $key => $value) {
	$bid=$value;
	//$_SESSION['bid']=$bid;
	error_reporting(1);
	include("config.php");
	$sql = "delete from external_bill where id='".$bid."'";
	mysqli_query($con,$sql) or die(mysqli_error($con));
	$query2= "update addstock set quantity=quantity+'".$qty."' where id='".$id1."'";
				mysqli_query($con,$query2) or die(mysqli_error($con));
		}
					}
		echo "<script> location.href='bill.php'; </script>"; 

?>