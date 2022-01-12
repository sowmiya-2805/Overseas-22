<?php

$First_Name = filter_input(INPUT_POST, 'First_Name');
$Last_Name = filter_input(INPUT_POST, 'Last_Name');
$E_mail = filter_input(INPUT_POST, 'E_mail');
$Password = filter_input(INPUT_POST, 'Password');
$Gender = filter_input(INPUT_POST, 'Gender');
$College = filter_input(INPUT_POST, 'College');
$Department = filter_input(INPUT_POST, 'Department');
$Experience = filter_input(INPUT_POST, 'Experience');
$Current_research = filter_input(INPUT_POST, 'Current_research');
$Student_limit = filter_input(INPUT_POST, 'Student_limit');

	$conn = new mysqli('localhost', 'root', '', 'overseas@22');
	if (mysqli_connect_error()) {
		die('Connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{

		$SELECT = "SELECT E_mail FROM `professor_form` WHERE E_mail = ? LIMIT 1";

		$INSERT = "INSERT INTO `professor_form` (First_Name, Last_Name, E_mail, Password, Gender, College, Department, Experience, Current_research, Student_limit) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn -> prepare($SELECT);
		$stmt->bind_param("s", $E_mail);
		$stmt->execute();
		$stmt->bind_result($E_mail);
		$stmt->store_result();
		$rnum = $stmt->num_rows();

		if($rnum == 0 ){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssssisi", $First_Name, $Last_Name, $E_mail, $Password, $Gender, $College, $Department, $Experience,$Current_research,$Student_limit);
			$stmt->execute();
			header('location: http://localhost:8080/Overseas@22/Professor.html');

		}else{
				echo "somebody registered using this E-Mail";
		}

		$stmt->close();
		$conn->close();
}


?>