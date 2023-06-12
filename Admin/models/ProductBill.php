<?php
    require_once "./models/BaseModel.php";

    class ProductBill extends BaseModel {
        CONST TABLE = 'hoadon';
        CONST TABLE1 = 'cthdsp';
        CONST TABLE_ID = 'MAHD';
        public function getCustomer() {
            $query = "SELECT TENKH FROM ".self::TABLE." GROUP BY TENKH ";
            return $this->getAll($query);
        }
        public function searchProduct($searchstr, $limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." , ".self::TABLE1." WHERE (".self::TABLE.".MAHD = ".self::TABLE1.".MAHD ) AND hoadon.TENNV LIKE '%".$searchstr."%' OR hoadon.TENKH LIKE '%".$searchstr."%' LIMIT ".$begin." , ".$limit;
            return $this->getAll($query);
        }
        public function getProductBillByID($id) {
            return $this->getByID(self::TABLE, self::TABLE_ID,$id);
        }
        public function insertProductBill($time,$employee,$customer,$total){
            $query = "INSERT INTO ".self::TABLE." (UID,Ngayxuat,TenKH,TenNV,Tongtien)".
            "VALUES (2,'".$time."', '".$customer."', '".$employee."', '".$total."')";      
            // print_r($query);
            return $this->insert($query);
            /*foreach($data as $row )
            {
                $query1 = "INSERT INTO ".self::TABLE1." (MAHD,MASP,TenSP,SL,Gia)".
                "VALUES (1,'".$row["masp"]."', '".$row["tensp"]."', '".$row["sl"]."', '".$row["gia"]."')";           
                $this->insert($query1);
                $update = "UPDATE ".self::TABLE1." SET MAHD = ( SELECT MAHD FROM ".self::TABLE." WHERE ".self::TABLE1.".MAHD = ".self::TABLE.".MAHD)";
                $this->update($update);
            }*/
        }

        public function getLatestProductBill(){

            $query = "SELECT MAHD FROM ".self::TABLE." ORDER BY Ngayxuat DESC LIMIT 1 ";
            return $this->getAll($query);
        }

        public function createDetails($MAHD, $MASP, $TENSP, $SL, $Gia)
        {
            $query = "INSERT INTO cthdsp".self::TABLE." (MAHD, MASP, TENSP, SL, Gia)".
            "VALUES ('".$MAHD."','".$MASP."', '".$TENSP."', '".$SL."', '".$Gia."')";     
            //$query = "INSERT INTO cthdsp (MAHD, MASP, TENSP, SL, Gia) VALUES" . "({$MAHD}, {$MASP}, {$TENSP}, {$SL}, {$Gia}";
            return $this->insert($query);
        }   
        
        public function deleteProductBill($id) {
            return $this->delete(self::TABLE, self::TABLE_ID, $id);
        }
        public function updateProductBill($id, $TENKH,$TENNV){
            $query = " UPDATE ".self::TABLE." SET TENKH = '".$TENKH."', TENNV = '".$TENNV."' WHERE MAHD = '".$id."'";
            // print_r($query);
            return $this->update($query);
        }
       
        public function resetProductBillID() {
            return $this->resetIncrement(self::TABLE, self::TABLE_ID);
        }
        public function getProductBillRecord() {
            return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
        }
        public function getTotalProductBillPage($limit) {
            return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
        }
        public function productBillPagination($limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." , ".self::TABLE1." WHERE (".self::TABLE.".MAHD = ".self::TABLE1.".MAHD ) LIMIT ".$begin." , ".$limit;
            return $this->getPagination($query);
        }
        public function productBillSearch($condition) {
            return $this->search(self::TABLE,$condition);
        }
    }

?>