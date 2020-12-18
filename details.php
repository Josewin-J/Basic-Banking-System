<?php 
session_start();
$con=mysqli_connect('localhost','id15714249_746736736598','ZOdgfcHg+<4f2*Zy','id15714249_342865863578236');
$q="select * from customer ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>Customers</title>
   <link rel="stylesheet" href="details.css">
  
    <link rel="stylesheet" href="header.css" >
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
body{
	background-image: url("bg.jpg") ;
	background-repeat: no-repeat;
    background-size: 100%;
	
	
}
</style>
   
</head>


<body >


  <div class="topnav">
 
  <a href="history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"> <i class="fa fa-home"></i>HOME</a>
</div>

	<h1 style="color:teal;text-shadow: 2px 2px white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customers</h1>
    <table >


		<thead>
			<th>Sr No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
				<th>View</th>
			
		</thead>
		
		
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Aajay">Select</button>
				
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Aakash">Select</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Ajay">Select</button>
				</form>
			</td>
		</tr>
     <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Barathi">Select</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Gokulakrishnan">Select</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Hari">Select</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Harish">Select</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Josewin">Select</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Koushik">Select</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customers.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Vignesh">Select</button>
				</form>
			</td>
		</tr> 
		</tbody>
	</table><br><br>

</body>
</html>
