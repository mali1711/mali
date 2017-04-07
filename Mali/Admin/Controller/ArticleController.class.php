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
        $data['type_id'] = $_GET['id'];
        $this->assign('data',$data);
        $this->display('Index/addArticle');
    }
    
    /*
     * 执行添加动作
     * */
    public function doAddArticle()
    {
        $article = D("Article");
        if (!$article->create()){ // 创建数据对象
            exit($article->getError());
        }else{
            $res = $article->add();
            if($res){
                $this->success('文章已经上传');
            }else{
                $this->error('文章上传失误');
            }
        }
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