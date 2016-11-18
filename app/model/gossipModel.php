<?php 
  namespace app\model;
  use core\lib\model;
	class gossipModel extends model
	{
    public  $tableName="gossip"; 

    public function show()
    {
      return $this->query("
           SELECT * FROM `gossip`
          JOIN `user_desc` ON `gossip`.`user_id` = `user_desc`.`user_id` ORDER BY 'id' desc
       ")->fetchAll();
    }
    /**
     * 骑谈信息入库
     * @var string
     */
	  
      public function add($data)
      {
      	return $this->insert($this->tableName,$data);
      	 
      }
	}