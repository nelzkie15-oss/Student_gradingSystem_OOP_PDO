
<?php

  include("../config/conn/db-connection.php");
  session_start();
  date_default_timezone_set("asia/manila");
  $timeout = date("M-d-Y h:i A",strtotime("+0 HOURS"));
  $user = trim($_SESSION['student_no']);
  $remarks="Has Time Out the system at"; 

  $sql = "UPDATE tbl_attendance SET `logout_to` = ?, remark_logout = ?  WHERE `user_name` = ?";
  $db->prepare($sql)->execute([$timeout, $remarks, $user]);

	$_SESSION = NULL;
	$_SESSION = [];
	session_unset();
	session_destroy();

  header('Location: ../index.php');

?>
