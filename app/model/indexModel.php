<?php
namespace app\model;
use core\lib\model;
class indexModel extends model
{
	public $tableName = "user_good";

	public function addOne($arr)
	{
		return $this->insert($this->tableName,$arr);
	}

	public function showAll($arr)
	{
		return $this->select($this->tableName,$arr);
	}
	public function getOne($id)
	{
		$ret=$this->get($this->tableName, '*',array(
			'id'=>$id
		));
		return $ret;
	}
	public function showOne($where)
	{
      return $this->select($this->tableName,"*",$where);
	}
	public function lists(){
		$ret=$this->select($this->tableName,'*');
		return $ret;
	}
}