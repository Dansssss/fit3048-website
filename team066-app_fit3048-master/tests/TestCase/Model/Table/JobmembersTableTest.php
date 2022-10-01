<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobmembersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobmembersTable Test Case
 */
class JobmembersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobmembersTable
     */
    protected $Jobmembers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Jobmembers',
        'app.Jobs',
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
        $config = $this->getTableLocator()->exists('Jobmembers') ? [] : ['className' => JobmembersTable::class];
        $this->Jobmembers = $this->getTableLocator()->get('Jobmembers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Jobmembers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JobmembersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\JobmembersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
