<?php
/*
 * 文章信息控制器
 * */
namespace Admin\Controller;
use Think\Controller;
class MyGameController extends Controller {
    /*
     * 显示后台游戏列表
     * */
    public function index()
    {
        $this->display('MyGame/GameList');
    }

    /*
     * 添加新的游戏
     * */
    public function addGame()
    {
        $this->display('MyGame/addGame');
    }
    /*
     * 修改游戏
     * */
    public function update()
    {
        
    }

    /*
     * 删除游戏
     * */
    public function del()
    {

    }

    /*
     * 查看游戏详情
     * */
    public function detail()
    {
        
    }

    /*
     * 添加游戏详情
     * */
    public function addDetail()
    {
        
    }
}