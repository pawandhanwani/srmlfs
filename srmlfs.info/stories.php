<?php
function seestories()
{
	$sql="SELECT * FROM stories";
	$records=mysql_query($sql);
	return $records;
}
mysql_connect('localhost','root','') or exit("Host Not Connected");
mysql_select_db('website') or exit("DB Not Found");
$users=seestories();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>sell it up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<header style="background-color:blue; color:white">
<h1 align="center">See how people got influenced through our website. </h1>
</header>
<body>
<?php
while($row=mysql_fetch_array($users))
	{
		echo $row['name'];
		echo "<br>";
		echo $row['story'];
		echo "<br>";
		echo "<hr>";
		echo "<br>";
	}
?>
</body>
<footer style="background-color:blue; color:white"><br>
<p>&copy; Pawan Dhanwani RA1611008010234 , SRM University <br>
For Any grievencies contact at
+919087443329 or <br>
write to us at pawandhanwani@gmail.com
 </p>
</footer>
</html>