<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Enter valid Username and Password";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","test");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
//$password = stripslashes($password);
$password = md5($password);
//$password = mysqli_real_escape_string($con,$password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
//$db = mysqli_select_db("test", $connection);
// SQL query to fetch information of registerd users and finds user match.
//$sql = "select * from users where password='$password' AND user_id='$username'";
$result = mysqli_query($connection,"SELECT * FROM users WHERE user_id='" . $_POST["username"] . "' and password = '$password'");
$ses_sql1 = mysqli_query($connection,"SELECT user_type FROM users WHERE user_id='" . $_POST["username"] . "' and password = '$password'");
$count  = mysqli_num_rows($result);
$row1 = mysqli_fetch_assoc($ses_sql1);
$user_type =$row1['user_type'];
	if ($count==0) {
		$error = "Invalid Login";
		header("location: ./index.php?error_message=$error");
		//echo "user_type value: ".$user_type;
//echo "   test";
	}

//echo $sql;
//$query =0;
//$query = mysqli_query($connection,$sql);
//echo "after query ans :",$query;
//$rows = mysqli_fetch_assoc($query);
//echo "rows",$rows;

if ($count == 1) {
	echo "inside if";
$_SESSION['login_user']=$username; // Initializing Session

			if(!empty($_POST["remember"])) {
				setcookie ("user_id",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("user_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["user_id"])) {
					setcookie ("user_id","");
				}
				if(isset($_COOKIE["user_password"])) {
					setcookie ("user_password","");
				}
			}
	} 
	

if($user_type == "u")
{
header("location: ./public/user/home.php"); // Redirecting To Other Page
} 
else if ($user_type == "a"){
	header("location: ./public/admin/index.html");

}}

/*else {
	echo "else block";
	$error = "Username or Password is invalid";
	echo $error;
	header("location: ./index.php?error_message=$error");	


}	*/

?>

