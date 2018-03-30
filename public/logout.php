<?php
include("sessions.php");
unset($_SESSION['login_user']);
session_destroy();
//header("Cache-Control: no-store, no-cache, must-revalidate");
//header("Location:../index.php");
header("Location: ../index.php");
?>