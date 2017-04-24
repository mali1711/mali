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
     * all info
     * 所有的信息
     * */
    public function Allinfo()
    {
        $mod = M('my_footsteps');
        $res = $mod->select();
        echo json_encode($res);
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
        $article = D("MyFootsteps");
        if (!$article->create()){ // 创建数据对象
            exit($article->getError());
        }else{
            $res = $article->add();
            if($res){
                $this->success('内容已经上传成功');
            }else{
                $this->error('内容上传失误');
            }
        }
    }

    /*
     * 执行我要删除的动作
     * */
    public function delMyFootsteps()
    {

    }
}