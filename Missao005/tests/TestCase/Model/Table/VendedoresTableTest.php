<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendedoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendedoresTable Test Case
 */
class VendedoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VendedoresTable
     */
    protected $Vendedores;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vendedores',
        'app.Frutas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vendedores') ? [] : ['className' => VendedoresTable::class];
        $this->Vendedores = $this->getTableLocator()->get('Vendedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vendedores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VendedoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VendedoresTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
