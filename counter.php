How to Add Counter.php:
$touch counter.php
$Add counter.php
$gedit counter.php
// inside text editor paste the script below

<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo "$count" ;
echo " hits" ;
echo "\n" ;

// opens countlog.txt to change new hit number
$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);

?>

// for more info visit http://justintadlock.com/web-design/counter
