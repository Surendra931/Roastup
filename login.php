

<DOCTYPE html>
<html>
<head>
<title> </title>
<link href="css/log.css" rel="stylesheet">
<script src="js/log.js" type="text/javascript"></script>
</head>
<body>
	<?php
	session_start();
	$_SESSION["mail"]="";
	$_SESSION['name']="";
	$_SESSION["log"]=false;
	if(isset($_POST['log']))
	{
		$conn=new mysqli("localhost","root","","roastup");
		if(!$conn)
		{
			echo "Not Connected";
		}
		else
		{
			$email=$_POST['email'];
			$passwd=$_POST['passwd'];
			if($email=='admin@roastup' && $passwd=='roastup')
			{
				$_SESSION['mail']='admin';
				$_SESSION['log']=true;
				header("Location:admin.php");
			}
			else{	
				$query="select * from  customers where email='$email' and password='$passwd'";	
				$result=mysqli_query($conn,$query);
				$data=mysqli_num_rows($result);
				if($data)
				{
					$da=mysqli_fetch_assoc($result);
					$_SESSION['mail']=$email;
					$_SESSION['name']=$da['fullname'];
					$_SESSION['log']=true;
					header("Location:home.php");
						
				}
				else
					echo "<script>alert('Invalid Credentials')</script>";
			}			
		}
	}
?>
	 <?php  	
	session_start();
	if(isset($_POST['reg'])){
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$passwd=$_POST['passwd'];
	$conn=new mysqli("localhost","root","","roastup");
	$check="select * from customers where email='$email'";
	$select=mysqli_query($conn,$check);
	if(mysqli_num_rows($select)==0)
	{
	$query="INSERT INTO `customers`(`fullname`, `email`, `mobile`, `password`) VALUES ('$fullname','$email',$mobile,'$passwd')";
	mysqli_query($conn,$query);
	echo "<h4><center><font color=green>Successfully Registered<br>Login with your credentials</></fontcenter></h4>";		
	}
	else
	{		
		echo"<script>
		alert('Email Already Exist. Login with your credentials')</script>";		
	}				
    }
?> 
 <!---BUTTON --->
<div class="container">
	
      <div class="box-1">
          <div class="content-holder">
              <img src="img/logo.jpg">
              <button class="button-1" onclick="signup()">Sign up</button>
              <button class="button-2" onclick="login()">Login</button>
          </div>
      </div>
      <!---login --->
      <div class="box-2">
          <div class="login-form-container">
		<?php
	session_start();
	$_SESSION['id']="";
	$_SESSION['login']=false;	
	?>
	      <form action="" method="POST" autocomplete="off">
              <h1>Login Form</h1>
              <input type="email" placeholder="Email id" class="input-field" name="email" required >
              <br><br>
              <input type="password" placeholder="Password" class="input-field" name="passwd" required>
              <br><br>
              <input class="login-button" type="submit" value="LOGIN" name="log">
	</form>	
   </div> 
      <!---login --->   
      <div class="signup-form-container">
	  <form action="" method="POST"  autocomplete="off">
          <h1>REGISTER</h1>
          <input type="text" placeholder="FullName" class="input-field" name="fullname" required>
          <br><br>
	  <input type="tel" placeholder="+91xxxxxxxxx" class="input-field" name="mobile" required>
          <br><br>
          <input type="email" placeholder="Email" class="input-field" name="email" required>
          <br><br>
          <input type="password" placeholder="Password" class="input-field" name="passwd" required>
          <br><br>
          <input class="signup-button" type="submit" value="REGISTER" name="reg" required>
      </form>
      </div>    
      </div>
</body>
</html>
