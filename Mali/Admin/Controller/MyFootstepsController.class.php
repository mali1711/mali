<?php
/*
 * 文章信息控制器
 * */
namespace Admin\Controller;
use Think\Controller;
class MyFootstepsController extends Controller {

    /*
     * jump  to MyFootsteps list page
     * */
    public function MyFootstepsList()
    {
        $this->display('Life/MyFootstepsList');
    }

    /*
     * 添加我的足迹
     * */
    public function addMyFootsteps()
    {
        $this->display('Life/addMyFootsteps');
    }

    /*
     * post add MyFootsteps
     * */
    public function postMyFootsteps()
    {
        $my_footsteps = D("MyFootstep"); // 实例化User对象
        // 根据表单提交的POST数据创建数据对象
        if($my_footsteps->create()){
            $result = $my_footsteps->add(); // 写入数据到数据库
            if($result){
                // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $this->success('数据添加成功');
            }
        }
    }

    /*
     * 执行我要删除的动作
     * */
    public function delMyFootsteps()
    {
        $my_footsteps = D("MyFootstep"); // 实例化User对象
        $res = $my_footsteps->delete($_GET['my_footsteps_id']);
        if($res){
            echo $res;
        }else{
            echo 0;
        }
    }

    /*
     * show MyFootsteps of all
     * */
    public function showInfo()
    {
        $my_footsteps = D("MyFootstep"); // 实例化User对象
        $res = $my_footsteps->select();
        echo json_encode($res);
    }

    /*
     * 分页查看信息
     * */
    public function page()
    {
        $my_footsteps = D("MyFootstep"); // 实例化User对象
        $num = $_GET['num'];
        $res = $my_footsteps->page($num,1)->select();
        echo json_encode($res);
    }
}