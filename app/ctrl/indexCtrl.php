<?php
namespace app\ctrl;
header('content-type:text/html;charset=utf8');
class indexCtrl extends \core\imooc
{   
	/**
	 * 首页
	 * @return [type] [description]
	 */
	public function index()
	{
//http://avatardata.cn/Docs/Api/aacc4564-f237-421b-b631-6865a71a8e91
		$model=new \app\model\indexModel();
		$data=$model->lists();
		//print_r($data);die;
		$this->assign('data',$data);
		$this->display('index.html');
	} 
   /**
    * 个人页面
    * @return [type] [description]
    */
	public function geren()
	{
		session_start();
		if(isset($_SESSION['user_name']))
		{
			$desc = new \app\model\descModel();
			$phone=$_SESSION['user_name'];
			$model = new \app\model\shundaModel();
			$res=$model->showOne(['phone'=>$phone]);
			$user_id=$res[0]['id'];
			$dar=$desc->showOne(['user_id'=>$user_id]);
			if(empty($dar))
			{
				jump('index/dl');
			}
			else
			{
				if($dar[0]['cash']=="0")
					{
						jump('desc/cash');
					}
					else
					{
						$this->assign('data',$dar);
						$this->display('geren.html');						
					}

			}			
				
		}
		else
		{
			jump('index/login');
		}
        
	}
    	
    /*
    *个人信息填充
    */
   
	   public function descadd()
	   {
	   	    session_start();
	   		$arr=$_POST;
	   		if(!empty($arr))
	   		{
	   			$url="http://api.avatardata.cn/IdCardCertificate/Verify?key=908e147d46bd41bba53ac8a38be7bec7&realname=".$arr['name']."&idcard=".$arr['card_id'];
	   			$str=file_get_contents($url);
	   			$str=json_decode($str,true);
	   			if($str['reason']=="Succes")
	   			{
					$desc = new \app\model\descModel();
					$phone=$_SESSION['user_name'];
					$model = new \app\model\shundaModel();
					$res=$model->showOne(['phone'=>$phone]);
				    $user_id=$res[0]['id'];
				    $arr['datatime']=date('Y-m-d H:i:s',time());
				    $arr['user_id']=$user_id;
				    $res=$desc->addOne($arr);
				    if($res)
				    {
				    	jump('index/geren');
				    }
				    else
				    {
						$data="添加失败";
						$this->assign("data",$data);
						$this->display("h-login.html");
				    }
			    }
			    else
			    {
						$data="身份信息不正确";
						$this->assign("data",$data);
						$this->display("h-login.html");			    	
			    }	   			
	   		}
	   		else
	   		{
	   			jump('index/dl');
	   		}

	   }

	   public function cash()
	   {
	   		$this->display("cash.html");
	   }

    public function login()
    {
    	$arr=$_POST;
    	session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
     if($user=="")
    	{
    	if(empty($arr))
    	{
			$this->display("login.html");
    	}
    	else
    	{
			$model = new \app\model\shundaModel();
			$phone=$_POST['phone'];
			$pdw=md5($_POST['pdw']);
			$res=$model->showOne(['phone'=>$phone]);
			if(empty($res))
			{
					$data="用户名错误";
					$this->assign("data",$data);
					$this->display("login.html");
			}   
			else
			{	
				if($pdw==$res[0]['pwd'])
				{
					$_SESSION['user_name']=$_POST['phone'];
					jump('index/geren');					
				}
				else
				{
					$data="密码错误";
					$this->assign("data",$data);
					$this->display("login.html");					
				}

			} 		
    	}

    	}
    	else
    	{
    		jump('index/geren');
    	}

    	
    }

	public function dl()
	{
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    	{
    		jump('index/login');
    	}
    	else
    	{
    		$this->display('h-login.html');
    	}
        
	}
	public function x()
	{
        $this->display('add.html');
	}
    /**
     * 订单页
     * @return [type] [description]
     */
	public function dindan()
	{
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{
				$desc = new \app\model\descModel();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];
				$dar=$desc->showOne(['user_id'=>$user_id]);
				if(empty($dar))
				{
					jump('index/dl');
				}
				else
				{
					if($dar[0]['cash']=="0")
						{
							jump('desc/cash');
						}
						else
						{	
				   $zhu = new \app\model\user_zhuceModel();
				   $sql="select * from user_zhuce join user_good on user_zhuce.class=user_good.Id where user_id=$user_id AND end_time=0";
				   $arr=$zhu->query($sql)->fetchAll();

				   $this->assign("data",$arr);				   					
       			   $this->display('dindan.html');
       					}
				}  
    		}

	}

    /*
	*验证码
	*/
	public function aout()
	{
		$verify=rand(1,9999);
		session_start();
		$_SESSION['verify']=$verify;
		echo $verify;
	}

	public function reg()
	{
		$this->display("layout.html");
	}

	public function register()
	{

		$arr=$_POST;
		session_start();
		if(!empty($arr))
		{
			if(isset($_SESSION['verify']))
			{
				if($arr['yan']!=$_SESSION['verify'])
				{
					$data="验证码错误";
					$this->assign("data",$data);
					$this->display("layout.html");	
				}
				else
				{
					unset($_SESSION['verify']);
					$model = new \app\model\shundaModel();
					$where=array('phone'=>$_POST['phone']);
		            $data=$model->showOne($where);
		            if(!empty($data))
		            {
						$data="您的手机号已经注册";
						$this->assign("data",$data);
						$this->display("layout.html");
		            }
		            else
		            {
		            	$model = new \app\model\shundaModel();

		            	$arr=array("phone"=>$_POST['phone'],"pwd"=>md5($_POST['pdw']));
		            	$res=$model->addOne($arr);
		            	if($res)
		            	{
		            		jump('index/login');
		            	}
		            	else
		            	{
		            		$data="注册失败";
		            		$this->assign("data",$data);
						    $this->display("layout.html");
		            	}
		            	
		            }
				}				
			}
			else
			{
					$data="验证码错误";
					$this->assign("data",$data);
					$this->display("layout.html");
			}

			
		}
		else
		{
			jump('index/geren');
		}

	}	

	/*
	*预定租车
	*/
	public function show_buy(){
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{
				$desc = new \app\model\descModel();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];
				$dar=$desc->showOne(['user_id'=>$user_id]);

				if(empty($dar))
				{
					jump('index/dl');
				}
				else
				{
					if($dar[0]['cash']=="0")
						{
							jump('desc/cash');
						}
						else
						{					
					$id=$_GET['id'];
					$model=new \app\model\indexModel();
					$data[0]=$model->getOne($id);

					$this->assign('data',$data);
					$this->display("yuyuezuche.html");
						}
				}  
    		}
	}	

	/*
	*个人中心账户充值页面
	*/
		public function money()
    {
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{    	
        $this->display('chongzhi.html');
        	}
    }

    /*
    *订单入库
    */
   		public function down_dingdan(){
   				session_start();
   				$phone=$_SESSION['user_name'];
				$models = new \app\model\shundaModel();
				$res=$models->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];   			
		$appDateTime=$_POST['appDateTime'];
		$appId=$_POST['appId'];
		$start_site=$_POST['start_site'];
		$end_site=$_POST['end_site'];
		$model=new \app\model\dingdanModel();
		$arr=$model->showOne(['AND'=>['user_id'=>$user_id,"end_time"=>'0']]);
		if(empty($arr))
		{
		$dataa=array(
			'user_id'=>$user_id,
			'class'  =>$appId,
			'start_time'=>$appDateTime,
			'start_site'=>$start_site,
			'end_site'=>$end_site
		);

		$re=$model->addOne($dataa);
		if($re)
		{
			jump('index/dindan');
		}
		else
		{
			echo 0;
		}
		}
		else
		{
			echo '<script>alert("您已经有预约");location.href="index/index";</script>';
			
		}
	}
    public  function tuikuan(){
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{    	
        $this->display('tuikuan.html');
    		}
    }
    public  function tk(){
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{
                $desc = post('desc');
                $zhifubao = post('zhifubao');
                $call_email = post('call_email');
                //echo $data,$data1,$data2;
                $time = date('Y-m-d h:i:s');
                $data['time'] = $time;
                $data['username'] = $user;
                $data['desc'] = $desc;
                $data['zhifubao'] = $zhifubao;
                $data['call_email'] = $call_email;
                //print_r($data);die;
                if (!empty($desc)) {
                    //print_r($data);
                    $model = new \app\model\refundsModel();
                    //var_dump($model);die;
                    $insert = $model->addOne($data);
                    $arr['username'] = $user;
                    $zhi = $model->showOne($arr);

                    $this->assign('zhi', $zhi);
                    $this->display('confirming.html');
                } else {
                    $this->display('error.html');
                }
            }


    }
    public function ruku(){

        //echo $reason,$account_numbe,$email;
        $this->display('about.html');
    }
    public function recycling(){
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{        	
        $this->display('recycling.html');
            }
    }
    public function hs(){
        session_start();
        if ($_FILES["filename"]["error"] > 0) {
        $this->display('error.html');
        } else {
            $username = $_SESSION['user_name'];
            $car = post('car');
            $email = post('email');
            $price = post('price');
            $u_time = post('u_time');
            $year = post('year');
            if(!empty($car)){
                //if(!empty($car)&&!empty($email)&&!empty($price)&&!empty($u_time)){
                if ($year == '年') {
                    $u_time = $u_time . $year;
                } else {
                    $u_time = $u_time . '月';
                }
                $time=date('Y-m-d h:i:s');
                $data['add_time']=$time;
                $data['car'] = $car;
                $data['price'] = $price;
                $data['u_time'] = $u_time;
                $data['email'] = $email;
                $file = $_FILES['filename'];
                //将临时文件移动到指定位置
                $path = "image/" . date('Y') . '/' . date('m') . '/' . date('d') . '/';
                //判断文件路径是否存在
                is_dir($path) or mkdir($path, 0777, true);
                //截取后缀
                $last = substr($file['name'], strrpos($file['name'], "."));
                //重新命名
                $newname = time() . rand(10000, 99999) . $last;
                //生成路径
                $way = $path . $newname;
                //移动到指定文件夹
                move_uploaded_file($file['tmp_name'], $way);
                $data['img_url'] = $way;
                $data['username'] = $username;
                $model = new \app\model\upModel();
                //var_dump($model);die;
                //print_r($data);die;
                $insert = $model->addOne($data);
                if ($insert) {
                    $arr['username'] = $username;
                    $zhi = $model->showOne($arr);
                    //print_r($zhi);die;
                    $this->assign('zhi', $zhi);
                    $this->display('queren.html');
                }else {
                    echo '错误';die;
                    $this->display('error.html');
                }
            }else{
                $this->display('error.html');
            }
        }
    }
    public function cg(){
        $this->display('cg.html');
    }

/**
     * 特惠
     */
    public function preferential()
    {   
		session_start();
    	$user=empty($_SESSION['user_name'])?"":$_SESSION['user_name'];
    	if($user=="")
    		{
    			jump('index/login');
    		}
    		else
    		{     	
        //查询路线
        $model = new \app\model\routeModel();
        $datas=$model->prefer();
        //查询时间段
        $models = new \app\model\time_intervalModel();
        $data=$models->prefere();
        $this->assign('data',$data);
        $this->assign('datas',$datas);
        $this->display('tehui.html');
           }
    }
    /**
     * 套餐信息入库
     */
    public function prefer()
    {   
        $data=$_POST;//接收线路ID和时间ID
        //var_dump($data);die;
        if(count($data)!==2)
        {
          $this->preferential();
          die;
        }
            session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id'];         
        $num="TH";
        $num.=date('Ymd');
        $num.=rand(10000,99999);
        $model=new \app\model\tehuiModel();
        $res=$model->liancha($user_id);
        if($res)
        {
            $num="TH";
            $num.=date('Ymd');
            $num.=rand(10000,99999);
           
        }
				           
            $_SESSION['num'] = $num;
            $data['num']=$num;//订单号
            $data['user_id']=$user_id;//用户id
            $data['vehicle_id']=4;//车辆id
            $data['taocan_price']=2;//价格
            $model=new \app\model\tehuiModel();
            $re=$model->add($data);
           if($re)
           {
             jump('index/affirm');
           }     
        
    }

    public function affirm()
    {   
    	session_start();
				$phone=$_SESSION['user_name'];
				$model = new \app\model\shundaModel();
				$res=$model->showOne(['phone'=>$phone]);
				$user_id=$res[0]['id']; 
        //订单信息查询
        $model=new \app\model\tehuiModel();
        $re=$model->liancha($user_id);
        //var_dump($re);die;
        //用户信息查询
        $this->assign('re',$re);
        $this->display('querenh.html');
    }
    /**
     * 订单确认
     */
    public function confirm ()
    {
    	$id = $_GET['id'];
        $model=new \app\model\tehuiModel();
        $re=$model->xiugai($id);
        if($re)
        {
          jump('index/affirm');
        }
    }
      /**
       * 订单详情
       */
      public function xiangqing()
      {
        session_start();
        $num=$_SESSION['num'];
        //订单信息查询
        $model=new \app\model\tehuiModel();
        $re=$model->liancha($num);
        $this->assign('re',$re);
        $this->display('new_file.html');
      }
      /**
       * 取消订单
       */
      public function quxiao(){
        session_start();
        $num=$_SESSION['num'];
        $model=new \app\model\tehuiModel();
        $id=$_GET['id'];
        //echo $id;die;
        $re=$model->del($num);
        if($re)
        {
          $this->index();  
        }
      }

      public function zhifu()
      {
      	$id=$_GET['id'];
		$model=new \app\model\tehuiModel();
		$arr=$model->showOne($where=array('id'=>$id));
		$this->assign('dat',$arr);
		$this->display('zhifu.html');
      }

	public function desccong()
	{
		$arr=$_POST;
		if(empty($arr))
		{
			jump('index/affirm');
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
							  'sum_m'=>$dar[0]['sum_m']-$arr['sum_m']
							);
						$where=array('user_id'=>$user_id);
						$desc->updateOne($data,$where);
						$models=new \app\model\tehuiModel();
						$models->xiugait($arr['id']);
						jump('index/affirm');				
					}
					else
					{
						$data="密码不正确";
						$id=$arr['id'];
						$models=new \app\model\tehuiModel();
						$arr=$models->showOne($where=array('id'=>$id));
						$this->assign('dat',$arr);					
						$this->assign('data',$data);
						$this->display("zhifu.html");
					}						
				}
				else
				{
						$data="密码不正确";
						$id=$arr['id'];
						$models=new \app\model\tehuiModel();
						$arr=$models->showOne($where=array('id'=>$id));
						$this->assign('dat',$arr);					
						$this->assign('data',$data);
						$this->display("zhifu.html");					
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
	public function weizhi(){
		$this->display('weizhi.html');
	}
}