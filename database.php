<?php
    function OpenCon()
     {
     $dbhost = 'localhost';
     $dbuser = 'feed_user';
     $dbpass = 'Laur3nMom$Bl0g';
     $db = 'comments';
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
     
     return $conn;
     }  
?>