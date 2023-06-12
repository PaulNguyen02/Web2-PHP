<?php
    require_once "./models/BaseModel.php";

    class Account extends BaseModel {
        CONST TABLE = 'users';
        CONST TABLE_ID = 'UID';
        public function getEmployee() {
            $query = "SELECT Hoten FROM ".self::TABLE." Where Quyen=1 or Quyen=2";
            return $this->getAll($query);
        }
        public function getAccountByID($id) {
            return $this->getByID(self::TABLE, self::TABLE_ID,$id);
        }
        public function insertAccount($data){
            $query = "INSERT INTO ".self::TABLE." (Hoten,Tennguoidung,Pass,SDT,Ngaysinh,Email,Gioitinh,Quyen)".
            "VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."','".$data[7]."')";           
            return $this->insert($query);
        }
        public function deleteAccount($id) {
            $query = "DELETE FROM ".self::TABLE." WHERE UID=".$id;
            return $this->delete($query);
        }
        public function getAccountRecord() {
            return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
        }
        public function updateAccount($id, $data){
            $query = "UPDATE ".self::TABLE." SET Hoten = '".$data[0]."', Pass = '".$data[1]."', SDT = '".$data[2]."', Ngaysinh = '".$data[3]."', 
            Email= '".$data[4]."', Gioitinh= '".$data[5]."', Quyen= '".$data[6]."' Where UID=".$id;
            return $this->update($query);
        }
        public function getTotalAccountPage($limit) {
            return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
        }
        public function accountPagination($limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." LIMIT $begin, $limit";
            return $this->getPagination($query);
        }

        
    }

?>