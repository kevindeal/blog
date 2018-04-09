<?php
$link = mysql_connect('db54386_kdeal', 'root', 'xr!4}uX4}iE');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>