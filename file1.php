<?php
    $myfile=fopen("/var/www/html/newfile.txt","r") or die("Unable to open file");
    while(!feof($myfile)){
        echo fgets($myfile);
    }

?>