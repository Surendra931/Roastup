<?php

session_start();
if($_SESSION['mail']!=''&& $_SESSION['log']!=false)
{
	$mail=$_SESSION['mail'];
	$id=$_POST['id'];
	$qty=$_POST['qty'];
	$con=new mysqli("localhost","root","","roastup");
	if(!$con)
	{
		echo "There is error while connection";
	}
	$sele="SELECT `userid`, `id`, `qty` FROM `temp` where id='$id' and userid ='$mail'";
	$ques=mysqli_query($con,$sele);
	if(mysqli_num_rows($ques)!=0)
	{
		echo "in if";
		$data=mysqli_fetch_assoc($ques);
		$tqty=$data['qty'];
		$qty=$qty+$tqty;
		$upd="UPDATE `temp` SET `qty`='$qty' WHERE `id`='$id' and userid ='$mail' ";
		$que=mysqli_query($con,$upd);
		echo "hi";
		if(!$que)
		{
			echo "Error in updating";
		}	
	}
	else
	{
		
		$ins="INSERT INTO `temp`(`userid`, `id`, `qty`) VALUES ('$mail','$id',$qty)";
		
		$que=mysqli_query($con,$ins);
		
	}
	header("Location:menu.php");		
}
else
	header("Location:login.php");
?>
