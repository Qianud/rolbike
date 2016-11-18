<?php
namespace app\model;
use core\lib\model;
class user_zhuceModel extends model
{
	public $tableName = "user_zhuce";

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

	/*
	*修改方法
	*$data 修改的字段数组
	*$where 修改的条件
	*/
	public function updateOne($data,$where)
	{
		return	$this->update($this->tableName,$data,$where);
	}
}