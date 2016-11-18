<?php
namespace app\model;
use core\lib\model;
class refundsModel extends model
{
    public $tableName = "car_message";

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