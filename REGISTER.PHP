<?php
session_start();

$con  = mysqli_connect('localhost' , 'root' , '' , 'library_management_db');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// code...
	$user_name = $_POST['User_name'];
	$Pass_word = $_POST['pass_word'];
	$Name = $_POST['member_name'];
	$Father_name = $_POST['father_name'];
	$Gender= $_POST['gender'];
	$Address= $_POST['address'];
	$phone_number = $_POST['phone_number'];
	$Email= $_POST['email'];


	if ($con) {
		// code...
		$query = " call sp_member_register('$user_name' , '$Pass_word' ,'$Name','$Father_name','$Gender','$Address','$phone_number','$Email')";

		mysqli_query($con ,$query);

		echo "<script> alert('Successfully Register')</script>";
	}
	else {
		echo "<script> alert('Enter valid information')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Login and Register</title>
</head>
<body>
<div class="signup">
<h1>Sign Up</h1>
<h4>It's free and only takes a minute</h4>
<form method="POST">
	<label>Username</label>
	<input type="text" name="User_name" placeholder="Enter your name" required>
	<label>Password</label>
	<input type="Password" name="pass_word" placeholder="Enter your Password" required>
	<label>Your Name</label>
	<input type="name" name="member_name"  required>
	<label>Father name</label>
	<input type="text" name="father_name" required>
	<label>Gender</label>
	<input type="gender" name="gender" required>
	<label>Address</label>
	<input type="text" name="address" placeholder="Enter your address" required>
	<label>Phone number</label>
	<input type="number" name="phone_number" required>
	<label>Email</label>
	<input type="email" name="email" placeholder="Enter your email" required>
	<input type="submit" name="" value="submit">
	<p>By clicking the sign up button, you agree to our <br>
		<a href="">Terms and condition</a>and <a href="#">Privacy Policy </p>
			<p>Already have an account?<a href="memberlogin.php">Login here</a></p>
</form>
</div>
</body>
</html>

<style>
	body{
		background-color: #1A1A1D;
		width: 100%;
		height: 100vh;
		font-family: sans-serif;
	}
	.signup{
		width: 360px;
		height: 900px;
		margin: auto;
		background: white;
		border-radius: 3px;
	}
	h1{
		text-align: center;
	}
	h4{
		text-align: center;
		padding-top: 15px;
	}
	form{
		width: 300px;
		margin-left: 20px;
	}
	form label{
		display: flex;
		margin-top: 20px;
		font-size: 18px;

	}
	form input{
		width: 100%;
		padding: 7px;
		border: none;
		border: 1px solid gray ;
		border-radius: 6px;
		outline: none;
	}
	input[type = "submit"]{
		width: 320px;
		height: 35px;
		margin-top: 20px;
		border: none;
		background-color: #950740 ;
		color: white;
		font-size: 18px;
		cursor: pointer;
	}
	input[type = "submit"]:hover{
		color: white;
		background: #C3073f ;
	}
	p{
		text-align: center;
		padding-top: 20px;
		font-size: 15px;

	}

</style>
