<?php 
  namespace app\model;
  use core\lib\model;
	class user_loginModel extends model
	{
	  public  $tableName="user_login"; 
      public function login($id)
      {
      	return $this->get($this->tableName,"*",["id"=>$id]);
      	 
      }
	}