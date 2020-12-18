<?php
session_start();
$con=mysqli_connect('localhost','id15714249_746736736598','ZOdgfcHg+<4f2*Zy','id15714249_342865863578236');
$name1=$_SESSION['name'];
$q="select name from customer where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>

    <link rel="stylesheet" href="header.css">
	
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
		
	<style>
body{
	background-image: url(bg.jpg);
    background-repeat: no-repeat;
	background-size: 100%;
	text-align:center
	}

</style>
</head>
<body>


  <div class="topnav">

  <a href="history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"><i class="fa fa-home"></i>HOME</a>
</div>

	<center>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color:teal;">Money Transfer</h2>
			<form action="validation.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:15pt;color:palevioletred;">
						<label for="sender" align="left">Transfer to:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer" style="font-size:15pt;color:palevioletred;" > Amount:</label> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" min="0" required></td>
		</tr>
       <tr>
			<td >
				<div class="button">
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
				<button  type="submit" value="Credit" style="background-color:white;color:teal; font-size:18px;height:40px; width:100px;">Send</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>

</center>
</body>
</html>
