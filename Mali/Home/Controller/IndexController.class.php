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
        $_POST['users_status']= 0;
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
        $res = D('myGame');
        $list = $res->select();
        $this->assign('list',$list);
        $this->display('Index/myGame');
    }

    /*
     * 个人足迹
     * */
    public function myPootprint()
    {
        $this->display('Index/myPootprint');
    }

    /*
 * 加载分类的信息
 * */
    public function typeList()
    {
        $type = D('Type');
        $list = $type->order('concat(type_path,type_id)')->select();
        foreach ($list as $k=>$v){
            $m = substr_count($v['type_path'],',');
            $str = str_repeat("&nbsp",$m*8);
            $list[$k]['type_name'] = $str.$v['type_name'];
        }
        echo json_encode($list);
    }
    
    /*
     * 获取首页分类的信息
     * */
    public function info()
    {
        $id = $_GET['id'];
        $data['article_type_id'] = $id;
        $article = D('article');
        $list = $article->where($data)->select();
        if(empty($list)){
            $this->error('sorry,数据暂时还没有上传');
        }
        $this->assign('list',$list);
        $this->display('Index/KnowledgePoint');
    }


    /*
     * 展示知识点的详情页面
     * */
    public function infoDetail()
    {
        $article = D('article');
        $id= $_GET['id'];
        $list = $article->find($id);
        $list['article_content'] = htmlspecialchars_decode($list['article_content']);
        $this->assign('list',$list);
        $this->display('Index/KnowledgeDetail');
    }

    /*
     * 跳转后台
     * */
    public function JumpAdmin()
    {
        $table = 'users';
        $_POST['users_pass'] = md5(I('post.users_pass'));
        $_POST['status'] = 1;
//        判断用户输入内容是否存在当前表中
        $res = $this->__emptyUsers($table,$_POST);
        if(!empty($res)){
            $_SESSION['users_info'] = $res;
            $this->success('恭喜你登录成功',U('Admin/Index/index'));
        }else{
            die;
            $this->error('您输入有误，登录失败');
        }
    }

    /*
     * 判断用户是否存在
     * */
    private function __emptyUsers($table,$data){
        $users = M($table);
        $res = $users->where($data)->select();
        return $res['0'];
    }
}