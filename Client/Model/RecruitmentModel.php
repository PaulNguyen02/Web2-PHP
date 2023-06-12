<?php 
    class RecruitmentModel extends BaseModel 
    {
        const TABLE_NAME = 'job';
        const TABLE_NAME1 = 'tuyendung';
        function show()
        {
            $sql = "SELECT * FROM ".self::TABLE_NAME;
            return $this->showall($sql);
        }
        function register($joblist)
        {
            $sql = "INSERT INTO ".self::TABLE_NAME1." (uid, hoten, email, chucvu, diachi, ngaysinh, sdt, ngaynopcv) 
            VALUES ('1','".$joblist[0]."','".$joblist[1]."','".$joblist[2]."','".$joblist[3]."','".$joblist[4]."','".$joblist[5]."','".$joblist[6]."')";
            return $this->Add($sql);
        }
    }