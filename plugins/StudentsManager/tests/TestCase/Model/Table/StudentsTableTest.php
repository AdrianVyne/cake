<?php
declare(strict_types=1);

namespace StudentsManager\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use StudentsManager\Model\Table\StudentsTable;

/**
 * StudentsManager\Model\Table\StudentsTable Test Case
 */
class StudentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \StudentsManager\Model\Table\StudentsTable
     */
    protected $Students;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'plugin.StudentsManager.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Students') ? [] : ['className' => StudentsTable::class];
        $this->Students = $this->getTableLocator()->get('Students', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Students);

        parent::tearDown();
    }
}
