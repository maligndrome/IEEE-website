<?php
$q = $_REQUEST["q"];
$str = "images/members/".$q.".jpg";
$str2 =  "images/members/".$q.".png";
if(file_exists($str))
{
echo $str;
}
else if(file_exists($str2))
{
echo $str2;
}
else
echo '';
?>