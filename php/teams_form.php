<?php

$Name = filter_input(INPUT_POST, 'Name');
$Caption = filter_input(INPUT_POST, 'Caption');
$Description = filter_input(INPUT_POST, 'Description');

	$conn = new mysqli('localhost', 'root', '', 'overseas@22');
	if (mysqli_connect_error()) {
		die('Connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$x = "INSERT INTO `Teams`(`Name`, `Caption`, `Description`) VALUES (?, ?, ?)";

		$stmt = $conn->prepare($x);
		$stmt-> bind_param("sss", $Name, $Caption, $Description);
		$stmt -> execute();
		header('location: http://localhost:8080/Overseas@22/Teams.html');
	}

	$stmt -> close();
	$conn -> close();

?>