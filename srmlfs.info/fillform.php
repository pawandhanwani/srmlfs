<?php
$message="";
$m1="";
function selldata($fn,$rn,$tn,$pn,$cn,$wn,$patn)
{
	$sql="INSERT INTO sdata(fullname,regno,things,price,contact,password,path)
	VALUES('$fn','$rn','$tn','$pn','$cn','$wn','$patn')";
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
if(isset($_REQUEST['btnsubmit1']))
{
	$fp=$_REQUEST['fname'];
	$rp=$_REQUEST['regn'];
	$tp=$_REQUEST['sw'];
	$pp=$_REQUEST['pr'];			
	$cp=$_REQUEST['cno'];
	$wp=$_REQUEST['pwd'];
	$filename=$_FILES['photo']['name'];
	$filetype=$_FILES['photo']['type'];
	$filesize=$_FILES['photo']['size'];
	$filelocation=$_FILES['photo']['tmp_name'];
	$name=md5(time()).".jpg";
	$path="images/$name";
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
			$m1="$filename is Upload Success";
			if(selldata($fp,$rp,$tp,$pp,$cp,$wp,$path))
			{
			$message="Save Successs <br> Once you sell your things please tell us using 	             <strong>			        found the seller
						</strong> section on our website. <br> so
						that we can remove it from the list";		
				}
			else
			{	
				$message="Sorry Error";				
			}
		}
		else
		{
			$m1="$filename is Not Upload";
		}
	}
	else
	{
			$m1= "$filename is Not a Valid Format";
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
<h1 align="center">Sell Freely , We don't charge nor want any comission </h1>
</header>
<body>
<div class="container">
	<hr/>

	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Full Name : </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="fname" id="fname" placeholder="Your Good name Please" required>
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Registration No: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="regn" id="regn" placeholder="Your Registration Number" required>
			</div>
		</div>
         <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Sell What ?: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="sw" id="sw" placeholder="Tell us what you want to sell" required>
			</div>
		</div>
         <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Price?: </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="pr" id="pr" placeholder="At what price??" required>
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Contact No. : </label>

		  <div class="col-sm-10">
				<input type="text" class="form-control" name="cno" id="cno" placeholder="A customer may call you on this no.">
			</div>
		</div>
         <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Password: </label>

		  <div class="col-sm-10">
				<input type="password" class="form-control" name="pwd" id="pwd" placeholder="You will use this password later on to tell us that you have found a buyer.">
			</div>
		</div>
        <div class="form-group">
		  <label class="control-label col-sm-2" for="firstname">Photo Here : </label>
		  <div class="col-sm-10">
				<input type="file" class="form-control" name="photo" id="photo" required>
			</div>
		</div>
        <h6 align="right"> Only jpeg format supported <br></h6>
		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="btnsubmit1" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
<?php
echo $m1."<br>";
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