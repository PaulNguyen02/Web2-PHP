<?php
    require_once "./models/BaseModel.php";

    class Fixservice extends BaseModel {
        CONST TABLE = 'dichvu';
        CONST TABLE_ID = 'MADV';
        public function SearchService($searchstr) {
            $query = "SELECT * FROM ".self::TABLE." WHERE TENDV LIKE '%".$searchstr."%'";
            return $this->getAll($query);
        }
        public function getProductByID($id) {
            return $this->getByID(self::TABLE, self::TABLE_ID,$id);
        }
        public function insertService($data){
            $query = "INSERT INTO ".self::TABLE." (UID,TenDV,Gia)".
            "VALUES ('1','".$data[0]."', '".$data[1]."')";           
            return $this->insert($query);
        }
        public function deleteService($id) {
            $query = "Delete FROM ".self::TABLE." Where MADV=".$id;
            return $this->delete($query);
        }
        public function updateService($id, $data){
            $query = "UPDATE ".self::TABLE." SET TenDV = '".$data[0]."', GIA = '".$data[1]."' Where MADV=".$id;
            return $this->update($query);
        }
        public function getTotalServicePage($limit) {
            return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
        }
        public function servicePagination($limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." LIMIT $begin, $limit";
            return $this->getPagination($query);
        }
        public function getFixserviceRecord() {
            return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
        }
    }

?>