<?php 
	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$phone_Code = $_POST['phone_Code'];
	$phone_Number = $_POST['phone_Number'];
	$Gender = $_POST['Gender'];
	$Email = $_POST['Email'];
	$User_name = $_POST['User_name'];
	$password = $_POST['password'];
	
	//create connectio
	$conn = new mysqli("localhost","root","","project");
	if($conn->connect_error){
		die('Conncetion Failed '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into user_registration(First_name,Last_name,phone_Code,phone_Number,Gender,Email,User_name,password) value(?,?,?,?,?,?,?,?)");
		
		$stmt->bind_param("ssssssss",$First_name,$Last_name,$phone_Code,$phone_Number,$Gender,$Email,$User_name,$password);
		$stmt-> execute();
		echo "Registration Successfully";
		$stmt->close();
		$conn->close();
	}

?>