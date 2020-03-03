<?php
	$servername = "localhost";
	$dbname = "newsample";
	$conn = mysqli_connect("localhost","root","",$dbname);
	if($conn->connect_error)
	{
		die("connection failed :".$conn->connect_error);
	}
	else
	{
		echo "connected";
	}
		/*extract($_POST);
		//$reference = implode(',', $_REQUEST['ref']);
	//	$sql = "INSERT INTO sampletable (name,mail,password,cpassword,gender,dob,numbe,visit,service,comment) VALUES ('$name',$email','$password','$cpassword','$gender','$dob','$nube','$visit','$service','$comment')";
	$sql = "INSERT INTO sampletable (name,mail,password,cpassword) VALUES ('$name',$email','$pswd','$cpswd')";
	$res = $conn->query($sql);
	echo $res;
	if($conn->query($sql) == TRUE)
	{
		header('Location:login.php');
		exit();
	}
	else
	{
		header("Location:connection.php?msg=failed");
		exit();
	}
	}*/
	mysqli_close($conn);
?>