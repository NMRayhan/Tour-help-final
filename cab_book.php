<?php 
	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$passenger = $_POST['passenger'];
	$Arrival_time = $_POST['Arrival_time'];
	$phone_Code = $_POST['phone_Code'];
	$phone_Number = $_POST['phone_Number'];
	$Destination = $_POST['Destination'];
	$Visiting_place = $_POST['Visiting_place'];
	$Cab_Rent = $_POST['Cab_Rent'];
	
	//create connectio
	$conn = new mysqli("localhost","root","","project");
	if($conn->connect_error){
		die('Conncetion Failed '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into cab_book(First_name,Last_name,Passenger,Arrival_time,phone_Code,phone_Number,Destination,Visiting_place,Cab_Rent) value(?,?,?,?,?,?,?,?,?)");
		
		$stmt->bind_param("ssississs",$First_name,$Last_name,$passenger,$Arrival_time,$phone_Code,$phone_Number,$Destination,$Visiting_place,$Cab_Rent);
		$stmt-> execute();
		echo "Cab Booking Successfully Complete";
		$stmt->close();
		$conn->close();
	}

?>