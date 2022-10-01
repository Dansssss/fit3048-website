<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleUsersTable Test Case
 */
class RoleUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleUsersTable
     */
    protected $RoleUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RoleUsers',
        'app.Roles',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RoleUsers') ? [] : ['className' => RoleUsersTable::class];
        $this->RoleUsers = $this->getTableLocator()->get('RoleUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RoleUsers);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RoleUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
