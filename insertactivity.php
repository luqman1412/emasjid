<?php
include "checksession.php";
//insertactivity.php
include ("header.template.php");
?>

Insert Record<br>
<form method="post" action="">
	Activity* <input name="activityname" type="text"
	class="form-control">
	Time* <input type="time" name="time"
	class="form-control">
	Date* <input type="date" name="date"
	class="form-control">
	Speaker <input type="text" name="speaker"
	class="form-control">
	<button type="submit"
	class="btn btn-success">Save Record</button>
</form>

<?php
if(isset($_POST['activityname']) &&
	isset($_POST['time']) && isset($_POST['date'])){

	//simpan ke database
	include "dbconnect.php";
	
	//fetch data
	$activityname=$_POST['activityname'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$speaker=$_POST['speaker'];
	$userid=$_SESSION['userid'];
	echo "spaeker ".$speaker."<br>";
	//sql insert
	$sql="INSERT INTO activities (activityname, date, time,speaker,userid)
		  VALUES('$activityname','$date','$time','$speaker', $userid)";
		//data dari borang html
		//echo $sql;

	$rs=mysqli_query($conn,$sql);
	if($rs==true){
		echo "Record saved";
	}else{
		echo "err".mysqli_error($conn);
		echo "Cannot save record";
	}
}//end isset

include ("footer.template.php");
?>