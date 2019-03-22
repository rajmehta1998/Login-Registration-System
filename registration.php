<?php
	session_start();
	header('location:login.php');
	
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'userregistration');

	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());
	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	$cpass = $_POST['cpassword'];
	
	$s= "select * from usertable where name = '$name'";
	
	$result = @mysqli_query($con, $s);
	
	$num = @mysqli_num_rows($result);
	
	if($num == 1)
	{
		echo "Username already taken";
	}
	elseif($pass != $cpass)
	{
		echo '<script type="text/javascript">

          window.onload = function () { alert("Passwords do not match"); }

		</script>';
	}
	else
	{
		$reg = "insert into usertable(name , password) values('$name' , '$pass')";
		@mysqli_query($con, $reg);
		echo "Registration Successful";
	}
?>