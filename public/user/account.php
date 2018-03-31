<?php
include("header.php");
echo "account";
?>
<?php 
      $link = mysqli_connect("localhost", "root", "", "test");
      $sql = "SELECT firstname,lastname,mobile,email,address,city FROM userreg where user_id='$login_session'";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
             while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $address = $row['address'];
            $city = $row['city'];
                     }
       
        
    }
    else {
        echo "No matching records are found.";
    }
}
?>
<html>
<head>
</head>
<body>

</section>
 <!-- Account-->
    <section class="bg-light" id="account">
      <div class="container">
      <label> User Name : </label> <?php echo $login_session;?> <br>
      <label> first Name : </label> <?php echo $firstname;?><br>
      <label> last Name : </label> <?php echo $lastname;?><br>
      <label> mobile : </label> <?php echo $mobile;?><br>
      <label> Email : </label> <?php echo $email;?><br>
      <label> Address : </label> <?php echo $address;?><br>
      <label> city : </label> <?php echo $city;?><br>
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