<?php
include "checksession.php";
//dash-admin.php
include ("header.template.php");
?>

<h2>Welcome admin <?php echo $_SESSION['fullname'] ?></h2>
<a href="insertactivity.php">Insert record</a><br>
<a href="updateactivity.php">Update/Delete record activity</a>
<br>
<a href="editadmin.php">Edit admin profile</a>
<br>
<a href="logout.php">Logout</a><br>

<?php
include ("footer.template.php");
?>