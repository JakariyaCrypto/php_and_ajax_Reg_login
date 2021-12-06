<?php
session_start();
//database connect
$conn = mysqli_connect('localhost','root','','ra_furniture');
// login script

if (isset($_POST['email']) || isset($_POST['password'])) {
	$password = md5($_POST['password']);
	$email = $_POST['email'];

	if (empty($email) || empty($password)) {
		echo "<div class='alert alert-danger'><span>input is not be empty</span></div>";
	}else{
		$sql = "select * from users where fname = '$email'";
		$sql_run = mysqli_query($conn,$sql);
		$check = mysqli_fetch_assoc($sql_run);

			if ($check == null) {
				
				echo "<div class='alert alert-danger'><span>E-mail is not match our record </span></div>";
			}else{
				if ($check) {

					$_SESSION['id'] = $check['id'];
					$_SESSION['fname'] = $check['fname'];
					$_SESSION['lname'] = $check['lname'];
					$_SESSION['password'] = $check['password'];
					if ($_SESSION['id']) {
						$status = 'success';
						return json_encode(['status'=>$status]);
					}
				}
			}
	}

	
	}
?>