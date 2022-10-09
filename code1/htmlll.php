<!DOCTYPE html>
<html>
<body style="background-color:yellow;color:red;text-align:center;font-size:50px">
<h1>SNACKS RECIPES MENU</h1>
<?php
include "procon.php";
/*$name=$_POST["uname"];
$rup=$_POST["rup"];
$query="CREATE database project1;";
if(mysqli_query($connection,$query))
{
	echo "database created"."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}
$query1="CREATE TABLE snack(name VARCHAR(15),amount INT);";
if(mysqli_query($connection,$query1))
{
	echo " snack table created"."<br>";
}
else
{
	echo "hiiii";
	echo "error:".mysqli_error($connection);
}
$query2="INSERT INTO snack VALUES('$name','$rup');";
if(mysqli_query($connection,$query2))
{
	echo "record inserted"."<br>";
}
else
{
	echo "hiiii";
	echo "error:".mysqli_error($connection);
}*/
$query3="SELECT * FROM snack;";
$check=mysqli_query($connection,$query3);
if(mysqli_num_rows($check))
{
	while($row=mysqli_fetch_assoc($check))
		echo "*".$row['name']." ==>".$row['amount']."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}

?>
</body>
</html>
