<?php
    class CartModel extends BaseModel
    {
        const TABLE_NAME = 'giohang';
        function search($username)
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE tennguoidung='".$username."'";
            return $this->searching($sql);
        }
        function addtocart($cart)
        {
            $sql = "INSERT INTO ".self::TABLE_NAME." (TENNGUOIDUNG, MASP, TENSP, SOLUONG, GIA, HINH) VALUES ('".$cart[0]."',".$cart[1].",'".$cart[2]."',".$cart[3].",".$cart[4].",'".$cart[5]."')";
            return $this->Add($sql);
        }
        function removefromcart($id)
        {
            $sql = "DELETE FROM ".self::TABLE_NAME." WHERE MASP='".$id."'";
            return $this->Remove($sql);
        }
    }