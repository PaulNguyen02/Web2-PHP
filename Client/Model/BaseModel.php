<?php 
    class BaseModel extends Config
    {
        protected $connect;
        function __construct()
        {
            $this->connect = $this->connect();
        }
        function showall($sql)
        {
            $productsets = array();
            $result = mysqli_query($this->connect, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
                array_push($productsets, $row);
            }
            return $productsets;
        }
        function searching($sql)
        {
            $productsets = array();
            $result = mysqli_query($this->connect, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
                array_push($productsets, $row);
            }
            return $productsets;
        }
        function detailofproduct($sql)
        {
            $result = mysqli_query($this->connect, $sql);
            return mysqli_fetch_assoc($result);           
        } 
        function Add($sql)
        {
            if (mysqli_query($this->connect, $sql)) {
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connect);
            }             
            mysqli_close($this->connect);
        }
        function Remove($sql)
        {
            if (mysqli_query($this->connect, $sql)) {
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connect);
            }             
            mysqli_close($this->connect);
        }
    }