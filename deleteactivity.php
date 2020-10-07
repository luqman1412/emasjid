<?php
require  'dbconnect.php';
$id=$_GET['id'];
$sql="delete from activities
 where id='$id' ";
$q=mysqli_query($conn,$sql);
if ($q==true){
echo "The record for $id has been deleted";
header('Location: dash-admin.php');
exit();
}
else{
echo "Fail to delete record for $id";
echo mysqli_error($conn);
}
?>