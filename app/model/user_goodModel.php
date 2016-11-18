<?php 
  namespace app\model;
  use core\lib\model;
	class user_goodModel extends model
	{
	  public  $tableName="user_good"; 
      public function good($id)
      {
      	return $this->get($this->tableName,"*",["id"=>$id]);
      	 
      }
	}