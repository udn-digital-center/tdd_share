<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;
use App\Model\Service\IdService;

class GbooksFixture extends TestFixture
{
     // Optional. Set this property to load fixtures to a different test datasource
     public $connection = 'test';

     public function init():void
    {
        
        $this->records = [
            [
                'id' => 1,
                'msg' => '這是第一則留言',
                'likes' => 2
            ],
            [
                'id' => 2,
                'msg' => '這是第二則留言',
                'likes' => 3
            ],
            [
                'id' => 3,
                'msg' => '這是第三則留言',
                'likes' => 1
            ],
            [
                'id' => 4,
                'msg' => '這是第四則留言',
                'likes' => 8
            ],
            [
                'id' => 5,
                'msg' => '這是第五則留言',
                'likes' => 1
            ],
            
            
        ];

        parent::init();
    }
}
