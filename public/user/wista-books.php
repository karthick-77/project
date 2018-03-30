<?php
include("header.php");
?>

<html>
<head>
<title> Wista Books </title>
<style>
#semester{
	width:250px;
	padding:8px;
	
}
</style>
</head>
<body>
<br>
<section>
		  <form class="" action="#">
		    <label></label>
			<select size="1" class="" id ="semester" name="semester">
			<option value="0">Select the semester</option>
			<option value="1"> Semester 1</option>
			<option value="2">Semester 2 </option>
			<option value="3">Semester 3 </option>
			<option value="4">Semester 4</option>
			<option value="5"> Semester 5 </option>
			<option value="6"> Semester 6 </option>
			<option value="7"> Semester 7 </option>
			</select> 
		<button type="submit" id="submitButton" class="btn btn-primary">Search</button>
          </form>
</section>	  
<h4> Wista Semester books </h4>
<section>		 
<h4> Wista reference books</h4>
<!--
<!--
</section>
<section id="services">
	<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Wipro</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="wase-books.php">WASE</a></h4>
            <p class="text-muted">BITS PILANI</p>
          </div>
		  <div class="col-md-1">
            <span class="fa-stack fa-4x">
              <i class=""></i>
              <i class=""></i>
            </span>
            <h4 class="service-heading"></h4>
            <p class="text-muted"></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="wista-books.php">WiSTA</a></h4>
            <p class="text-muted">VIT</p>
          </div>
      
        </div>
      </div>

    </section>
      -->

<section id="contact">
<?php
include("contact.html");
?>
</section>
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


