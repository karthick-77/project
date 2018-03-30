<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","test");
// Selecting Database
//$db = mysql_select_db("test", $connection);
session_start();// Starting Session
header("Cache-Control: no-store, no-cache, must-revalidate");
// Storing Session
$user_check=$_SESSION['login_user'];
if($user_check=="")
{
	header('Location: ../../index.php'); // Redirecting To login Page
}
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select user_id from users where user_id='$user_check'");
//echo "$ses_sql";
$ses_sql1=mysqli_query($connection,"select user_type from users where user_id='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['user_id'];
$row1 = mysqli_fetch_assoc($ses_sql1);
$user_type =$row1['user_type'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
if($user_type=="u")
{
header('Location: ../user/home.php'); // Redirecting To Home Page
}
else if($user_type=="a")
{
	header('Location: ../admin/home.php');
}

}
?>
