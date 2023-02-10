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
                        <a href="menu.php" class="nav-item nav-link ">Menu</a>
                       
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
			 <a href="form.php" class="nav-item nav-link active">Cart</a>
			<a href="ordered_list.php" class="nav-item nav-link">Orders Details</a>
			<a href="logout.php" class="nav-item nav-link">Logout</a>
			
			
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header mb-0">
        </div>
		
		<div style="float:right; ">
		<?php
			echo "<a href=''class='nav-item nav-link '>".$_SESSION['name']."</a>";
		?>
		</div>

		<br>
				<?php
				session_start();
				$mail=$_SESSION['mail'];
				$con=new mysqli("localhost","root","","roastup");
				if(!$con)
				{
					echo "There is an error while connection";
				}
				$sel="select * from temp where userid='$mail'";
				$que=mysqli_query($con,$sel);
				$totalcost=0;
				if(mysqli_num_rows($que)!=0)
				{
					echo "<br>"."<h5 align='center'><strong>Items In The Cart</strong></h5>";
				echo "<table border='1' align='center'>
				<tr>
				<th>Item Name</th>
				<th>Quantity</th>
				<th>Cost</th>
				</tr>";
				while($data=mysqli_fetch_assoc($que))
				{
					$id=$data['id'];
					$sele="select * from menu where id=$id";
					$ques=mysqli_query($con,$sele);
					$da=mysqli_fetch_assoc($ques);
					$name=$da['name'];
					$price=$da['cost'];
					$cost=$price*$data['qty'];
					$totalcost=$totalcost+$cost;
					echo "<tr>
					<td>".$name."</td>
					<td>".$data['qty']."</td>
					<td>".$cost."</td>
					<tr>";
					
				}
				echo "</table>";
				
				
				echo "</div>
	
			<p align='center'>
				Total Amount: $totalcost<br>
				<a href='order.php'><button >Confirm Order</button></a></p>";
				}
				else
				{
					echo "<br><br><strong><font color=red><center>No items in the Cart</center></font></strong>";
				}
				?>
				
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
