<?php
include_once 'connect.php';
if(isset($_POST['save']))
{	 
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
     $pass1 = $_POST['pass1'];
	 $pass2 = $_POST['pass2'];

	 if(strcmp($pass1,$pass2)!=0){
		header("Location: login2.php?cpass");
		exit();
	 }
	 elseif(empty($fname) || empty($lname) || empty($email) || empty($pass1) || empty($pass2) ){
		header("Location: login2.php?login=empty");
		exit();
	 }
	 else{
		$hashedPass = password_hash($pass1, PASSWORD_DEFAULT);
	 $sql = "INSERT INTO sign_in(fname,lname,email,pass)
	 VALUES ('$fname','$lname','$email','$hashedPass')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: signup_success.html?$fname");
		exit();
	 } else {
		header("Location: index.php?error");
		exit();
	 }
	}
}
?>