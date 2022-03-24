<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Response;

class GuestBooksController extends AppController
{
    // public $data = [];

    public $data = [['id' => 1,'msg' => '第一則留言','likes' => 0],
                    ['id' => 2,'msg' => '第二則留言','likes' => 0],
                    ['id' => 3,'msg' => '第三則留言','likes' => 0]
                    ];
    public function index():void
    {
        debug('測試先行留言板開發');
        $this->showData($this->data);
        debug('---增加留言----');
        $this ->  addMessage('第四則留言');
        $this->showData($this->data);
        debug('---按讚----');
        $this -> data[1]['likes'] = $this -> addLikes(1);
        $this->showData($this->data);
        debug('---刪除一筆----');
        $this -> removeData(1);
        $this->showData($this->data);
        die();
    }

    public function showData(array $result):array
    {
        
        // $result = array();
        // debug($result);
        foreach ($result as $key => $value) {
            // debug($value);
            debug($value['msg']);           
            debug($value['likes']);           
        }
        return $result;
    }
    public function addMessage(string $msg):bool
    {
        $lastID = count($this->data);
        if($this -> msgValidation($msg)){
            array_push($this -> data ,['id' => $lastID , 'msg' => $msg , 'likes' => 0]);
            return true;
        }else{
            return false;
        }
    }
    public function msgValidation(string $msg):bool
    {
        if(strlen($msg)<=20 && strlen($msg)>=5){
            return true;
        }else{
            return false;
        }
    }
    public function addLikes(int $id):int
    {
        return $this -> data[$id]['likes']+1;
    }

    public function removeData(int $id):array
    {
        $result = array();
        unset($this -> data[$id]);
        return $result;
    }

}
