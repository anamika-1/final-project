<?php
  include("common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MobileStore</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
          body{
              padding-top:50px;
            }

            #banner-image{
	height:600px;
	padding-top:75px;
	padding-bottom:50px;
	margin-bottom:20px;
	text-align:center;
	color:#0b1163;
	background-size:cover;
}
</style>
    </head>
    <body>
      <?php
        include ("head.php");
      ?>    
      <div id="content"><br>
              <div id="banner-image" style="background-image:url(36.jpg)">
                <div class="container">
                    <center>
                        <div id="banner-content">
                            <h1><b style="color:#060e50">Shop with Mobile Store</b></h1>
                            <h2><b style="color:#060e50"><p>Get Flat 30% off on All Brands</p></b></h2>
                            <h3><p><b> What are you waiting for. <br> Offer valid for only 5 days </b></p></h3>
                            <br>
                            <br>
                            <a href="products.php" class="btn btn-warning btn-lg active">Visit Now</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
            <br>
                <div class="container text-center">
                    <div class="panel panel-default">
                        <div class="panel-heading color">
                            <h3 style="color:#4f9b12e8"><b>SHOP SMARTPHONE OF VARIOUS BRANDS </b></h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="1.jpg" alt="OPPO A9 2020" >
                                        <div class="caption">
                                            <h3><b>OPPO A9 2020</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="3.jpg" alt="VIVO Z1X" >
                                        <div class="caption">
                                            <h3><b>VIVO Z1X</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="6.jpg" alt="Realme 5 Pro" >
                                        <div class="caption">
                                            <h3><b>Realme 5 Pro</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="8.jpg" alt="Samsumg Galaxy A50" >
                                        <div class="caption">
                                            <h3><b>Samsumg Galaxy</b> </h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>    
                </div>
     
               <div class="container text-center">
                 <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:#4f9b12e8"><b>GET ALL NECSSARY ACCESSORIES</b></h3>
                        </div>
                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="10.jpg" alt="Aspire Back Cover" >
                                        <div class="caption"><br><br>
                                            <h3><b>Aspire Back Cover</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="11.jpg" alt="VAKIBO Back Cover" >
                                        <div class="caption"><br><br>
                                            <h3><b>VAKIBO Cover</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="13.jpg" alt="Infinity JPL Headset" >
                                        <div class="caption"><br>
                                            <h3><b> JPL Headset</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="16.jpg" alt="boAt Rockerz 501" >
                                        <div class="caption"><br><br><br><br><br>
                                            <h3><b>boAt Rockerz 501</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
<?php include ("footer.php");  ?>
      
</body>
</html>