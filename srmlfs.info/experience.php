<?php
$message="";
function addstory($name,$story)
{
	$sql="INSERT INTO stories(name,story)
	VALUES('$name','$story')";
	if(mysql_query($sql))
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
if(isset($_REQUEST['btnsubmit2']))
{
	$a=$_REQUEST['nam'];
	$b=$_REQUEST['sto'];
	if(addstory($a,$b))
	{
		$message="Thanks For Sharing Your Experience";		
	}
	else
	{
		$message="Sorry Error Story not Saved";				
	}		
}
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
<h1 align="center">Tell the world that how our website influenced your life. </h1>
</header>
<body>
<div class="container">
	<hr/>

	<form class="form-horizontal" method="POST">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Full Name : </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="nam" id="sto" placeholder="Your Good name Please">
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Your Story: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="sto" id="sto" placeholder="Your Story Here">
			</div>
		</div>
        </div>
		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="btnsubmit2" class="btn btn-primary">
			</div>
		</div><br>
<br>
<br>
<br>
<br>

	</form>
</div>
<?php
echo $message;
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