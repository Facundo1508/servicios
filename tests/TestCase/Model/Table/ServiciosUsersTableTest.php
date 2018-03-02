<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiciosUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiciosUsersTable Test Case
 */
class ServiciosUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiciosUsersTable
     */
    public $ServiciosUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.servicios_users',
        'app.users',
        'app.rols',
        'app.generos',
        'app.userservicios',
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
        $config = TableRegistry::exists('ServiciosUsers') ? [] : ['className' => ServiciosUsersTable::class];
        $this->ServiciosUsers = TableRegistry::get('ServiciosUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiciosUsers);

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
