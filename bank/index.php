<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel = "icon" href ="img/logo.png" type = "image/x-icon">
    <title>SPARK BANK</title>

  </head>
  
  <body>
  <?php
  include 'header.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1"style="background: rgb(0 123 255 / 25%)">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1 style="color:#007bff">SPARK BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2" width= 30%>
              </div>
            </div>
		    <div>
			     <marquee scrollamount= 10 > 
				 <h1 style="font-family: 'ManicMondayRegular';font-weight: normal;font-style: normal;font-size: 50px;color: #ff2c5b;">
				 Save! Strive! Settle!</h1>
				 </marquee>
			</div>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act" >
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="customer.php"><button>Customers</button></a>
                  </div>
                  
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
	  
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <?php
  include 'footer.php';
  ?>
  </body>
</html>