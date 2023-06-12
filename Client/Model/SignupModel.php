<?php
    class SignupModel extends BaseModel
    {
        const TABLE_NAME = 'users';
        function signup($info)
        {
            $sql = "INSERT INTO " .self::TABLE_NAME. " (Hoten,Tennguoidung,Pass,SDT,Ngaysinh,email,Gioitinh,Quyen)
            VALUES ('".$info[0]."', '".$info[1]."', '".$info[2]."', '".$info[3]."', '".$info[4]."', '".$info[5]."', '".$info[6]."','3')";
            return $this->Add($sql);
        }
    }