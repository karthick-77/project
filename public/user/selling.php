<?php
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <style>
#isbn{
	width:300px;
	padding:6px;
	}
</style>
  </head>

  <body>
  <br> 
  <section>
  	 <form class="" action="#" method="GET">
	 <label>  </label>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
	 <input type="text" id="isbn" name="isbn" placeholder="Please enter 13 digit ISBN of the book" value="">
	 <button type="submit" id="submitButton" class="btn btn-primary">Submit</button> <br>
   <?php 
   if(isset($_GET['isbn']))
   {
     $isbn = $_GET['isbn'];
       $link = mysqli_connect("localhost", "root", "", "test");
      $sql = "SELECT isbn,bname FROM products where isbn='$isbn'";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
             while ($row = mysqli_fetch_array($res)) {
            
            $isbn = $row['isbn'];
            $bname = $row['bname'];
            
                     }
       
        
    }
    else {
       $isbn = "No matching records are found";
    }
  }
  if ($isbn != "No matching records are found")
{
echo strip_tags("<br><label> Selling Book Details </label><br>
<label> Book ISBN : </label>".$isbn."<br>");
echo ("<br>");
echo strip_tags("<pre> <br><label> Book Name : </label></pre>".$bname) ;


}
else
{
  echo strip_tags("<br><label> Selling Book Details </label>");
  echo("<br>");
  echo strip_tags("<label> Book ISBN : </label>".$isbn);
echo("<br>");
echo(" Please enter valid ISBN");
}
}

?>
 </form>
		 
        

	</section>
    <!-- Services --
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
<!-- Contact -->
    <section id="contact">
<?php
include("contact.html");
?>
    </section>
	<section id="about">
<?php
include("about.html");
?>
</section>
	<footer>
<?php
include("footer.html");
?>
</footer>
</body>
	    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script></body>
</html>	

	