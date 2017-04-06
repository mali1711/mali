<?php
/*
 * 文章信息控制器
 * */
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    /*
     * 文章列表
     * */
    public function index()
    {
        
    }

    /*
     * 文章详情页
     * */
    public function detailsArticle()
    {
        
    }

    /*
     * 添加文章
     * */
    public function addArticle()
    {
        $this->display('Index/addArticle');
    }
    
    /*
     * 执行添加动作
     * */
    public function doAddArticle()
    {
       dump($_POST);
    }

    /*
     * 修改文章
     * */
    public function updateArticle()
    {
        
    }

    /*
     * 执行修改动作
     * */
    public function doUpdateArticle()
    {
        
    }
    
    /*
     * 删除文章
     * */
    public function delArticle()
    {
        
    }


}