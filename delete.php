<?php
session_start();
if($_SESSION['mail']==''|| $_SESSION['log']==false)
	header("Location:login.php");
?>
<?php
	session_start();
	$con=new mysqli("localhost","root","","roastup");
	session_start();
	$mail=$_SESSION['mail'];
	$sel="select * from temp where userid='$mail'";
	$query=mysqli_query($con,$sel);
	$str="";
	$totalcost=0;
	$cost=0;
	while($data=mysqli_fetch_assoc($query))
	{
		$id=$data['id'];
		$sele="select * from menu where id='$id'";
		$qu=mysqli_query($con,$sele);
		while($da=mysqli_fetch_assoc($qu))
		{	
			$name=$da['name'];
			$cost=$da['cost']*$data['qty'];
			$totalcost=$totalcost+$cost;
			$str=$str.$name."-".$data['qty']."\n";
		}	
	}
	$insert="INSERT INTO `admin`(`user`, `item_details`, `totalcost`) VALUES ('$mail','$str',$totalcost)";

	$qq=mysqli_query($con,$insert);
	
	$del="delete from temp where userid='$mail'";
	$que=mysqli_query($con,$del);
	
	header("Location:ordered_list.php");
	
	
	
?>
