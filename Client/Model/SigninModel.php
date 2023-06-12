<?php
    class SigninModel extends BaseModel
    {
        const TABLE_NAME = 'users';
        function signin($info)
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE Tennguoidung='".$info[0]."' and Pass='".$info[1]."' and Quyen=3";
            return $this->searching($sql);
        }
    }