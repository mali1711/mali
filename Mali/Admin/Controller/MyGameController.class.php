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
        $MyGame = D('my_game');
        $list = $MyGame->select();
        $this->assign('list',$list);
        $this->display('MyGame/MyGameList');
    }

    /*
     * 添加新的游戏
     * */
    public function addGame()
    {
        $this->display('MyGame/addGame');
    }
    
    /*
     * 执行添加动作
     * */
    public function doAddGame()
    {
        $_POST['my_game_pic'] = $this->uploadFile();
        $_POST['my_game_addtime'] = date("Y-m-d H:i:s",time());
        $my_game = D('my_game');
        if (!$my_game->create()){ // 创建数据对象
            exit($my_game->getError());
        }else{
            $res = $my_game->add();
            if($res){
                $this->success('游戏信息上传成功');
            }else{
                die;
                $this->error('游戏信息上传失败');
            }
        }
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

    /*
     * 文件上传
     * */
    private function uploadFile()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/Upload/MyGame/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $res = $info['my_game_pic']['savepath'].$info['my_game_pic']['savename'];
            return $res;
        }
        }

}