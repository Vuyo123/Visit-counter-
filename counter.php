How to create counter.php:
first touch the file:
$touch counter.php

Add the file:
$git add counter.php

Edit the file:
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

?>\

Commit all the changes
$git commit -m "all files"

// for more info visit http://justintadlock.com/web-design/counter
