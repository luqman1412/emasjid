<?php
session_start();//mesti di atas
include "header.template.php";
//searchactivity.php
$sql="SELECT *
	FROM activities ";
include "dbconnect.php";
$rs=mysqli_query($conn, $sql);
if(mysqli_num_rows($rs)==0){
	echo "No record found";
}else{//paparan rekod
?>
<table class="table">
	<tr>
		<td>id</td>
		<td>Activity name</td>
		<td>Date</td>
		<td>Time</td>
		<td>Speaker</td>
	</tr>
	<?php
		while($rec=mysqli_fetch_array($rs)){
			echo "<tr><td>";
			$id=$rec['id'];
			if(isset($_SESSION['accesslevel']) &&
				$_SESSION['accesslevel']=='admin'){
				echo "<a href='editactivity.php?id=$id'>
				<i class='fa fa-edit'></i></a> ".
				"<a href='#'
				onclick='confirmdelete($id)'>
				<i class='fa fa-trash danger'  style='color:red'></i></a> ";
			}//end display for admin
			echo $rec['id'];
			echo "</td>";
			echo "<td>".$rec['activityname']."</td>";
			echo "<td>".$rec['date']."</td>";
			echo "<td>".$rec['time']."</td>";
			echo "<td>".$rec['speaker']."</td>";
			echo "</tr>";
		}
	?>

</table>
<script>
	function confirmdelete(id){
		var answer=confirm("Are u sure to delete?");
		if (answer==true){
			//redirect
			window.location.href = "deleteactivity.php?id="+id;
		}
	}
</script>
<?php
}
include "footer.template.php";
?>