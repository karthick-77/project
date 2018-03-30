<?php
//require '.\dbconnect.php';
//require '.\dbconnect.php';
require 'dbconnect.php';

echo "registration.php page";
$user_id = $_POST['username'];
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$password = $_POST['password'];
$password = md5($password);
$password = mysqli_real_escape_string($con,$password);
$mobile= $_POST['mobile'];
$pincode = $_POST['pincode'];
echo "user id:",$user_id," \n  ";
echo "fullname 	:",$firstname,"   ",$email,"add:",$address,"city:",$city;
echo "country:",$country,"password",$password;
$user_type="u";
$user_type = mysqli_real_escape_string($con,$user_type);
echo "users".$user_type;

echo "mobile number ::::: ",$mobile;
echo "Postal code :::::::::::::",$pincode;
$result = "INSERT INTO userreg(user_id,password,firstname,lastname,email,address,city,country,pincode,mobile,gender) VALUES (
'" . $_POST["username"] . "',
'$password',
'" . $_POST["firstname"] . "',
'" . $_POST["lastname"] . "',
'" . $_POST["email"] . "',
'" . $_POST["address"] . "',
'" . $_POST["city"] . "',
'" . $_POST["country"] . "',
'" . $_POST["pincode"] . "',
'" . $_POST["mobile"] . "',
'" . $_POST["gender"] . "')";

echo $result;
$addval = mysqli_query($con,$result);
if(!$addval)
{
	die ("not able to insert".mysqli_error());
}
else
{
	echo "entered done";
	$update_users = "INSERT INTO users(user_id,password,user_type	) VALUES ( '" . $_POST["username"] . "',
'$password','$user_type')";
echo $update_users;
$addvalusers = mysqli_query($con,$update_users);
if(!$addvalusers)
{
	die ("not able to insert".mysqli_error());
}
else
{
	echo "entered users done";
	
	header("Location:../index.php");
}
}
//$result->execute();

?>