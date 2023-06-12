<?php
class ServiceModel extends BaseModel 
{
    const TABLE_NAME = 'dichvu';
    function show()
    {
        $sql = "SELECT TenDV FROM ". self::TABLE_NAME;
        return $this->showall($sql);
    }
}