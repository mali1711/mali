<?php
namespace Admin\Model;
use Think\Model;
class MyFootstepsModel extends Model {
    protected $tableName = 'my_footsteps';
    protected $_auto = array (
        array('my_footsteps_addtime','addtime',3,'callback'), // 对update_time字段在更新的时候写入当前时间戳
    );

    public function addtime()
    {
        return date("Y-m-d H:i:s",time());
    }

}

