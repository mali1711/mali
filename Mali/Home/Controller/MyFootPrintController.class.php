<?php

/*
 * 页面首页
 * */
namespace Home\Controller;
use Think\Controller;
class myFootPrintController extends Controller {
    /*
     * 显示所有的足迹列表
     * */
    public function index()
    {
        $myfoot = M('my_footsteps'); // 实例化User对象
        $count      = $myfoot->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page -> setConfig('header','共%TOTAL_ROW%条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show       = $Page->show();// 分页显示输出
        $list = $myfoot->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $k=>$v){
            $list[$k]['my_footsteps_content'] = htmlspecialchars_decode($v['my_footsteps_content']);
        }
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);// 赋值数据集
        $this->display('Index/myPootprint'); // 输出模板
    }
}