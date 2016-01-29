<?php
session_destroy();
$msg = "Logged out Succesfully";
$class = "alert alert-success";
header("Location: login.php?msg=".$msg."&class=".$class);
exit;
?>