<?php 
	//addtocart
	session_start();
      if(isset($_POST['name'])){
        $productName = $_POST['name'];
        $productPrice = $_POST['price'];
        $productQuantity = $_POST['quantity'];
        $productPicture = $_POST['picture'];
        
        array_push($_SESSION['item']['name'],$productName);
        array_push($_SESSION['item']['price'],$productPrice);
        array_push($_SESSION['item']['quantity'],$productQuantity);
        array_push($_SESSION['item']['picture'],$productPicture);

        if(isset($_SESSION['email']))
	        echo "success";
	    else echo "unsuccess";
      }
 ?>