<?php
namespace Admin\Model;
use Think\Model;
class typeModel extends Model {

    /*
     * 自动验证
     * */
    protected $_validate = array(
        array('type_name','require' ,'类名不能为空'),//账号不能为空
        array('type_name','','类名不能重复！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    );
    protected $_auto = array (
        array('type_addtime','time',3,'function'), // 对update_time字段在更新的时候写入当前时间戳
    );
}

