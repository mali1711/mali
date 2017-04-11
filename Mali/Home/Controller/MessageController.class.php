<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {

    public function index()
    {
        $message_board = M('message_board');
        $list = $message_board->limit(4)->order('message_board_addtime desc')->select();
        echo json_encode($list);
    }
    
    /*
     * 添加信息
     * */
    public function addMessage()
    {
        $message_board = M('message_board');
        $_POST['message_board_user_ip'] = $_SERVER["REMOTE_ADDR"];
        $_POST['message_board_addtime'] = date("Y-m-d H:i:s");
        if($message_board->create()){
            $res = $message_board->add();
            if($res){
                $_POST['message_board_id'] = $res;
                $list['status'] = 1;//成功
                $list['info'] = $_POST;
            }else{
                $list['status'] = 0;//数据库写入失败
            }
        }else{
            $list['status'] = -1;//数据初始化失败
        }
        echo json_encode($list);
    }
}