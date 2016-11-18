<?php 
  namespace app\model;
  use core\lib\model;
	class user_descModel extends model
	{ 
	  public $tableName="user_desc";
      public function user($id)
      {
        return $this->get($this->tableName,"*",["user_id"=>$id]);
      }
	}