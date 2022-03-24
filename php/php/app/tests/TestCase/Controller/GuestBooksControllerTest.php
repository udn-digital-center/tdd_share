<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\GuestBooksController;
use Cake\Core\Configure;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use Cake\ORM\TableRegistry;

use function PHPUnit\Framework\assertIsArray;
use function PHPUnit\Framework\assertTrue;


class GuestBooksControllerTest extends TestCase
{
    use IntegrationTestTrait;

    public $fixtures = ['app.Gbooks'];
    public $testGbooks;

    public function setUp():void
    {
        parent::setUp();
        $gbooks = TableRegistry::getTableLocator()->get('Gbooks');
        $query = $gbooks->find('All')->toArray();
        $this -> testGbooks = $query;
    }

    public function testShowData():void
    {
        $gbook = new GuestBooksController();
        $data = $gbook -> showData($this->testGbooks);
        // debug($data);
        $this -> assertIsArray($data);
    }

    public function testAddMessage_true()
    {
        $gbook = new GuestBooksController();
        $data = $gbook -> addMessage('這第六則留言');
        $this -> assertTrue($data);

    }
    public function testAddMessage_false()
    {
        $gbook = new GuestBooksController();
        $data = $gbook -> addMessage('這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
        $this -> assertFalse($data);
    }

    public function testMsgValidation_true()
    {
        $gbook = new GuestBooksController();
        $data = $gbook -> msgValidation('這第六則留言');
        $this -> assertTrue($data);
    }

    public function testMsgValidation_false()
    {
        $gbook = new GuestBooksController();
        $data = $gbook -> msgValidation('這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言這是一則留言xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
        $this -> assertFalse($data);
    }

    public function testAddLikes()
    {
        $gbook = new GuestBooksController();
        $gbook -> data = $this->testGbooks;
        $data = $gbook -> addLikes(1);
        $this -> assertEquals(4,$data);

    }

    public function testRemoveData()
    {
        $gbook = new GuestBooksController();
        $gbook -> data = $this->testGbooks;
        $origin = count($gbook -> data);
        $gbook -> removeData(1);
        $result = count($gbook -> data);
        $this -> assertEquals($origin-1 ,$result);
        $this -> assertIsArray($gbook -> data);
    }


   
}
