<?php
session_start();
//dash-admin.php
?>
<h2>Welcome admin <?php $_SESSION['fullname'] ?></h2>
<a href="forminsert.php">Insert record</a><br>
<a href="update.php">Update/Delete record activity</a><br>