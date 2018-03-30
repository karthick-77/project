<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Online book shop</title>
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
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
</head>
<body>
	<div class="header">
	 <?php
  include("./header.php");
  ?>
		</div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="img/images/005.jpg" />
									<img class="etalage_source_image" src="img/images/005.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/4.jpg" />
								<img class="etalage_source_image" src="images/4.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/5.jpg" />
								<img class="etalage_source_image" src="images/5.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/6.jpg" />
								<img class="etalage_source_image" src="images/6.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/7.jpg" />
								<img class="etalage_source_image" src="images/7.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/8.jpg" />
								<img class="etalage_source_image" src="images/8.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/9.jpg" />
								<img class="etalage_source_image" src="images/9.jpg" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3>Book Name  </h3>
				        	<p class="m_10"><pre>Book deatils ************************ 
							
							end</pre></p>
				        	
				        	
							<div class="btn_form">
							   <form>
								 <input type="submit" value="buy now" title="">
							  </form>
							</div>
							<ul class="add-to-links">
    			              <li><img src="img/images/wish.png" alt=""><a href="#">Add to wishlist</a></li>
    			            </ul>
							
				        </div>
				        <div class="clear"> </div>
				</div>
				<div class="col-md-3">
				  <div class="box-info-product">
					<p class="price2">$130.25</p>
					       <ul class="prosuct-qty">
								<span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
							<button type="submit" name="Submit" class="exclusive">
							   <span>Add to cart</span>
							</button>
				   </div>
			   </div>
			</div>		
			<div class="desc">
			   	<h4>Description</h4>
			   	<p>Book description need to type</p>
			</div>
			<h4 class="m_11">Related Products in the same Category</h4>
			<div class="row">
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
				</div>
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
				</div>
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
				</div>
			</div>	
	     </div>
	   </div>
	  </div>
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
    <script src="js/agency.min.js"></script></body>
</body>	
</html>