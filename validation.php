<?php
session_start();
$con=mysqli_connect('localhost','id15714249_746736736598','ZOdgfcHg+<4f2*Zy','id15714249_342865863578236');
$name1=$_SESSION['name'];
$q="select amount from customer where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['amount'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select amount from customer where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['amount'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customer set amount='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customer set amount='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into transaction(sender,receiver,amount)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    include 'details.php';
    $message="The transfer was carried out sucessfully";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   
    
}
else
{
	include 'details.php';
    $message="Insufficient balance to carry out this transaction";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
}
?>