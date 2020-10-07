<?php
session_start();//
// verify.php
include "dbconnect.php";
$email=$_POST['email'];
$password=md5($_POST['katalaluan']);

$sql="SELECT id,email,fullname,accesslevel FROM users 
	WHERE email='$email' 
	AND password='$password'";
$rs=mysqli_query($conn,$sql);
echo "Mysql error:".mysqli_error($conn);
if(mysqli_num_rows($rs)==1){//jumpa user
	$record=mysqli_fetch_array($rs);
	//session data
	$_SESSION['sessionid']=session_id();
	$_SESSION['userid']=$record['id'];//userid
	$_SESSION['fullname']=$record['fullname'];
	$_SESSION['email']=$record['email'];
	$_SESSION['accesslevel']=$record['accesslevel'];

	//redirect dashboard
	if($record['accesslevel']=='admin'){
		header ("Location: dash-admin.php");
	}else if ($record['accesslevel']=='public'){
		header ("Location: dash-public.php");
	}
	echo "1 user found";
	echo "Admin name ".$record['fullname'];
}else{
	//redirect login.php
	header ("Location: login.php?msg=Login failed");
	echo "Email & password not match";
}
?>

