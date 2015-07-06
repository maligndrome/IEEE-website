<html>
<head><title></title></head>
<body>
<?php
$update_string = file_get_contents('latest.txt');
$updates = explode("<separate>", $update_string);
$length = count($updates);
if(isset($_POST['authcode']))
{
if($_POST['authcode']=='convener234')
{
$file = fopen("latest.txt","w");
$str = $_POST['update'].'<separate>'.$updates[0].'<separate>'.$updates[1];
fwrite($file,$str);
fclose($file);
}
else 
echo 'Don\'t try snooping around! :P';
}
else
echo 'Don\'t try snooping around! :P';
?>
</body>
</html>