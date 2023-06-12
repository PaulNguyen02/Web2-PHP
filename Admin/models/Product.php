<?php
    require_once "./models/BaseModel.php";

    class Product extends BaseModel {
        CONST TABLE = 'sanpham';
        CONST TABLE_ID = 'MASP';
        public function SearchProduct($searchstr) {
            $query = "SELECT MASP,TENSP,GIA FROM ".self::TABLE." WHERE TenSP LIKE '%".$searchstr."%' OR LOAISP LIKE '%".$searchstr."%' OR Thuonghieu LIKE '%".$searchstr."%' OR Xuatxu LIKE '%".$searchstr."%'";
            return $this->getAll($query);
        }
        public function getProductByID($id) {
            return $this->getByID(self::TABLE, self::TABLE_ID,$id);
        }
        public function insertProduct($data){
            $query = "INSERT INTO ".self::TABLE." (UID,TenSP,SOLUONG,GIA,LOAISP,Thuonghieu,Xuatxu,Hinh)".
            "VALUES (2,'".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."')";           
            return $this->insert($query);
        }
        public function deleteProduct($id) {
            $query = "Delete FROM ".self::TABLE." Where MASP=".$id;
            return $this->delete($query);
        }
        public function updateProduct($id, $data){
            $query = "UPDATE ".self::TABLE." SET TenSP = '".$data[0]."', GIA = '".$data[1]."', LOAISP = '".$data[2]."', Thuonghieu = '".$data[3]."', 
            Xuatxu= '".$data[4]."', Hinh= '".$data[5]."' Where MASP=".$id;
            return $this->update($query);
        }
        public function getCategory(){
            $query = "SELECT LOAISP FROM ".self::TABLE." GROUP BY LOAISP";
            return $this->getAll($query);
        }
        public function getBrand(){
            $query = "SELECT Thuonghieu FROM ".self::TABLE." GROUP BY Thuonghieu";
            return $this->getAll($query);
        }
        public function getNation(){
            $query = "SELECT Xuatxu FROM ".self::TABLE." GROUP BY Xuatxu";
            return $this->getAll($query);
        }
        public function resetProductID() {
            return $this->resetIncrement(self::TABLE,self::TABLE_ID);
        }
        public function getProductRecord() {
            return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
        }
        public function getTotalProductPage($limit) {
            return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
        }
        public function productPagination($limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." LIMIT $begin, $limit";
            return $this->getPagination($query);
        }//
    }

?>