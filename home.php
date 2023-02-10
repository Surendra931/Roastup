<?php
session_start();
if($_SESSION['mail']==''|| $_SESSION['log']==false)
	header("Location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ROASTUP-HOME</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="home.php" class="navbar-brand"><span>ROASTUP</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                       
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
		        <a href="form.php" class="nav-item nav-link">Cart</a>
			 <a href="ordered_list.php" class="nav-item nav-link">Orders Details</a>
			 <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>

                </div>
		
            </div>
		<?php
			echo "<br><a href=''class='nav-item nav-link '>".$_SESSION['name']."</a>";
		?>

        </div>
	 <div class="page-header mb-0"></div>
		<div style="float:right; ">
		<?php
			echo "<a href=''class='nav-item nav-link '>".$_SESSION['name']."</a>";
		?>
		</div>
		
	
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/slider-01.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            
                            
                            <div class="carousel-btn">
                            </div>
                        </div>
                    </div>
                    <!--div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/slider-02.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>FooD<span>Is</span>Energy...</h1>
                            <p><strong> NOTHING BRINGS PEOPLE TOGETHER LIKE GOOD FOOD😋️ </strong></p>
                            <div class="carousel-btn">
                            </div>
                        </div>
                    </div-->
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/slider-03.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Fastest Order <span>Delivery</span></h1>
                            <p><strong>DISCOVER GREAT PLACES TO EAT 🍴️🍜️ AROUND YOU...</strong></p>
                            <div class="carousel-btn"></div>
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
                    <p>Copyright &copy; <a href="#">RoastUP</a>, All Right Reserved.</p>
                </div>
            </div>
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
