<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->display("Index/index");
    }

    /*
     * 分类列表
     * */
    public function addType()
    {
        $type_id = $_GET['id'];
        //如果$type_id有值代表的是添加的子类
        if($type_id){
            $this->assign('type_id',$type_id);
            $this->display('index/addSubclass');
        }else{
            $type = D('Type');
            $list = $type->order('type_order desc')->select();
            $this->assign('list',$list);
            $this->display('index/addType');
        }

    }

    /*
     * 执行添加动作
     * */
    public function doAddType()
    {
        $type = D("Type");
        $pid = $_POST['type_pid'];
        //如果是添加子类，需要进行数据的初始化
        if($pid){
            $path = $type->find($pid)['type_path'];
            $path = intval($path);
            $_POST['type_path'] = $path+1;
        }
        if(!$type->create()){
            $this->error($type->getError());
        }else{
            $res = $type->add();
            if ($res) {
                $this->success('分类添加成功');
            }
        }
    }
}