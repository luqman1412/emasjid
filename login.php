<?php
include ("header.template.php");
?>
Login 
<form method="post" action="verify.php">
	Email <input type="text" 
	name="email"
	class="form-control">
	Password <input type="password" 
	name="katalaluan"
	class="form-control">
	<input type="submit" value="Login"
	class="btn btn-success">
</form>
<!-- login.php -->
<?php
	if (isset($_GET['msg'])){
		echo "<div class='alert alert-warning'>";
		echo $_GET['msg'];
		echo "</div>";
	}
	include ("footer.template.php");
?>