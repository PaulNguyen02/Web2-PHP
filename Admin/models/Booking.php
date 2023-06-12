<?php
    require_once "./models/BaseModel.php";

    class Booking extends BaseModel {
        CONST TABLE = 'booking';
        CONST TABLE_ID = 'ID';
        public function getAllBooking() {
            return $this->getAll(self::TABLE);
        }
        public function getBookingByID($id) {
            return $this->getByID(self::TABLE, self::TABLE_ID,$id);
        }
        public function deleteBooking($id) {
            $query = "Delete FROM ".self::TABLE." Where ID=".$id;
            return $this->delete($query);
        }
        public function resetBookingID(){
            return $this->resetIncrement(self::TABLE,self::TABLE_ID);
        }
        public function getBookingRecord() {
            return $this->getTotalRecord(self::TABLE_ID,self::TABLE);
        }
        public function getTotalBookingPage($limit) {
            return $this->getTotalPage($limit,self::TABLE_ID, self::TABLE);
        }
        public function bookingPagination($limit) {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $begin = ($page -1) * $limit;
            $query = "SELECT * FROM ".self::TABLE." LIMIT $begin, $limit";
            return $this->getPagination($query);
        }
    }

?>