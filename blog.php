<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products Cham-Chan Garden</title>

    <script type="text/javascript" src="js/jquery.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <div class="brand">Cham-Chan Garden</div>
    <div class="address-bar">Chanthaburi</div>

    <?php include "navbar.php"; ?>

    <div class="container">


        <div class="row">
            <div class="box">
                <div class="alert alert-success alert-dismissable fade in hide" id="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>สำเร็จ!</strong> เพิ่มสินค้าของคุณลงในตะกร้าเรียบร้อย
                </div>
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">our
                        <strong>OTOP</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/2.jpg" alt="">
                    <h3>Kuay Hom Tod
                        <small>Banana chips</small>
						<h6>This thing of Chantaburi 
						by Banana Garden. With Fried
						will try it to get high.</h6>
						<h4>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#buy" onclick="buy('Kuay Hom Tod',80)">Buy</button>
                        <h4>
						<p>80฿</p>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/1.jpg" alt="">
                    <h3>Durain Tod
                        <small>Durain chips</small>
						<h6>This thing of Chantaburi 
						by Durain Selected. With Fried
						will be fun.</h6>
						<h4>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#buy" onclick="buy('Durain Tod',100)">Buy</button>
                        <h4>
						<p>100฿</p>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/3.jpg" width="300px" height="300px" alt="">
                    <h3>Tua Cracker
                        <small>Whole grain Cracker</small>					
						<h6>This thing of Chantaburi 
						Homemade cracker.</h6>						
						<h4>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#buy" onclick="buy('Tua Cracker',60)">Buy</button>
                        <h4>
						<p>60฿</p>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright </p>
                </div>
            </div>
        </div>
    </footer>

<div id="buy" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="name"></h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
          <label for="sel1">คุณต้องการซื้อเป็นจำนวณเท่าไหร่?:</label>
          <select class="form-control" id="quantity">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
          <p>รวมเป็นเงิน : <span id="total"></span> บาท</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" onclick="addToCart()" data-dismiss="modal" >เพิ่มลงในตะกร้า</button>
      </div>
    </div>

  </div>
</div>
    <!-- jQuery -->
    <script>
        var productName = ""
        var productPrice = ""
        function buy(name,price){
            $('#name').text(name)
            $('#quantity').val("1")
            $('#total').text(price)
            productName = name;
            productPrice = price;
        }
        function addToCart(){
            url=window.location.href;
            url=url.split('/')
            url.pop()
            url=url.join("/")
            addtocartURL = url+'/addtocart.php'
            data = {
                name:productName,
                price:productPrice+"",
                quantity:$('#quantity').val() 
            }
            console.log(data);
            $.post(addtocartURL, data, function(data, textStatus, xhr) {
                if(data=="success"){
                    $('#alert').toggleClass('hide')
                    setTimeout(function(){ $('#alert').toggleClass('hide') }, 4000);
                }else {
                    alert("กรุณาเข้าสู่ระบบก่อน")
                    window.location = url+"/login.php"
                }
            });
        }
        $(document).ready(function() {
            $('#quantity').change(function(){
                total = $('#quantity').val()
                $('#total').text(productPrice*total)
            })
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
