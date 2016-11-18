<?php
namespace core\lib;
use core\lib\conf;
/*
*路由
 */
class route
{
	public $ctrl;
	public $action;
	public $appurl;
	public function __construct()
	{
		$root = $_SERVER['SCRIPT_NAME'];
		$request = $_SERVER['REQUEST_URI'];
		$s=strpos($request,"?");
		if($s!="")
		{
			$requests =substr($request,strpos($request,"?"));
			$request = str_replace($requests,"",$request);
		}
		$c=strripos($root,"/");
		$url=substr($request,$c);
		$URI=substr($root,0,$c+1);
		$host=$_SERVER['HTTP_HOST'];
		$this->appurl=$host.$URI;
		if($url!='/')
			// if(isset($_SERVER['REQUEST_URI'])&& $_SERVER['REQUEST_URI']!="/")
		{

			$patharr=explode('/',trim($url,'/'));

			if(isset($patharr[0]))
			{
				$this->ctrl=$patharr[0];
				unset($patharr[0]);
			}
			if(isset($patharr[1]))
			{
				$this->action =$patharr[1];
				unset($patharr[1]);
			}
			else
			{
				$this->action =conf::get('ACTION','route');
			}
			//p($patharr);
			//url 多余的部分转换成 GET 参数
			$count= count($patharr)+2;
			$i=2;
			while($i<$count)
			{
				if(isset($patharr[$i+1]))
				{
					$_GET[$patharr[$i]]=$patharr[$i+1];
				}
				$i+=2;

			}
			unset($_GET['url']);
			//p($_GET);
		}
		else
		{
			$this->ctrl   =conf::get('CTRL','route');
			$this->action = conf::get('ACTION','route');
		}
	}
}
