<?php
include "checksession.php";
//editadmin.php
include "header.template.php";
include "dbconnect.php";
$id=$_SESSION['userid'];
$sql="SELECT * FROM users
		WHERE id='$id' ";
$rs=mysqli_query($conn, $sql);
if (mysqli_error($conn)==true){
		echo mysqli_error($conn);
	}//sql error
$rec=mysqli_fetch_array($rs);
?>

<h2>Edit admin profile</h2>
<form action="updateadmin.php" method="post"
	enctype="multipart/form-data">
	id<input name="id" type="text" class="form-control"
	value="<?php echo $rec['id'] ?>" readonly>
	Email<input name="email" type="text" 
	class="form-control"
	value="<?php echo $rec['email'] ?>" readonly>
	Fullname<input name="fullname" type="text" 
	class="form-control"
	value="<?php echo $rec['fullname'] ?>" >
	Username<input name="username" type="text" 
	class="form-control"
	value="<?php echo $rec['username'] ?>" >

	<hr>
	<h4>Upload profile picture image file  only</h4>
	<input type="file" name="fileToUpload">
	<br>
	<hr>
	<button class="btn btn-success">Save profile update</button>
</form>


<?php
include "footer.template.php";
//editadmin.php
?>