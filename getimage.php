<?php
$q = $_REQUEST["q"];
$str = "images/members/".$q.".jpg";
$str2 =  "images/members/".$q.".png";
$str3 = "images/members/".$q.".jpeg";
$str4 = "images/members/".$q.".JPG";
if(file_exists($str))
{
echo $str;
}
else if(file_exists($str2))
{
echo $str2;
}
else if(file_exists($str3))
{
echo $str3;
}
else if(file_exists($str4))
{
echo $str4;
}
else
echo '';
?>