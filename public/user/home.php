<?php
include('../sessions.php');
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
		background-image url("/img/search-icon-red.png");
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

	
	</style>
  </head>
  

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Name</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
		 <form class="nav-item" action="product.php" method="GET">
		 <li class="nav-item">
            <input type="text" name="search" placeholder="Search using ISBN or Book name...">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
          
          </form>
		  </li>
		  		 <li class="nav-item">
          <ul class="nav pull-right">
            <li class=""></li>
           <!-- <li class="dropdown">
              <a href ="" class="nav-link js-scroll-trigger" data-toggle="dropdown">Wipro </a>
              <ul class="dropdown-menu">
                <li><a href="wase-books.php"> &nbsp; &nbsp;   WASE </a></li>
                <li><a href="wista-books.php"> &nbsp; &nbsp;  WISTA</a></li>
              </ul>
            </li> -->
          </ul>
		  </li>
          <!--  <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Wipro</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="product.php">Buy</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="selling.php">Sell</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Support</a>
            </li>
  			 <li class="nav-item">
          <ul class="nav pull-right">
            <li class=""></li>
            <li class="dropdown">
              <a href ="" class="nav-link js-scroll-trigger" data-toggle="dropdown">Account </a>
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
              <a class="nav-link js-scroll-trigger" href="../logout.php">logout</a>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Hello... <strong><?php echo $login_session;?>...! </strong> </div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="product.php">Click to Shop</a>
        </div>
      </div>
    </header>

    <!-- Shop -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Shop Zone</h2>
            <h3 class="section-subheading text-muted">Keep Exploring</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item" >
		  
            <a class="portfolio-link" data-toggle="modal" href="product.php" >
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="general"> 
            </a>
            <div class="portfolio-caption">
              <h4>General</h4>
              <p class="text-muted">need to give quotes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Novels</h4>
              <p class="text-muted">Need to give quotes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Biography</h4>
              <p class="text-muted">Need to give quotes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Technology</h4>
              <p class="text-muted">need to give quotes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Kids</h4>
              <p class="text-muted">need to give quotes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Book category</h4>
              <p class="text-muted">need to give quotes</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">need to type quotes</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2017</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Need to type some quotes</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact -->
    <section id="contact">
      <?php
	  include("contact.html");
	  ?>
    </section>

    <!-- Footer -->
    <footer>
      <?php
	  include("footer.html");
	  ?>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
