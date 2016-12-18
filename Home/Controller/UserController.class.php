<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	function _initialize(){
		
	}
	
	public function register(){
		$this->display();
	}
	
	public function login(){
		$this->display();
	}
	
	function regSubmit(){
		$userOb=D('User');
		if(!$userOb->create()){
			$message=$userOb->getError();//获取自动验证的错误提示信息
			$this->error($message,"/studyPHP/DimensionTour/index.php/home/user-register");
		}else{
			$re=$userOb->add();
			if($re){
				$this->success("注册成功","/studyPHP/DimensionTour/index.php/home/user-login");
			}else{
				$this->success("注册失败","/studyPHP/DimensionTour/index.php/home/user-register");
			}
		}
	}
	
	function logSubmit(){
		$userOb=D('User');
		if($userOb->logCheck()===true){
			echo "欢迎";
		}else{
			echo "滚";
		}
	}
}