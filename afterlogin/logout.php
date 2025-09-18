<?php
{
	session_start();
	session_unset();
	session_destroy();
	echo"<script> alert('Logout succesfull');</script>";
	echo"<script> location.href='../beforelogin/index.php';</script>";
}