<?php
$message="";
function updatedata($u,$p)
{
	$sql="UPDATE sdata SET stat=2 WHERE uid=$u AND password='$p' ";
	mysql_query($sql);
	$xyz=mysql_affected_rows();
	
	if($xyz>0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
mysql_connect('localhost','root','') or exit("Host Not Connected");
mysql_select_db('website') or exit("DB Not Found");
if(isset($_REQUEST['btnclose2']))
{
	$ud=$_REQUEST['udi'];
	$ps=$_REQUEST['pws'];
	if(updatedata($ud,$ps))
	{
		$message="Update Success<br> ";	
	}
	else
	{
		$message="Sorry Error";				
	}		
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Thanks a lot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<header style="background-color:blue; color:white">
<h1 align="center">Thanks you accomplished a great work</h1>
</header>
<body>
<div class="container">
	<hr/>

	<form class="form-horizontal" method="post">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">User Id: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="udi" id="udi" placeholder="Userid provided as per database" required="required">
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Password:</label>

		  <div class="col-sm-10">
				<input type="password" class="form-control" name="pws" id="pw" placeholder="Disable the post by password you entered " required="required">
			</div>
		</div>
		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="btnclose2" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>

<?php
echo $message;
$message="";
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