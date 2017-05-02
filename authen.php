<?php 
	session_start();
	if(isset($_POST["login-email"])){
		//login
		$loginEmail = $_POST["login-email"];
		$loginPassword = md5($_POST["login-password"]);
		if(checkEmail($loginEmail,$loginPassword)){
			$_SESSION['item']= array(
                    "name" => array(),
                    "price" => array(),
                    "quantity" => array(),
                    "picture" => array()      
            );
			header( "location: cart.php" );
	        exit(0);
		}else{
			echo "ไม่พบ Email หรือ password นี้ในระบบ <br>กรุณา login ใหม่อีกครั้ง";
		}
	}else if(isset($_POST["regis-email"])){
		//register
		$regisEmail = $_POST["regis-email"];
		$regisPassword = md5($_POST["regis-password"]);
		$regisPassword2 = md5($_POST["regis-confirm-password"]);
		if($regisPassword!=$regisPassword2){
			echo "กรุณากรอก password ให้สอดคล้องกัน";
		}
		else{
			if(ismember($regisEmail) == true){
				echo "ขออภัย email นี้มีอยู่แล้วในระบบ";
			}else{
				register($regisEmail,$regisPassword);
				$_SESSION['item']= array(
	                    "name" => array(),
	                    "price" => array(),
	                    "quantity" => array(),
	                    "picture" => array()      
	            );
	            header( "location: cart.php" );
		        exit(0);
			}
		}
	}

	function checkEmail($loginEmail,$loginPassword){
		include "config.php";
		$conn = new mysqli($host, $user, $password, $databaseName);
		$sql = "select * from members where email = '".$loginEmail."' and password ='".$loginPassword."'";
      	$result = $conn->query($sql);
      	$conn->close();
      	if($result->num_rows == 1){
      		while($row = $result->fetch_assoc()){
  		        $_SESSION["email"] = $row["email"];
  		        
  		    }
	      	return true;
      	}else return false;
	}
	function ismember($loginEmail){
		include "config.php";
		$conn = new mysqli($host, $user, $password, $databaseName);
		$sql = "select * from members where email = '".$loginEmail."'";
      	$result = $conn->query($sql);
      	$conn->close();
      	if($result->num_rows > 0){
      		while($row = $result->fetch_assoc()){
  		        $_SESSION["email"] = $row["email"];
  		        
  		    }
	      	return true;
      	}else return false;
	}
	function register($regisEmail,$regisPassword){
		include "config.php";
		$conn = new mysqli($host, $user, $password, $databaseName);
		$sql = "insert into members values('','".$regisEmail."','".$regisPassword."')";
      	$result = $conn->query($sql);
      	$conn->close();
      	$_SESSION["email"] = $regisEmail;
      	echo "ลงทะเบียนเรียบร้อย";
	}
?>
