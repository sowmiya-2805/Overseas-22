<?php

    $First_Name = filter_input(INPUT_POST, 'First_Name');
	$Last_Name = filter_input(INPUT_POST, 'Last_Name');
	$E_mail = filter_input(INPUT_POST, 'E_mail');
	$Password  = filter_input(INPUT_POST, 'Password');
	$Gender = filter_input(INPUT_POST, 'Gender');
	$Age = filter_input(INPUT_POST, 'Age');
	$Specialisation = filter_input(INPUT_POST, 'Specialisation');
	$Qualification = filter_input(INPUT_POST, 'Qualification');
	$University = filter_input(INPUT_POST, 'University');
	$Experience = filter_input(INPUT_POST,  'Experience');
	$Work_time = filter_input(INPUT_POST, 'Work_time');
	$Pay = filter_input(INPUT_POST, 'Pay');

	$conn = new mysqli('localhost', 'root', '', 'overseas@22');
	if (mysqli_connect_error()) {
		die('Connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{

		$SELECT = "SELECT E_mail FROM `counsellor_form` WHERE E_mail = ? LIMIT 1";

		$INSERT = "INSERT INTO `counsellor_form` (First_Name, Last_Name, E_mail, Password, Gender, Age, Specialisation, Qualification, University, Experience, Work_time, Pay) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn -> prepare($SELECT);
		$stmt->bind_param("s", $E_mail);
		$stmt->execute();
		$stmt->bind_result($E_mail);
		$stmt->store_result();
		$rnum = $stmt->num_rows();

		if($rnum == 0 ){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssisssisi", $First_Name, $Last_Name, $E_mail, $Password, $Gender, $Age, $Specialisation, $Qualification, $University, $Experience, $Work_time, $Pay);
			$stmt->execute();
			header('location: http://localhost:8080/Overseas@22/Counselling.html');

		}else{
				echo "somebody registered using this E-Mail";
		}

		$stmt->close();
		$conn->close();
}



?>