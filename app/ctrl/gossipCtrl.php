<?php
namespace app\ctrl;
use app\model\gossipModel;
header('content-type:text/html;charset=utf8');
class gossipCtrl extends \core\imooc
{ 
	/**
	 * 骑谈列表展示
	 * @return [type] [description]
	 */
  public function index()
  { 
    $model=new gossipModel;
    $re=$model->show();
    //var_dump($re);die;
    $this->assign('re',$re);
    $this->display('gossip/forum.html');
  }
  /**
   * 评论添加
   */
  public function upload()
  {
  	$this->display('gossip/upload.html');
  }
  /**
   * 添加入库
   */
  public function add()
  {  
  	$content = $_POST['content'];
    $file = $_FILES['file'];
    if(!empty($file))
    {
      $path="public/upload/upload/".$file['name'];
      //将图片放入指定的文件夹中
      move_uploaded_file($file['tmp_name'],$path);
    }
    session_start();
    $phone=$_SESSION['user_name'];
    $model = new \app\model\shundaModel();
    $res=$model->showOne(['phone'=>$phone]);
    $user_id=$res[0]['id'];
    //echo $user_id;die;
    $data['user_id']=$user_id;
      $data['time']=date('Y-m-d H:i:s');
      $data['img_url']=$path;
      $data['content']=$content;
      $model=new gossipModel;
      $re=$model->add($data);
      if($re)
      {
        jump('gossip/index');
      }
  }
} 