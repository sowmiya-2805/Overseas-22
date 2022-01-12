<?php
	
	$First_Name = filter_input(INPUT_POST, 'First_Name');
	$Last_Name = filter_input(INPUT_POST, 'Last_Name');
	$E_mail = filter_input(INPUT_POST, 'E_mail');
	$Password  = filter_input(INPUT_POST, 'Password');
	$Age = filter_input(INPUT_POST, 'Age');
	$Gender = filter_input(INPUT_POST, 'Gender');
	$Nationality = filter_input(INPUT_POST, 'Nationality');
	$Current_Semester = filter_input(INPUT_POST, 'Current_Semester');
	$Planned_term = filter_input(INPUT_POST, 'Planned_term');
	$College = filter_input(INPUT_POST, 'College');
	$Technology = filter_input(INPUT_POST, 'Technology');
	$Aimed_University = filter_input(INPUT_POST, 'Aimed_University');

	$conn = new mysqli('localhost', 'root', '', 'overseas@22');
	if (mysqli_connect_error()) {
		die('Connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{

		$SELECT = "SELECT E_mail FROM `Student_form` WHERE E_mail = ? LIMIT 1";

		$INSERT = "INSERT INTO `Student_form` (First_Name, Last_Name, E_mail, Password, Age, Gender, Nationality, Current_Semester, Planned_term, College, Technology, Aimed_University) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn -> prepare($SELECT);
		$stmt->bind_param("s", $E_mail);
		$stmt->execute();
		$stmt->bind_result($E_mail);
		$stmt->store_result();
		$rnum = $stmt->num_rows();

		if($rnum == 0 ){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssissiisss", $First_Name, $Last_Name, $E_mail, $Password, $Age, $Gender,$Nationality, $Current_Semester,$Planned_term, $College, $Technology, $Aimed_University);
			$stmt->execute();
			header('location: http://localhost:8080/Overseas@22/Student.html');

		}else{
				echo "somebody registered using this E-Mail";
		}

		$stmt->close();
		$conn->close();
}
?>