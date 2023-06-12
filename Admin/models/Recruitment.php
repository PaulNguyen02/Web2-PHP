<?php
class Recruitment extends BaseModel {
    CONST TABLE = 'tuyendung';
    CONST TABLE_ID = 'STT';
    public function getAllRecruitment() {
        return $this->getAll(self::TABLE);
    }
    public function getRecruitmentByID($id) {
        return $this->getByID(self::TABLE, self::TABLE_ID,$id);
    }
    public function deleteRecruitment($id) {
        $query = "Delete FROM ".self::TABLE." Where STT =".$id;
        return $this->delete($query);
    }
    public function resetRecruitmentID(){
        return $this->resetIncrement(self::TABLE,self::TABLE_ID);
    }
    public function getRecruitmentRecord() {
        return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
    }
    public function getTotalRecruitmentPage($limit) {
        return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
    }
    public function recruitmentPagination($limit) {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $begin = ($page -1) * $limit;
        $query = "SELECT * FROM ".self::TABLE." LIMIT $begin, $limit";
        return $this->getPagination($query);
    }
}