<?php
include("header.php");
?>
<html>
<head>
</head>
<body>

</section>
 <!-- Account-->
    <section class="bg-light" id="account">
      <div class="container">
        <!-- <div class="row">
          <div class="col-lg-12 text-center">
            <!-- <h2 class="section-heading text-uppercase">My Account</h2> -->
            <!-- <h3 class="section-subheading text-muted"></h3> --
          </div>
        </div> -->
        <div class="row text-center">
          <div class="col-md-3">
           <a href="./product.php">  <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
            </span> </a>
            <!-- <h4 class="service-heading" ><a href="../product.php">My Orders</a></h4>
            <p class="text-muted"></p> -->
          </div>
		  <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="../product.php">My Cart</a></h4>
            <p class="text-muted"></p>
          </div>

          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-heart	 fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="../product.php">My Wishlist</a></h4>
            <p class="text-muted"></p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="account.php">My Account details</a></h4>
            <p class="text-muted"> </p>
          </div>
        </div>
      </div>
    </section>
<section id="about">
<?php
include("about.html");
?>
</section>
<!-- Contact -->
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