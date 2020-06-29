<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up|Craft Bazaar</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel = "icon" href ="images/icon.png" type = "image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
     <link rel = "icon" href ="icon.png" type = "image/x-icon">

</head>
<body style="background-color:#E6E6FA">

<?php include 'navigationmenu.php' ?>

<br>
<form name="reg" action="execute.php" onsubmit="return validateForm()" method="post">
<center><u><h4>Sign Up</h4></u></center>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1"><div align="left" id="tb-name">First&nbsp;Name:</div></td>
<td width="171"><input type="text" name="fname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Last&nbsp;Name:</div></td>
<td><input type="text" name="lname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email:</div></td>
<td><input type="text" id="tb-box" name="address" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<a href="login.php"><center>Already have Account? Login here</center></a>
<center><div id="st"><input name="submit" type="submit" value="Submit" id="st-btn"/></div></center><br>
</form>
</div>
</div>





<footer>
	<p class="p-3 bg-dark text-white text-center">@RahulKalyankarProductions</p>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>