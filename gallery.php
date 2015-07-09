<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IEEE NITK- Fun</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'navbar.php'; ?>
<div class="container" style="padding-top:100px;">
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">
<div class="wie-content">
<font style="font-family:Cambria; color:#18539b; font-size:40px;"><b>Fun @ IEEE NITK</b></font>
<hr>

</font>
<div class="carousel slide text-center" id="screen-carousel-2" data-ride="carousel" data-interval="false">
<div id="scaleteam">
<div class="carousel-inner">
<?php
for($x = 0; $x <= 6; $x++) {
if($x==0)
echo '<div class="item active"><img src="images/gallery/'.++$x.'.JPG" /></div>';
else
echo '<div class="item"><img src="images/gallery/'.++$x.'.JPG" /></div>';
}
?>
<!--
<a href="#screen-carousel-1" class="left carousel-control" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span></a>
<a href="#screen-carousel-1" class="right carousel-control" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span></a>-->

</div></div>
</div><!--carousel--->
</div>
</div>
<div class="col-lg-1">
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
$(document).ready(function() {
    $('#screen-carousel-2').carousel({
      interval: 3000
    });
});
</script>
<script src="js/main.js"></script>
</body>
</html>
