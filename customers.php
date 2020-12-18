<?php 
session_start();
$con=mysqli_connect('localhost','id15714249_746736736598','ZOdgfcHg+<4f2*Zy','id15714249_342865863578236');
$name=$_POST['name'];
$q="select * from customer where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title>Transfer from <?php echo $name?></title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="customers.css">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		
	<style>
body{
	background-image: url("bg.jpg");
	background-repeat: no-repeat;
    background-size: 100%;
}
</style>
	
	
</head>
    <body>
	
	
  <div class="topnav">
  <a href="history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"><i class="fa fa-home"></i>HOME</a>
</div>
	
	<br><br><br>
    <div class="view">
       <table >
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Balance</th>
				
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<td><?php echo $name?></td>
				<td><?php echo $mail?></td>
				<td><?php echo $amount?></td>
			</tr>

        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer.php">
		<button class="btn">Transfer To</button>
	</a>
	</div>
	<br>
	<br>


       


    </body>
</html>