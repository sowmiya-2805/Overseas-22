<?php 

$E_mail = filter_input(INPUT_POST, 'E_mail');
$Password  = filter_input(INPUT_POST, 'Password');

$conn = new mysqli('localhost', 'root', '', 'overseas@22');
	if (mysqli_connect_error()) {
		die('Connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$SELECT = "SELECT E_mail, Password FROM `professor_form` WHERE E_mail = '".$E_mail."' AND Password = '".$Password."' LIMIT 1";

		$result = mysqli_query($conn, $SELECT);

		if(mysqli_num_rows($result) == 1){
			echo "done";
			exit();
		}

		else{
			echo "not done";
		}

	}
 ?>