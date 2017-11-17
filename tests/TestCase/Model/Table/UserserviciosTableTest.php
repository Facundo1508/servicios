<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserserviciosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserserviciosTable Test Case
 */
class UserserviciosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserserviciosTable
     */
    public $Userservicios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userservicios',
        'app.users',
        'app.rols',
        'app.generos',
        'app.servicios',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Userservicios') ? [] : ['className' => UserserviciosTable::class];
        $this->Userservicios = TableRegistry::get('Userservicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userservicios);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
