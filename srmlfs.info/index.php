<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<header style="background-color:blue; color:white">
<h1>Welcome to SRM's Lost , Found and Sell website </h1>
<p>Our aim is to help SRMites to retrieve there things which are lost and sell and buy things in an easy way </p>
</header>
<body>
<div class="row">
<h1 align="center"> Our Services are free and it will always be.</h1><br>
<br>
<br>

	<div class="col-sm-3">
    <p> Hey Have You Found Something and want to help the victim  ??</p><br>
    <form method="POST" action="tellus.php">
    <input type="submit" name="btnfound" value="Found Something" class="btn btn-primary">
    </form>
    </div>
	<div class="col-sm-3">
    <p> Hey Have You Lost Something precious and want to get it back ?? </p><br>

    <form method="POST" action="data.php">
    <input type="submit" name="btnlost" value="Lost Something" class="btn btn-primary">
    </form>
    </div>
	<div class="col-sm-3">
    <p> Hey Have do you have somethings which is useless for you and might be useful to others ?? <strong> Sell it here </strong> </p>
    <form method="POST" action="fillform.php">
    <input type="submit" name="btnsell" value="Sell Something" class="btn btn-primary">
    </form>
    </div>
    <div class="col-sm-3">
    <p> Hey Have do you want to buy somethings we have lots of seller with us </p><br>

    <form method="POST" action="thedata.php">
    <input type="submit" name="btnbuy" value="Buy Something" class="btn btn-primary">
    </form>
    </div>
</div><br><br>
<br>
<hr/>
<div class="row">
	<div class="col-sm-3">
    <p> Found the owner of some things ? Help us know please , <strong> May You win a reward. </strong></p><br>
    <form method="POST" action="thanks.php">
    <input type="submit" name="btntell" value="Tell Us" class="btn btn-primary">
    </form>
    </div>
    <div class="col-sm-3">
    <p> Sold Your things , tell us here and help us improve our database.</p><br>
    <form method="POST" action="thank.php">
    <input type="submit" name="btnsth" value="Sold things!" class="btn btn-primary">
    </form>
    </div>
	<div class="col-sm-3">
    <p> You found your lost property ? Write and tell your experience to the world  </p><br>

    <form method="POST" action="experience.php">
    <input type="submit" name="btnshare" value="Share Experience" class="btn btn-primary">
    </form>
    </div>
	<div class="col-sm-3">
    <p> See the Stories of people who have got back their new things with help of our website <br><br>
</p>
    <form method="POST" action="stories.php">
    <input type="submit" name="btnsee" value="people's stories" class="btn btn-primary">
    </form>
    </div>
</div>
<br>
<br>

</body><br>
<br>
<header style="background-color:blue; color:white"><br>
<p>&copy; Pawan Dhanwani RA1611008010234 , SRM University <br>
For Any grievencies contact at
+919087443329 or <br>
write to us at pawandhanwani@gmail.com
 </p>
</header>
</html>