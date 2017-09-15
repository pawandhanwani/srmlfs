<?php
function getalldata()
{
	$sql="SELECT * FROM ldata WHERE status=1";
	$records=mysql_query($sql);
	return $records;
}
mysql_connect('localhost','root','') or exit("Host Not Connected");
mysql_select_db('website') or exit("DB Not Found");
$users=getalldata();
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
<h1 align="center">Keep Calm , You will get your lost properties soon.. </h1>
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
		echo "Lost ID :  ".$row['idno']."<br>";
		echo "His/ Her Name : ".$row['fullname']."<br>";
		echo "Registration No. : ".$row['regno']."<br>";
		echo "Things Found : ".$row['things']."<br>";
		echo "Found At: ".$row['wh']."<br>";
		echo "His/ Her contact No. :  ".$row['contact']."<br>";
		echo "</div>";
		echo "<div style=\"clear:both;\" >";
		echo "</div>";
		echo "<hr/>";
		$total=$total+1;
	}
?>
</table
></body>
<footer style="background-color:blue; color:white"><br>
<p>&copy; Pawan Dhanwani RA1611008010234 , SRM University <br>
For Any grievencies <br>
write to us at pawandhanwani@gmail.com
 </p>
</footer>
</html>