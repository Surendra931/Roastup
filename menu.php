<?php
session_start();
if($_SESSION['mail']==''|| $_SESSION['log']==false)
	header("Location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ROASTUP</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <script type="text/javascript">
        function order_path()
	{
	 	window.location.href="order.php"; 
	}
	function p()
	{
			var q=document.getElementById("quantity");
			if(q.value)
			alert('Added to cart');	
	}		
        </script>
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="home.php" class="navbar-brand"><span>ROASTUP</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
                        
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
			 <a href="form.php" class="nav-item nav-link">Cart</a>
			<a href="ordered_list.php" class="nav-item nav-link">Orders Details</a>
			<a href="logout.php" class="nav-item nav-link">Logout</a>
			
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header mb-0"></div>
		<div style="float:right; ">
		<?php
			echo "<a href=''class='nav-item nav-link '>".$_SESSION['name']."</a>";
		?>
		</div>
        
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <h2> OUR Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">VEG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">NON-VEG</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/veg-1.jpg" alt="Image">
                                        </div>
					<form action="adding.php" method="POST">
						<h3><span>VEG Fried Rice....</span> <strong>₹199.00</strong></h3>
						<input type='hidden' value='101' name='id'>
						
						<input type=number name= "qty" id="quantity"  id="qt" min=1 	required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>Veg Fried Rice is an Asian Made By Stir Frying Cooked Rice<br></p>
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/veg-2.jpg" alt="Image">
                                        </div>
					<form action="adding.php" method="POST">
						<h3><span>VEG Manchuria....</span> <strong>₹159.00</strong></h3>
						<input type='hidden' value='102' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>Veg Fried Rice is an Asian Made By Stir Frying Cooked Rice<br></p>
						
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/veg-3.jpeg" alt="Image">
                                        </div>    
	     				<form action="adding.php" method="POST">
						<h3><span>BABY Corn Rice</span> <strong>₹199.00</strong></h3>
						<input type='hidden' value='103' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>Veg Fried Rice is an Asian Made By Stir Frying Cooked Rice<br></p>	
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/veg-4.jpeg" alt="Image">
                                        </div> 
					<form action="adding.php" method="POST">
						<h3><span>Mushroom Biryani</span> <strong>₹199.00</strong></h3>
						<input type='hidden' value='104' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>Veg Fried Rice is an Asian Made By Stir Frying Cooked Rice<br></p>	
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/veg-5.jpeg" alt="Image">
                                        </div>
					<form action="adding.php" method="POST">
						<h3><span>Paneer Biryani</span> <strong>₹229.00</strong></h3>
						<input type='hidden' value='105' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>Veg Fried Rice is an Asian Made By Stir Frying Cooked Rice<br></p>	
					</form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/nonveg-1.jpeg" alt="Image">
                                        </div>
					<form action="adding.php" method="POST">
						<h3><span>CHICKEN Roast BIRYANI</span><strong>₹249.00</strong></h3>
						<input type='hidden' value='201' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>chicken roasted biryani<br></p>	
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/nonveg-2.jpeg" alt="Image">
                                        </div>
					<form action="adding.php" method="POST">
						<h3><span>CHICKEN DUM BIRYANI</span><strong>₹229.00</strong></h3>
						<input type='hidden' value='202' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>chicken <> biryani<br></p>	
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/nonveg-3.jpeg" alt="Image">
                                        </div>
					<form action="adding.php" method="POST">
						<h3><span>MUTTON DUM BIRYANI</span><strong>₹399.00</strong></h3>
						<input type='hidden' value='203' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()">
						<p>chicken <> biryani<br></p>	
					</form>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/nonveg-4.jpeg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                         <form action="adding.php" method="POST">
						<h3><span>CHICKEN LOLLIPOP</span><strong>₹249.00</strong></h3>
						<input type='hidden' value='204' name='id'>
						<input type=number name= "qty" id="quantity" min=1 required>
						<input type=submit name="Submit" value="ADD" onclick="p()" >
						<p>chicken 🍴️ biryani<br></p>	
					</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                     <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Srinivasa Center,Nandyal</p>
                                    <p><i class="fa fa-phone-alt"></i>+919618095243</p>
                                    <p><i class="fa fa-envelope"></i>admin@roastup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Suggestions</h2>
                            <p>
                            </p>
                            <div class="form">
				<form action="" method="POST">
		                        <input class="form-control" placeholder="Enter your suggestion here.." name="suggestion">
		                        <button class="btn custom-btn" name="sugSubmit">Submit</button>
					<?php
						if(isset($_POST['sugSubmit']))
						{
							$suggestion=$_POST['suggestion'];
							$mail=$_SESSION['mail'];
							$con=new mysqli("localhost","root","","roastup");
							$sel="INSERT INTO `suggestions`(`user`, `suggestion`) VALUES ('$mail','$suggestion')";
							$que=mysqli_query($con,$sel);
							if($que)
								echo "Your suggestion is recieved. Thank You 😊️";
						}
					?>
				</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">ROASTUP</a>, All Right Reserved.</p></div></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
