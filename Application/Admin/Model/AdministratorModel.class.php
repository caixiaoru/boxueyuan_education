<?php
namespace Admin\Model;
use Think\Model; 

class AdministratorModel extends Model {
protected $_validate = array(
		array('username', 'require', '用户名不能为空'),
		array('username','','用户名已经存在',0,'unique',1),
		array('password', 'require', '密码不能为空'),
		array('repassword', 'require', '确认密码不能为空'),
		array('password','repassword','确认密码不正确',0,'confirm'),
		array('email', 'require', '邮箱不能为空'),
		array('phone','require','手机号码不能为空')
		// array('registertime','require','注册时间不能为空')
		//修改密码页的限制条件没完成
	);
}