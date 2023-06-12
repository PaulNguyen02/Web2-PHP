<?php
    require_once "./models/BaseModel.php";

    class ServiceBill extends BaseModel {
        CONST TABLE = 'hoadon';
        CONST TABLE1 = 'cthddv';
        CONST TABLE_ID = 'MAHD';
        public function getCustomer() {
            $query = "SELECT TENKH FROM ".self::TABLE." GROUP BY TENKH ";
            return $this->getAll($query);
        }
        public function searchService($searchstr, $limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." , ".self::TABLE1." WHERE (".self::TABLE.".MAHD = ".self::TABLE1.".MAHD ) AND hoadon.TENNV LIKE '%".$searchstr."%' OR hoadon.TENKH LIKE '%".$searchstr."%' LIMIT ".$begin." , ".$limit;
            return $this->getAll($query);
        }
        public function getServiceBillByID($id) {
            return $this->getByID(self::TABLE, self::TABLE_ID,$id);
        }
        public function insertServiceBill($time,$employee,$customer,$total){
            $query = "INSERT INTO ".self::TABLE." (UID,Ngayxuat,TenKH,TenNV,Tongtien)".
            "VALUES (2,'".$time."', '".$customer."', '".$employee."', '".$total."')";      
            // print_r($query);
            return $this->insert($query);
        }

        public function getLatestServiceBill(){

            $query = "SELECT MAHD FROM ".self::TABLE." ORDER BY Ngayxuat DESC LIMIT 1 ";
            return $this->getAll($query);
        }

        public function createDetails($MAHD, $MADV, $TENDV, $SL, $Gia)
        {
            $query = "INSERT INTO cthddv(MAHD, MADV, TENDV, SL, Gia) VALUES" . "({$MAHD}, {$MADV}, N'{$TENDV}, {$SL}, {$Gia}";
            return $this->insert($query);
        }   
        public function deleteServiceBill($id) {
            return $this->delete(self::TABLE, self::TABLE_ID, $id);
        }
        public function updateServiceBill($id, $TENKH,$TENNV){
            $query = " UPDATE ".self::TABLE." SET TENKH = '".$TENKH."', TENNV = '".$TENNV."' WHERE MAHD = '".$id."'";
            // print_r($query);
            return $this->update($query);
        }
       
        public function resetServiceBillID() {
            return $this->resetIncrement(self::TABLE, self::TABLE_ID);
        }
        public function getServiceBillRecord() {
            return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
        }
        public function getTotalServiceBillPage($limit) {
            return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
        }
        public function serviceBillPagination($limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." , ".self::TABLE1." WHERE (".self::TABLE.".MAHD = ".self::TABLE1.".MAHD ) LIMIT ".$begin." , ".$limit;
            return $this->getPagination($query);
        }
        public function serviceBillSearch($condition) {
            return $this->search(self::TABLE,$condition);
        }
    }

?>