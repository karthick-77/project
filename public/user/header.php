<?php
include ("../sessions.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Book Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
	<style>
	input[type=text]
	{
		width: 300px;
		box-sizing: border-box;
		border:1px solid #ccc;
		border-radius:2px;
		font-size:14px;
		background-color:white;
		background-image url("searchicon-png");
		background-position:10px 10px;
		background-repeat: no-repeat;
		padding: 12px  20px 12px 40px;
		-webkit-transition: width 0.4s ease-in-out;
		transition: width 0.4s ease-in-out;
	}
	input[type=text]:focus
	{
		width:300px;
	}
	#mainNav{
		background-color: #212529;
		padding:8px;
	}
	</style>
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="home.php">Name</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
		  <li class="nav-item">
      <form class="nav-item" action="product.php" method="GET">
            <input type="text" name="search" placeholder="Search using ISBN or Book name..." >&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
          </form>
		  </li>		
		<!---  <li class="nav-item">
          <ul class="nav pull-right">
            <li class=""></li>
            <li class="dropdown">
              <a href ="" class="nav-link js-scroll-trigger" data-toggle="dropdown">Wipro </a>
              <ul class="dropdown-menu">
                <li><a href="wase-books.php"> &nbsp; &nbsp;WASE (BITS) </a></li>
                <li><a href="wista-books.php"> &nbsp; &nbsp;WISTA (VIT)</a></li>
              </ul>
            </li>
          </ul>
		  </li>-->
		  <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Wipro</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="product.php">Buy</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="selling.php">Sell</a>
            </li>   
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Support</a>
            </li>
			<!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>-->
			<li class="nav-item">
          <ul class="nav pull-right">
            <li class=""></li>
            <li class="dropdown">
              <a href ="" class="nav-link js-scroll-trigger " data-toggle="dropdown"><?php echo $login_session;?> </a>
              <ul class="dropdown-menu">
              <li><a href="account.php"> &nbsp; <span><i class="fa fa-user "></i>&nbsp;&nbsp;My Account </span> </a></li>
              <li><a href="#"> &nbsp; <span><i class="fa fa-shopping-cart "></i>&nbsp;&nbsp;My cart </span></li>
              <li><a href="#"> &nbsp; <span><i class="fa fa-heart "></i>&nbsp;&nbsp;My wishlist </span></a></li>
      
              <li><a href="#">&nbsp; <span><i class="fa fa-briefcase "></i>&nbsp;&nbsp;My order </span></a></li>
      <li><a href="../logout.php"> &nbsp; <span><i class="fa fa-lock "></i>&nbsp;&nbsp;logout </span></a></li>
            </ul>
            </li>
          </ul>
		  </li>
			<!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="account.php"><?php// echo $login_session;?></a>
            </li> -->
			<!--<li class="nav-item">
			
              <a class="nav-link js-scroll-trigger" href="../logout.php">logout</a>
            </li>-->
			
          </ul>
        </div>
      </div>
    </nav>
    <!--<header class="">
      <div class="">
        <div class="">
          <br>
		  <br>
		  </br>
		  <br>
        </div>
      </div>
    </header>-->

</body>
</html>