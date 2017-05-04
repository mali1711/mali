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
        $article =  D('Article');
        $list = $article->select();
        $this->assign('list',$list);
        $this->display("Index/articleList");
    }

    /*
     * 文章详情页
     * */
    public function detailsArticle()
    {
        $article = D('Article');
        $list =  $article->find($_GET['id']);
        $list['article_content'] = htmlspecialchars_decode( $list['article_content']);
        $this->assign('list',$list);
        $this->display('Index/detailsArticle');
//        {$list.article_content}
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
        $article = D('Article');
        $pic = $this->__getArticlePic()['1'];
        if($article->delete($_GET['id'])){
            foreach($pic as $k=>$filename){
                $pic = str_replace("/www/mali/","./","$filename");
                $res = unlink($pic);
            }
            if($res){
                $this->success('数据删除成功',U('Article/index'));
            }else{
                $this->error('图片删除有残留',U('Article/index'));
            }
        }else{
            $this->error('数据删除失败',U('Article/index'));
        }
    }

    /*
     * 获取文章里面的图片
     * */
    private function __getArticlePic()
    {
        $article = D('Article');
        $list =  $article->find($_GET['id']);
        $str = htmlspecialchars_decode( $list['article_content']);
        $preg = '/<img.*?src=[\"|\']?(.*?)[\"|\']?\s.*?>/i';
        preg_match_all($preg, $str, $imgArr);
        return($imgArr);
    }


}