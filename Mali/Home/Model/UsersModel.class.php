<?php
namespace Home\Model;
use Think\Model;
class usersModel extends Model {
//自动验证
    protected $_validate = array(
        array('users_name','require' ,'账号不能为空'),//账号不能为空
        array('users_name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('reusers_pass','users_pass','两次密码输入不正确，逗逼',0,'confirm'), // 验证确认密码是否和密码一致
    );
//    自动完成
    protected $_auto = array (
        array('users_pass','jiami',3,'callback') , // 对password字段在新增和编辑的时候使md5函数处理
        array('users_addtime','time',3,'function'), // 对update_time字段在更新的时候写入当前时间戳
//        array('users_addtime','time',3,'function'), // 对update_time字段在更新的时候写入当前时间戳
        
    );

    public function jiami()
    {
       return md5($_POST['users_pass']);
    }
}