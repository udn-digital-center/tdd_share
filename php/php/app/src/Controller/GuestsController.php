<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Response;

class GuestsController extends AppController
{

    public $data = [[1,'第一則留言',0],[2,'第二則留言',0],[3,'第三則留言',0]];
    public function index():void
    {
        $this -> autoRender = false;
        debug('留言板');

        foreach ($this->data as $key => $value) {
            debug($value);
        }

        debug('新增一筆留言');
        
        array_push($this->data,[4,'第四則留言',0]);
        
        foreach ($this->data as $key => $value) {
            debug($value);
        }
        
        debug('給一筆資料按個讚');

        $this -> data[1][2] = 1;
        
        foreach ($this->data as $key => $value) {
            debug($value);
        }

        die();
    }
   
}
