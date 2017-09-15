<?php
include('security.php');
$m1=$_SESSION['id'];
$m2=$_SESSION['type'];
$id=$_SESSION['id'];
$type=$_SESSION['type'];
$message="";
function updatephoto($p,$id)
{
	$sql="UPDATE studentlist SET path='$p' WHERE id='$id' ";
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
if(isset($_REQUEST['btnupload']))
{
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
		$path="images/$id";
		$imal=1;
	}
	else if($filetype=='image/png')
	{
		$name=md5(time()).".png";
		$path="images/$id";
		$imal=1;
	}
	if($imal==1)
	{
		if(move_uploaded_file($filelocation,$path))
		{
			$m1= "$filename is Uploaded Successfully";
			if(updatephoto($path,$id))
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
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<nav class=" navbar-inverse">
<a href="subscribe.php" style="backbground-color:black; color:white;">Subscribe&nbsp;&nbsp;&nbsp;</a>|
<a href="notify.php" style="backbground-color:black; color:white;">Notifications &nbsp;&nbsp;&nbsp;</a>|
<a href="sendmessage.php" style="backbground-color:black; color:white;">Send Message&nbsp;&nbsp;&nbsp;</a>|
<a href="cps.php" style="backbground-color:black; color:white;">Change Password &nbsp;&nbsp;&nbsp;</a>|
<a href="up.php" style="backbground-color:black; color:white;">Change Photo &nbsp;&nbsp;&nbsp;</a>|
<a href="#" style="backbground-color:black; color:white;">Logout &nbsp;&nbsp;&nbsp;</a>|
<a href="welcome.php" style="backbground-color:black; color:white;"><?php echo "ID:".$id; ?></a>
</nav>

<body>
<form method="POST" enctype="multipart/form-data" align="center">
<input type="file" name="photo" class="btn-sucess">
<input type="submit" name="btnupload" value="Update now">
</form>
</body>
</html>