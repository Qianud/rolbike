<?php
namespace app\model;
use core\lib\model;
class upModel extends model
{
    public $tableName = "refunds";

    public function addOne($arr)
    {
        return $this->insert($this->tableName,$arr);
    }

    public function showAll($arr)
    {
        return $this->select($this->tableName,$arr);
    }

    public function showOne($where)
    {
        return $this->select($this->tableName,"*",$where);
    }
}