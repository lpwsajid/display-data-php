<?php 
	echo $c_name = $_POST['cname'];
	echo $c_email = $_POST['cemail'];
	echo $c_salry = $_POST['csalary'];
	echo $c_phone = $_POST['cphone']; 



	$servername	= "localhost";
	$username	= "root";
	$password	= "";
	$dbname		= "cr";

  $con = mysqli_connect($servername,$username,$password,$dbname) or die("Connection Faild");

  $sql = "INSERT INTO cd(cname,cemail,csalary,cphone) VALUES ('{$c_name}','{$c_email}','{$c_salry}','{$c_phone}')";
  
  $reslut = mysqli_query($con, $sql) or die("Query unsuccsessful");

  header("Location:http://localhost/pro/web1/add.php");

  mysqli_close($con);
 ?>