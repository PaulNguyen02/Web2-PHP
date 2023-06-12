<?php
class Job extends BaseModel {
    CONST TABLE = 'job';
    CONST TABLE_ID = 'MACV';
    public function getAllJob() {
        return $this->getAll(self::TABLE);
    }
    public function getJobByID($id) {
        return $this->getByID(self::TABLE, self::TABLE_ID,$id);
    }
    public function insertJob($data){
        $query = "INSERT INTO ".self::TABLE." (UID,TenCV,MOTA,LUONG,Hinh) ".
        "VALUES (1,'".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."')";           
        return $this->insert($query);
    }
    public function deleteJob($id) {
        $query = "Delete FROM ".self::TABLE." Where MACV=".$id;
        return $this->delete($query);
    }
    public function resetJob(){
        return $this->resetIncrement(self::TABLE,self::TABLE_ID);
    }
    public function getJobRecord() {
        return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
    }
    public function getTotalJobPage($limit) {
        return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
    }
    public function jobPagination($limit) {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $begin = ($page -1) * $limit;
        $query = "SELECT * FROM ".self::TABLE." LIMIT $begin, $limit";
        return $this->getPagination($query);
    }
}