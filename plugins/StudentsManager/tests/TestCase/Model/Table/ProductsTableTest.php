<?php
declare(strict_types=1);

namespace StudentsManager\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use StudentsManager\Model\Table\ProductsTable;

/**
 * StudentsManager\Model\Table\ProductsTable Test Case
 */
class ProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \StudentsManager\Model\Table\ProductsTable
     */
    protected $Products;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'plugin.StudentsManager.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Products') ? [] : ['className' => ProductsTable::class];
        $this->Products = $this->getTableLocator()->get('Products', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Products);

        parent::tearDown();
    }
}
