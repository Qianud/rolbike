<?php 
namespace app\model;
use core\lib\model;
	class routeModel extends model
	{
      public $tableName = "route";
      public function prefer()
      {
      	 return $this->select($this->tableName,'*');

      }
      public function rout($id)
      {
      	return $this->get($this->tableName,"*",["rid"=>$id]);

      }
	}
