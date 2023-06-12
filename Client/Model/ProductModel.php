<?php
    class ProductModel extends BaseModel 
    {
        const TABLE_NAME = 'sanpham';
        function show()
        {
            $sql = "SELECT * FROM ". self::TABLE_NAME;
            return $this->showall($sql);
        }
        function showbycategory($categorystr)
        {
            $sql = "SELECT * FROM ". self::TABLE_NAME . " WHERE LOAISP='".$categorystr."'";
            return $this->showall($sql);
        }
        function showbybrand($brandstr)
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE Thuonghieu IN (".$brandstr.")";
            return $this->showall($sql);
        }
        function showbycountry($countrystr)
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE Xuatxu='".$countrystr."'";
            return $this->showall($sql);
        }
        function showallcountry()
        {
            $sql = "SELECT Xuatxu FROM ".self::TABLE_NAME." GROUP BY Xuatxu";
            return $this->showall($sql);
        }
        function showallbrand()
        {
            $sql = "SELECT Thuonghieu FROM ".self::TABLE_NAME." GROUP BY Thuonghieu";
            return $this->showall($sql);
        }
        function search($searchstr)
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE TenSP LIKE '%".$searchstr."%' OR LOAISP LIKE '%".$searchstr."%' OR Thuonghieu LIKE '%".$searchstr."%' OR Xuatxu LIKE '%".$searchstr."%'";
            return $this->searching($sql);
        }
        function detail($id)
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE MASP='".$id."'";
            return $this->detailofproduct($sql);
        }
        function ascending()
        {
            $sql = "SELECT * FROM ". self::TABLE_NAME . " ORDER BY GIA ASC";
            return $this->showall($sql);
        }
        function descending()
        {
            $sql = "SELECT * FROM ". self::TABLE_NAME . " ORDER BY GIA DESC";
            return $this->showall($sql);
        }
    }