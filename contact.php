<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="The official website of IEEE NITK Student Branch">
<meta name="keywords" content="IEEE,NITK,society,club,KREC,Mangalore,Surathkal,NIT">
<meta name="author" content="Yuvraj Singh Bawa">
<title>IEEE NITK- Contact</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'navbar.php'; ?>
<div class="container" style="padding-top:100px;">
<div class="row">

<div class="col-lg-12">

<font style="font-family:Cambria; color:#18539b; font-size:30px;"><b>Contact Us</b></font>
<hr>
</div>
</div>
<div class="row">

<div class="col-lg-6">
<font style="font-size:18px">

<table class="contactform-table">
<form class="contact-form" name="submit" action="submit.php" method="post">
<td class="label-form" style="padding-top:10px">
<b>Name</b></font>
</td>
<td style="padding-top:10px" class="ip-field">
<input type="text" name="name" id="name" class="cf-ip" placeholder="Mention your full name" required>
</td>
</tr>
<tr>
<td class="label-form">
<b>Mobile</b></font>
</td>
<td class="ip-field">
<input type="number" name="mobile" id="mobileno" class="cf-ip" placeholder="Your 10 digit mobile no." onChange="checkmob()" required>
</td>
</tr>
<tr>
<td class="label-form">
<b>Email</b></font>
</td>
<td class="ip-field">
<input type="email" name="email" class="cf-ip" placeholder="Provide a valid email id" required>
</td>
</tr>
<tr>
<td class="label-form">
<b>Message</b>
</td>
<td class="ip-field">
<textarea name="message" class="cf-ip" placeholder="Type your message..."></textarea>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Submit" >
</td>
</form>
</table>

</font>

</div>
<div class="col-lg-6">
<font style="font-size:35px; color:#18539b;">
Connect with us!
<br />
<a href="https://www.facebook.com/IEEENITK"><i class="fa fa-facebook" style=" color:#18539b;"></i></a>
<a href="https://twitter.com/IEEE_NITK"><i class="fa fa-twitter" style=" color:#18539b;"></i></a>
<a href="https://www.linkedin.com/in/ieeenitk"><i class="fa fa-linkedin-square" style=" color:#18539b;"></i></a>
</font><br>
<br>
To contact a member, go to the <b><a href="team.php">team page</a></b>.
</div>
</div><!--row-->
<div class="row">
<div class="col-lg-12 text-center" style="padding-top:20px;">
<hr>
&copy;IEEE NITK, 2015 | <a href="nitk.ac.in">Visit NITK</a>
</div>
</div><!--container-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function checkmob()
{
	var checknum=document.getElementById("mobileno").value;
	var reg_no = /^\d{10}$/;  
  if((checknum.match(reg_no)) )
  {
	   return true;
	}
	
	{
	document.getElementById("mobileno").value="";	
	alert('Please enter your 10 digit mobile number!');
	return true;
	}
}
</script>
<script src="js/main.js"></script>
</body>
</html>
