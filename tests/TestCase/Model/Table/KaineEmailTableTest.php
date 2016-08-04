<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KaineEmailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KaineEmailTable Test Case
 */
class KaineEmailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KaineEmailTable
     */
    public $KaineEmail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kaine_email'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KaineEmail') ? [] : ['className' => 'App\Model\Table\KaineEmailTable'];
        $this->KaineEmail = TableRegistry::get('KaineEmail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KaineEmail);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
