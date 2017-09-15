<?php
$message="";
$m1="";
$m2="";
$imal=0;
function insertdata($f,$r,$t,$w,$c,$p,$pa)
{
	//$sql="INSERT INTO lostdata(fullname,regno,things,where,contact,password)
	//VALUES('$f','$r','$t','$w',$c,'$p')";
	
	$sql="INSERT INTO ldata(fullname,password,regno,things,contact,wh,path)
	VALUES('$f','$p','$r','$t','$c','$w','$pa')";
	
	
	//exit("Sorry ! " . $sql);
	
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
if(isset($_REQUEST['btnsubmit']))
{
	$fo=$_REQUEST['fullname'];
	$ro=$_REQUEST['regno'];
	$to=$_REQUEST['tf'];
	$wo=$_REQUEST['fw'];			
	$co=$_REQUEST['cn'];
	$pa=$_REQUEST['pa'];
	$filename=$_FILES['photo']['name'];
	$filetype=$_FILES['photo']['type'];
	$filesize=$_FILES['photo']['size'];
	$filelocation=$_FILES['photo']['tmp_name'];
	/*$name=md5(time()).".jpg";
	$path="images/$name";*/
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	if($filetype=='image/jpeg')
	{
		$name=md5(time()).".jpg";
		$path="images/$name";
		$imal=1;
	}
	else if($filetype=='image/png')
	{
		$name=md5(time()).".png";
		$path="images/$name";
		$imal=1;
	}
	if($imal==1)
	{
		if(move_uploaded_file($filelocation,$path))
		{
			$m1= "$filename is Uploaded Successfully";
			if(insertdata($fo,$ro,$to,$wo,$co,$pa,$path))
			{
				$m2= "  Data updated successfully";
			}
			else
			{
				$m2= "  Data updation failed";	
			}
		}
		else
		{
			$m1="$filename is Not Uploaded";
		}
	}
	else
	{
			$m1="$filename is Not a Valid Format";
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Tell It to us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<header style="background-color:blue; color:white">
<h1 align="center">Thanks Dear, You are doing a great Job. May God bless you </h1>
</header>
<body>
<h2 align="center"> Tell us everything about the thing(s) you have found it may help us to reach its perfect owner. </h2>

<div class="container">
	<hr/>

	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Full Name : </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Your Good name Please" required>
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Registration No: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="regno" id="regno" placeholder="Your Registration Number" required>
			</div>
		</div>
         <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Things Found: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="tf" id="tf" placeholder="Tell us what you have found" required>
			</div>
		</div>
         <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Found Where? : </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="fw" id="fw" placeholder="Help us know where it was found" required>
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Contact No. : </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="cn" id="cn" placeholder="Share your contact number with us ,Owner will contact you" required>
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Password. : </label>

		  <div class="col-sm-10">
				<input type="password" class="form-control" name="pa" id="pa" placeholder="You need to use this password in order to close the request when you will find the owner" required>
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Photo Here : </label>
		  <div class="col-sm-10">
				<input type="file" class="form-control" name="photo" id="photo" required>
			</div>
		</div>
		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="btnsubmit" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
<?php
echo $m1;
echo "<br>";
echo $m2
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
