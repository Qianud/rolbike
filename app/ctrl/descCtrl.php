<?php
namespace app\ctrl;
header('content-type:text/html;charset=utf8');
class descCtrl extends \core\imooc
{  
	public function cash()
	{
		$this->display("cash.html");
	}

	public function ready_up()
	{
		if(empty($_POST['pdw']))
		{
			jump('desc/cash');
		}
		else
		{
			session_start();
			$phone=$_SESSION['user_name'];
			$model = new \app\model\shundaModel();
			$desc  = new \app\model\descModel();
			$res=$model->showOne(['phone'=>$phone]);
			if(md5($_POST['pdw'])==$res[0]['pwd'])
			{
				$user_id=$res[0]['id'];
				$arr['user_id']=$user_id;
				$dar=$desc->showOne($arr);
				$data=array(
					  'sum_m'=>$dar[0]['sum_m']-299,
					  'cash'=>$dar[0]['cash']+299
					);
				$where=array('user_id'=>$user_id);
				$desc->updateOne($data,$where);
				jump('index/geren');				
			}
			else
			{
				$data="密码不正确";
				$this->assign('data',$data);
				$this->display("cash.html");
			}
						
		}
	}

	public function desclist()
	{
			session_start();
			$desc = new \app\model\descModel();
			$phone=$_SESSION['user_name'];
			$model = new \app\model\shundaModel();
			$res=$model->showOne(['phone'=>$phone]);
			$user_id=$res[0]['id'];
			$dar=$desc->showOne(['user_id'=>$user_id]);
			$dar[0]['phone']=$phone;
			$dar[0]['card_id']=str_replace(substr($dar[0]['card_id'],8,6),"*****",$dar[0]['card_id']);
			$this->assign('data',$dar);		
		$this->display('gerenziliao.html');
	}

	public function desccong()
	{
		$arr=$_POST;
		if(empty($arr))
		{
			jump('index/money');
		}
		else
		{
			if($arr['sum_m'])
			{
				if($arr['pdw'])
				{
					session_start();
					$phone=$_SESSION['user_name'];
					$model = new \app\model\shundaModel();
					$desc  = new \app\model\descModel();
					$res=$model->showOne(['phone'=>$phone]);
					if(md5($arr['pdw'])==$res[0]['pwd'])
					{
						$user_id=$res[0]['id'];
						$where=array('user_id'=>$user_id);
						$dar=$desc->showOne($where);
						$data=array(
							  'sum_m'=>$dar[0]['sum_m']+$arr['sum_m']
							);
						$where=array('user_id'=>$user_id);
						$desc->updateOne($data,$where);
						jump('index/geren');				
					}
					else
					{
						$data="密码不正确";
						$this->assign('data',$data);
						$this->display("chongzhi.html");
					}						
				}
				else
				{
				$data="请输入密码";
				$this->assign('data',$data);
				$this->display("chongzhi.html");					
				}
			}
			else
			{
				$data="请输入充值金额";
				$this->assign('data',$data);
				$this->display("chongzhi.html");				
			}
		}
	}

	public function qu()
	{
		if(isset($_POST['id']))
		{
			$id=$_POST['id'];
		$zhu = new \app\model\user_zhuceModel();
		$arr=$zhu->showOne(['id'=>$id]);
		$kai=time();
		$start_time=strtotime($arr[0]['start_time']);
		if($start_time<=$kai)
		{
			$zhu->updateOne(['status'=>1],['id'=>$id]);
			jump('index/dindan');	  
		}
		else
		{
			    session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];			
				   $zhu = new \app\model\user_zhuceModel();
				   $sql="select * from user_zhuce join user_good on user_zhuce.class=user_good.Id where user_id=$user_id AND end_time=0";
				   $arr=$zhu->query($sql)->fetchAll();
				   $arr[0]['error']="未到取车时间";
				   $this->assign("data",$arr);				   					
       			   $this->display('dindan.html');			
		}

		}
		else
		{
			jump('index/dindan');
		}
	}

	public function huan()
	{
			if(isset($_POST['id']))
			{				
			 $id=$_POST['id'];
		$zhus = new \app\model\user_zhuceModel();
		$arr=$zhus->showOne(['id'=>$id]);
		$jie=time();
		$end_time=date('Y-m-d H:i:s',time());
		$start_time=strtotime($arr[0]['start_time']);
			    session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];			
				   $sql="select * from user_zhuce join user_good on user_zhuce.class=user_good.Id where user_id=$user_id AND end_time=0";
				   $arr=$zhus->query($sql)->fetchAll();
				   $haos=ceil(($jie-$start_time)/60);
				   $xiaofei=$arr[0]['hour_price']*$haos;
				   $zhus->updateOne(['end_time'=>$end_time],['id'=>$id]);
				   $desc = new \app\model\descModel();
				   $descar=$desc->showOne(['user_id'=>$user_id]);
				   $data=array(
							  'sum_m'=>$descar[0]['sum_m']-$xiaofei
							);
						$where=array('user_id'=>$user_id);
						$desc->updateOne($data,$where);
						$ti=array('haos'=>$haos,"xiaofei"=>$xiaofei,"model"=>$arr[0]['model'],"hour_price"=>$arr[0]['hour_price']);
						$this->assign('data',$ti);
						$this->display('shengcheng.html');				   
			}
			else
			{
			jump('index/dindan');
			}		
	}
	//积分兑换  Redeem
	public function Redeem(){
		session_start();
		$phone=$_SESSION['user_name'];
		$model = new \app\model\shundaModel();
		$res=$model->showOne(['phone'=>$phone]);
		$user_id=$res[0]['id'];
		//echo $user_id;die;
		$desc = new \app\model\descModel();
		$descar=$desc->showOne(['user_id'=>$user_id]);
		$dat=$descar[0]['integral'];
		$this->assign('data',$dat);
		$this->display("Redeem.html");
	}
	public function integr()
	{
		$this->display('ri.html');
	}



	public function shear()
	{
			    session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];			
				$desc = new \app\model\descModel();
				$descar=$desc->showOne(['user_id'=>$user_id]);
				$arr=explode(",",$descar[0]['sign']);
				echo $descar[0]['sign'];
	}
	public function sheartwo()
	{
			    session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];			
				$desc = new \app\model\descModel();
				$descar=$desc->showOne(['user_id'=>$user_id]);
				$arr=explode(",",$descar[0]['sign']);
				echo $descar[0]['data'];
	}	
	public function sign()
	{
			    session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];
				$desc = new \app\model\descModel();
				$descar=$desc->showOne(['user_id'=>$user_id]);
				
				$sign = $_POST['tian']-1;	
				$arr=array('sign'=>$descar[0]['sign'].",".$sign,
					"integral"=>$descar[0]['integral']+10,
					"data"=>$_POST['tian']);
				$where=array('user_id'=>$user_id);
				$desc->updateOne($arr,$where);				
		        
	}
	public function zhuanpans(){
		session_start();
		$phone=$_SESSION['user_name'];
		$model = new \app\model\shundaModel();
		$res=$model->showOne(['phone'=>$phone]);
		$user_id=$res[0]['id'];
		$desc = new \app\model\descModel();
		$descar=$desc->showOne(['user_id'=>$user_id]);
		$dat=$descar[0]['integral'];
		$ar=$dat-30;
		$where=array('user_id'=>$user_id);
		$ara=array('integral'=>$ar);
		$re=$desc->updateOne($ara,$where);
		if($re)
		{
			return true;
		}
		else
		{
			echo 0;
		}
	}
}
?>