<?php
	include ("header.template.php");
?>
<!-- forminsert.php -->
<form method="post" action="">
	MatrixNo 
	<input type="text" name="matrixno"
	class="form-control"><br>
	Name  
	<input type="text" name="name"
	class="form-control"><br>
	Address 
	<input type="text" name="address"
	class="form-control"><br>
	DOB 
	<input type="date" name="dob"
	class="form-control"><br>
	<input type="submit" value="Insert Record"
	class="btn btn-success">
</form>
<hr>
<?php
	if(isset($_POST['matrixno']) && isset($_POST['name'])){

		//connect to db
		include ("dbconnect.php");

		$matrixno=$_POST['matrixno'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];

		//sql command
		$sql="INSERT INTO students(matrixno,
			name, address, dob)
			VALUES ('$matrixno','$name',
			'$address','$dob')";

		//execute sql
		$result = mysqli_query($conn, $sql);

		//evaluate the execution
		if($result==true){
			echo "The record for $matrixno has been saved";
		}
		else{
			echo "The record cannot be saved";
		}

	}
?>
<?php
	include ("footer.template.php");
?>