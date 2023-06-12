<?php
    try
    {
        $server="localhost";        //127.0.0
        $user="root";               
        $pass="";
        $database="MotoSer";
        $conn = mysqli_connect($server, $user, $pass, $database);
    }
    catch(Exception $e) 
    {
        die($e);
    }
?>