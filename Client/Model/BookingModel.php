<?php 
    class BookingModel extends BaseModel
    {
        const TABLE_NAME = 'booking';
        function book($info)
        {
            $sql = "INSERT INTO ".self::TABLE_NAME." (UID,TenKH,Email,SDT,Diachi,Dichvu,Ngayhen,Yeucau)
                VALUES ('1','".$info[0]."','".$info[1]."','".$info[2]."','".$info[3]."','".$info[4]."','".$info[5]."','".$info[6]."')";
            return $this->Add($sql);
        }
    }