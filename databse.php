<?php
    function OpenCon()
     {
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = 'Laur3nMom$Bl0g';
     $db = 'comments';
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
       
    ?>