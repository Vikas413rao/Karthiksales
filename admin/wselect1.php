<?php
if(isset($_POST['submit1']))
{
foreach ($_POST['pid'] as $key => $value) 
        {
		$pid=$value;
		session_start();
		$_SESSION['pid']=$pid;
		}
		echo "<script> location.href='bill.php'; </script>"; 
}
?>