<?php
$update_string = file_get_contents('latest.txt');
$updates = explode("<separate>", $update_string);
if(count($updates)!=0)
{
	$i=0;
echo '<ul>';
foreach ($updates as $update)
{
	if($i<3)
	{
	echo '<li>'.$update;
	$i++;
	}
	else
	break;
}

echo '</ul>';
}
?>