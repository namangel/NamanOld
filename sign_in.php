<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css\signup_both.css">
	<link type="text/css" rel="stylesheet" href="css\navbar.css">
	<title>Sign In</title>
</head>
<body>

<div class="grid-container">

	<div class="topnav">
		<div class="nop"> </div>
		<div class="top3">
            <center><a href="index.php"><img src="img/logo3.png" style="height:50px;width:135px; margin: 5px;"></a></center>
         </div>

	</div>

<div class="item2">
	<center>
	<img src="img/logo2.png" height="200">
</center>
Welcome to Naman
<hr style="align:center;size:10px;width:30%">
</div>

<div class="item3">
	Please select the role that describes you.
	<br>
	<button class="buttonst" onclick="location.href='login_st.php'">I'm An Entrepreneur</button>
	<br>
	<button class="buttoninv" onclick="location.href='login_inv.php'">I'm An Investor</button>
	<br>
	<br>
	<hr style="align:center;size:10px;width:30%">
</div>
</div>
<?php require "include/footer.php"?>
</body>
</html>