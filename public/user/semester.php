<?php 
//$semester="";
//echo $semester;
$connection = mysqli_connect("localhost", "root", "","test");
$semester=$_GET['semester'];
//header("location:wase-books.php");
echo $semester;
$semester=mysqli_real_escape_string($connection,$semester);
$result = mysqli_query($connection,"SELECT * FROM wipro");
//echo $result;
echo "testing";
$row=mysqli_fetch_assoc($result);
/*while($row= $result->fetch_assoc())
{
	echo $row[]."<br>";
}*/
//echo $semester; 
//echo $row;
//$count  = mysqli_num_rows($row);


//echo $count;
?>