<?php
/*
 * 前台用户操作类
 * 留言操作
 * */
namespace Home\Controller;
use Think\Controller;
class UsersController extends Controller {
    /*
     * 执行留言动作
     * */
    public function doMessage()
    {
        //重定向到New模块的Category操作
        //重定向到指定的URL地址
        redirect('/New/category/cate_id/2', 5, '页面跳转中...')
        $this->redirect('New/category', array('cate_id' => 2), 5, '页面跳转中...');
        redirect('/New/category/cate_id/2', 5, '页面跳转中...')
    }

    /*
     * 查看更多的留言信息
     * */
    public function MoreMessage()
    {
        
    }

    /*
     * 删除自己的留言
     * */
    public function delMessage()
    {
        
    }

    /*
     * 查看留言回复
     * */
    public function replay()
    {
        
    }
}