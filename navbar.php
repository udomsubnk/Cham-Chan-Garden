<?php session_start(); ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          
            <a class="navbar-brand" href="index.php">Business Casual</a>
        </div>
       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                 <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="blog.php">products</a>
				</li>
				<li>
                    <a href="howtopay.php">how to pay</a>
                </li>
                <li>
				<a href="contact.php">Contact</a>
				</li>
                <?php 
                    if(isset($_SESSION["email"])) 
                        echo '<li><a href="cart.php"><img src="img/cart.png" width="30px;" alt="ตะกร้าสินค้า"></a></li>';
                    else {
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><a href="logout.php">Logout</a></li>';

                    }
                ?>
            </ul>
        </div>
    
    </div>
  
</nav>