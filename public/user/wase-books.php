<?php
include("header.php");
?>

<html>
<head>
<title> Wase Books </title>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
   
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<style>
#semester{
	width:200px;
	padding:5px;
	
}
</style>
</head>
<body>
<div>
		  <form class="container" action="semester.php" method="get">
		    <label></label>
			<select size="1" class="" id ="semester" name="semester">
			<option value="0">Select the semester</option>
			<option value="1"> Semester I</option>
			<option value="2">Semester II </option>
			<option value="3">Semester III </option>
			<option value="4">Semester IV</option>
			<option value="5"> Semester V </option>
			<option value="6"> Semester VI </option>
			<option value="7"> Semester VII </option>
			</select> 
		<button type="submit" id="submitButton" class="btn btn-info">Search</button>
		<br>
		<br>
		<h4> Wase Prescribed <?php $semester=""; echo $semester;?>books </h4>
          </form>
		  
	<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="img/images/5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Buy</span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#">Bookname</a></h3>
						<p>Book details</p>
						<span class="reducedfrom">Rs 66.00</span>
						<span class="actual">Rs 12.00</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="single.php">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="img/images/5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Buy</span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#">Bookname</a></h3>
						<p>Book details</p>
						<span class="reducedfrom">Rs 66.00</span>
						<span class="actual">Rs 12.00</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="single.php">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>  
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="img/images/5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Buy</span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#">Bookname</a></h3>
						<p>Book details</p>
						<span class="reducedfrom">Rs 66.00</span>
						<span class="actual">Rs 12.00</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="single.php">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
</div>
	 
<h4> Wase reference books</h4>
<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="img/images/5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Buy</span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#">Bookname</a></h3>
						<p>Book details</p>
						<span class="reducedfrom">Rs 66.00</span>
						<span class="actual">Rs 12.00</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="single.php">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="img/images/5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Buy</span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#">Bookname</a></h3>
						<p>Book details</p>
						<span class="reducedfrom">Rs 66.00</span>
						<span class="actual">Rs 12.00</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="single.php">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>  
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="img/images/5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Buy</span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#">Bookname</a></h3>
						<p>Book details</p>
						<span class="reducedfrom">Rs 66.00</span>
						<span class="actual">Rs 12.00</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="single.php">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>



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


