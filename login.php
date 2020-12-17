
<?php  
include "connect.php";

if(isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email2']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass3']);
	if(empty($email) || empty($pass)) {
		header("Location: login2.php?login=empty");
		exit();
	  }
	  elseif(strcmp($email,'admin@test.com')==0 && strcmp($pass,"admin")==0)
	  {
		header("Location: test2.php?login=success");
		exit();
	  }
	  else{
		$sql = "SELECT * FROM sign_in WHERE email='$email';";
		$result = mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
		$hashedPassCheck = password_verify($pass, $row['pass']);
        if($hashedPassCheck == false) {
          header("Location: login2.php?login=error");
          exit();
        }else {
			$first = $row['fname'];
			setcookie( "first", $first, time() + (3600), "/");
			header("Location: index.php?success=$first");
			exit();
		}
	  }
	}
	else{
		header("Location: ../login2.php?login=error");
		exit();
	}
?>