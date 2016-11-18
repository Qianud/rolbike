<?php 
  namespace app\model;
  use core\lib\model;
	class time_intervalModel extends model
	{
      public $tableName = "time_interval";
      public function prefere()
      {
      	 return $this->select($this->tableName,'*');
      }
      public function tim($id)
      {
      	return $this->get($this->tableName,"*",["tid"=>$id]);
      }
	}
?>