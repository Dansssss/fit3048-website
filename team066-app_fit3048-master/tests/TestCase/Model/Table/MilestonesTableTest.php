<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MilestonesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MilestonesTable Test Case
 */
class MilestonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MilestonesTable
     */
    protected $Milestones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Milestones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Milestones') ? [] : ['className' => MilestonesTable::class];
        $this->Milestones = $this->getTableLocator()->get('Milestones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Milestones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MilestonesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
