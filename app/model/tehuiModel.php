<?php 
  namespace app\model;
  use core\lib\model;
	class tehuiModel extends model
	{
      public $tableName = "tehui";
      public function add($data)
      {
      	 return $this->insert($this->tableName,$data);

      }

     /**
      * 联表查询数据
      * @param  [type] $num [description]
      * @return [type]      [description]
      */
      public function liancha($num)
      {  
         return $this->query("SELECT tehui.id,tehui.num,user_desc.name,user_login.phone,user_good.model,route.line,time_interval.interval,tehui.taocan_price,tehui.status,tehui.p_status FROM `tehui` 
JOIN `user_desc` ON `tehui`.`user_id` = `user_desc`.`user_id`
JOIN `user_login` ON `tehui`.`user_id` = `user_login`.`id`
JOIN `user_good` ON `tehui`.`vehicle_id` = `user_good`.`id`
JOIN `route` ON `tehui`.`route_id` = `route`.`rid`
JOIN `time_interval` ON `tehui`.`ti_id` = `time_interval`.`tid`
WHERE `tehui`.`user_id`='$num'")->fetchAll();
      }
       /**
      * 确认订单修改
      * @param  [type] $num [description]
      * @return [type]      [description]
      */
      public function xiugai($id)
      {  
         return $this->update($this->tableName,["status"=>1],["id"=>$id]);
      }
      public function xiugait($id)
      {  
         return $this->update($this->tableName,["p_status"=>1],["id"=>$id]);
      }      
      /**
       * 取消订单
       */
      public function del($num)
      {
        return $this->delete($this->tableName,["num"=>$num]);
      }

      public function showOne($where)
    {
        return $this->select($this->tableName,"*",$where);
    }    
	}
?>