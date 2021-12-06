<?php
// database link
session_start();
//database connect
$conn = mysqli_connect('localhost','root','','ra_furniture');

//sigin form validation with show message when click
if (isset($_POST['email']) || isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['password'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$email_validation = "/^[_a-z0-9-.]+@[_a-z0-9-]+[a-z0-9.]+.[a-zA-Z0-9.]+$/";

	$name = "/^[_a-zA-Z-.]+$/";
// 
// email validation when click
	if ($email) {
		if (!preg_match($email_validation, $email)) {
			
			echo "
				<div class='alert alert-danger'>
				 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				$email E-mail is not valid !!
			</div>";
 			 exit();
		} 
	}

	if (empty($email)) {
		echo "
			<div class='alert alert-danger'>
			 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			 E-mail is not empty !!
		</div>";
			 exit();
	}

	if (empty($password)) {
		echo "
			<div class='alert alert-danger'>
			 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			 Password is not empty !!
		</div>";
			 exit();
	}
// match confirm password when click 

//check password length
	if (strlen($fname)<3) {
		echo "
			<div class='alert alert-danger'>
			 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			$fname You must be use grater than 3 letter !!
		</div>";
		exit();
			
		}

	if (strlen($lname)<2) {
		echo "
			<div class='alert alert-danger'>
			 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			$lname You must be use grater than 20 letter !!
		</div>";
		exit();
			
		}
// check unique email
	if ($email) {
			$sql = "select * from users where email = '$email'";
			$sql_run = mysqli_query($conn,$sql);
			$check = mysqli_num_rows($sql_run);
				if ($check > 0) {
					echo "
						<div class='alert alert-danger'>
						 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						Email is exit. use other email!!
					</div>";
					exit();
				}
		}

// insert registration users

			$query = "insert into users(fname,lname,email, password )values('$email','$password','$fname','$lname')";
			$quey_run = mysqli_query($conn,$query);
			if ($quey_run) {
				echo "
				<div class='alert alert-success'>
				 <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				Registration successful!! Please login now.
			</div>
			";
			}
		}



?>