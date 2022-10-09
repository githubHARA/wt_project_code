<html>
<head>
<style>
body
{
	background-image:url("Amazing-Sunsets-beautiful-nature-24414915-700-433.jpg");
	font-size:40px;
	font-family:courier;
	color:white;
}
</style>
</head>
<center><body>
<?php
$name=$_POST['name'];
echo "NAME:".$name."<br>";
$district=$_POST['dis'];
echo "DISTRICT:".$district."<br>";
$address=$_POST['add'];
echo "ADDRESS:".$address."<br>";
$mob=$_POST['mo'];
echo "MOBILE NUMBER:".$mob."<br>";
echo "ORDERED_LISTS:"."<br>";
$i=0;
$arr=array();
foreach($_REQUEST['re'] as $value)
{
	$arr[$i]=$value;
	echo $arr[$i]."<br>";
	$i++;
}
$arr1=implode(",",$arr);
//print_r ($arr1."<br>";
$connection=mysqli_connect("localhost","root","","project");
/*if($connection)
{
	echo " connn"."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}
$query1="CREATE TABLE user(name VARCHAR(15),district varchar(15),address varchar(1000),ordered_items varchar(1000),mobile_number varchar(100));";
if(mysqli_query($connection,$query1))
{
	echo " table created"."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}*/
$query2="INSERT INTO user VALUES('$name','$district','$address','$arr1','$mob');";
if(mysqli_query($connection,$query2))
{
	echo "**data stored successfully.order delivered on 15th september**"."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}
/*$query2="DROP TABLE user;";
if(mysqli_query($connection,$query2))
{
	echo "deleted records"."<br>";
}
else
{
	echo "hiiii";
	echo "error:".mysqli_error($connection);
}*/
$txt="haindavi.txt";
$wr=fopen($txt,"w");
fwrite($wr,"NAME:");
fwrite($wr,$name."\n");
fwrite($wr,"DISTRICT:");
fwrite($wr,$district."\n");
fwrite($wr,"ADDRESS:");
fwrite($wr,$address."\n");
fwrite($wr,"ORDERED_ITEMS:"."\n");
$i=0;
$arr=array();
foreach($_REQUEST['re'] as $value)
{
	$arr[$i]=$value;
	$i++;
}
$arr1=implode(",",$arr);
fwrite($wr,$arr1."\n");
$mob=$_POST['mo'];
fwrite($wr,"MOBILE NUMBER:");
fwrite($wr,$mob."\n");
?>
<a download="haindavi.txt" href="haindavi.txt" style="color:red">CLICK TO DOWNLOAD THE ORDERED DETAILS</a>
</body></center>
</html>

