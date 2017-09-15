<?php
function getall()
{
	$sql="SELECT * FROM sdata WHERE stat=1";
	$records=mysql_query($sql);
	return $records;
}
mysql_connect('localhost','root','') or exit("Host Not Connected");
mysql_select_db('website') or exit("DB Not Found");
$users=getall();
$total=0;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="file:///C|/xampp/htdocs/sql/css/bootstrap.min.css"/>
	<script src="file:///C|/xampp/htdocs/sql/js/jquery.min.js"></script>
	<script src="file:///C|/xampp/htdocs/sql/js/bootstrap.min.js"></script>

</head>
<header style="background-color:blue; color:white">
<h1 align="center">Bingo, carry on find things useful for you at best price. </h1>
</header>
<body>
<?php
	while($row=mysql_fetch_array($users))
	{
		echo "<div>";
		echo "<div style=\"float:right;\" >";
		$path=$row['path'];
		echo "<img src=\"$path\" height=\"200\" align=\"right\"><br/>";
		echo"</div>";
		echo "<div style=\"float:left;\" >";
		echo " Selling ID:".$row['uid']."<br>";
		echo " His/Her Name:".$row['fullname']."<br>";
		echo "Registration No.:".$row['regno']."<br>";
		echo "Things On sale:  ".$row['things']."<br> ";
		echo "At Price:".$row['price']."<br>";
		echo "His/Her contact No.:  ".$row['contact']."<br>";
		echo "</div>";
		echo "<div style=\"clear:both;\" >";
		echo "</div>";
		echo "<hr/>";
	}
?>
</body>
<div style="clear both;">
<footer style="background-color:blue; color:white"><br>
<p>&copy; Pawan Dhanwani RA1611008010234 , SRM University <br>
For Any grievencies <br>
write to us at pawandhanwani@gmail.com
 </p>
</footer>
</div>
</html>