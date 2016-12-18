<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	protected $_validate=array(
		array('email','require','邮箱不能为空'),
		array('email','email','邮箱格式错误',0,'regex'),
		array('username','require','用户名不能为空'),
		array('username','','帐号名称已经存在',0,'unique',1), // 在新增的时候验证name字段是否唯一
		array('username','require','用户名不能为空'),
		array('password','require','密码不能为空'),
		array('password','/^.{6,20}$/','密码格式错误',0,'regex'),
		array('repassword','password','两次密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
		array('verifyCode','require','验证码不能为空'), //默认情况下用正则进行验证
     	
     	//array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式	
	);
	protected $_auto=array(
		array('password','encryption',3,'callback'),
		array('regtime','time',3,'function'),
	);
	 function encryption($password){
		$username=$_POST['username'];
		//return $password.'|'.$username;
		return md5(md5($password).$username);
	}
	function logCheck(){
		$username=$_POST['username'];
		$password=md5(md5($_POST['password']).$username);
		$arr=$this->where("username='%s' and password='%s' ",array($username,$password))->select();
		if(is_array($arr)&&(!empty($arr))){
			return true;
		}else{
			return false;
		}
	}
}