<?php

$servername= "localhost";
$username="root";
$password="";
$db="store";

$con = new mysqli($servername,$username,$password,$db);


// Total Row Count

$query = "SELECT * FROM sold "; 
	 
if($result=mysqli_query($con,$query)){
	$rowcount=mysqli_num_rows($result);

	
}



?>


<!-- Total Amount Sold  -->
<?php 
$query = "SELECT SUM(amount) as r FROM sold "; 
	 
if($result=mysqli_query($con,$query)){
	$amount=mysqli_fetch_array($result);
	
	
}else{
	echo "nope";
}
?>

<!-- Total Discount Given -->

<?php 
$query = "SELECT SUM(DISCOUNT) as r FROM sold "; 
	 
if($result=mysqli_query($con,$query)){
	$discount=mysqli_fetch_array($result);
	
	
}else{
	echo "nope";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	




<div class="container" style="display:flex;justify-content: space-around;">
	<div class="totals">

	<h1> Total Users </h1>
	<h1> <?php echo $rowcount ?> </h1>
	</div>
	<div class="amount">
<h1> Total SOld Amount</h1>
<h1> <?php echo $amount[0] ?> </h1>

	</div>
	<div class="discount">
		<h1> Total Discount </h1>
	<h1> 	<?php echo $discount[0] ?> </h1>

	</div>

</div>
</body>
</html>


<?php include 'inventeries.php' ?>
