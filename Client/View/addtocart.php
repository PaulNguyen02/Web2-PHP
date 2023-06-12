<?php
    include_once "..\Data\config.php";
    session_start();
    if(isset($_SESSION['username']) && isset($_GET['id']) && isset($_GET['name']) && isset($_GET['num']) && isset($_GET['price']) && isset($_GET['pic']))
    {
        $username=$_SESSION['username'];
        $masp = (int)$_GET['id'];
        $name = urldecode($_GET['name']);
        $num = (int)$_GET['num'];
        $price = (float)$_GET['price'];
        $sql = "INSERT INTO Giohang (TENNGUOIDUNG, MASP, TENSP, SOLUONG, GIA, HINH) VALUES ('".$username."',".$masp.",'".$name."',".$num.",".$price.",'".$_GET['pic']."')";
        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost/motoserv/Pages/listproduct.php?view=all");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
    }
?>