<?php
    class Config
    {
        const server = 'localhost';        //127.0.0
        const user='root';               
        const pass='';
        const database='motoserv';        
        function connect()
        {
            try
            {
                $connect = mysqli_connect(self::server, self::user, self::pass, self::database);
                return $connect;
            }
            catch(Exception $e) 
            {
                die($e);
            }
        }
         
    }
