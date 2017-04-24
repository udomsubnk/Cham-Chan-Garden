<?php 
	session_start();
	if(isset($_POST["login-email"])){
		//login
		$loginEmail = $_POST["login-email"];
		$loginPassword = md5($_POST["login-password"]);
		checkEmail($loginEmail,$loginPassword);
	}else if(isset($_POST["regis-email"])){
		//register
		$email = $_POST["regis-email"];
		$password = md5($_POST["regis-email"]);
	}

	function checkEmail($loginEmail,$loginPassword){
		include "config.php";
		$conn = new mysqli($host, $user, $password, "james");
		$sql = "select * from members where email = '".$loginEmail."' and password ='".$loginPassword."'";
      	$result = $conn->query($sql);
      	if ($result->num_rows == 1){
      		while($row = $result->fetch_assoc()){
  		        $_SESSION["email"] = $row["email"];
  		        header( "location: cart.php" );
  		        exit(0);
  		    }
      	}
      	else echo "ไม่พบ Email หรือ password นี้ในระบบ <br>กรุณา login ใหม่อีกครั้ง";
	}
?>
