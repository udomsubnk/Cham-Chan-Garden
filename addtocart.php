<?php 
	//addtocart
	session_start();
      if(isset($_POST['name'])){
        $productName = $_POST['name'];
        $productPrice = $_POST['price'];
        $productQuantity = $_POST['quantity'];

        if(isset($_SESSION['email']))
	        echo "success";
	    else echo "unsuccess";
      }
 ?>