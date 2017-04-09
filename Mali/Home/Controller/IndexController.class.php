<?php

/*
 * 页面首页
 * */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Index/index');
    }

    /*
     * 登录
     * */
    public function login()
    {
       $this->display();
    }

    /*
     * 登录判断
     * */
    public function doLogin()
    {
        echo 'doLogin';
    }

    /*
     * 注册
     * */
    public function register()
    {
        $this->display();
    }

    /*
     * 注册动作
     * */
    public function doRegister()
    {
        $User = D("Users"); // 实例化User对象
        if (!$User->create()){
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($User->getError());
        }else{
            $res = $User->add();
            if($res){
                $this->success('账号注册成功');
            }
        }

    }

    /*
     * 个人中心
     * */
    public function PersonalCenter()
    {
        $this->display('Index/PersonalCenter');
    }

    /*
     * 个人游戏
     * */
    public function myGame()
    {
        $this->display('Index/myGame');
    }

    /*
     * 个人足迹
     * */
    public function myPootprint()
    {
        $this->display('Index/myPootprint');
    }
    
    
}