<?php
namespace Admin\Model;
use Think\Model;
class MyFootstepModel extends Model {
    protected $tableName = 'my_footsteps';
    protected $_auto = array (
        array('my_footsteps_addtime','addtime',3,'callback'), //数据在新增的时候执行
    );

    public function addtime()
    {
        return date("Y-m-d H:i:s",time());
    }
}