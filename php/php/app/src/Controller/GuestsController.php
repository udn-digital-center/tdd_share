<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Response;

class GuestsController extends AppController
{
    public function index():void
    {
        $this -> autoRender = false;
        debug('留言板');
        die();
    }
   
}
