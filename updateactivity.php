<?php
//updateactivity.php
if(isset($_POST['activityname']) &&
	isset($_POST['time']) && isset($_POST['date'])){

	//simpan ke database
	include "dbconnect.php";
	
	//fetch data
	$id=$_POST['id'];
	$activityname=$_POST['activityname'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$speaker=$_POST['speaker'];

	//sql insert
	$sql="UPDATE activities
		SET
		activityname='$activityname', 
		date='$date', 
		time='$time',
		speaker='$speaker'
		WHERE id='$id'";
		//data dari borang html
		//echo $sql;

	$rs=mysqli_query($conn,$sql);
		
	}
	if($rs==true){
      
      header('Location: listing.php?success=recordupdate');
      exit();

    }
    else{

      echo "Failed to update record<br>";
      echo "SQL error :".mysqli_error($conn);
      exit();
    }
//end isset
?>
<?php
?>