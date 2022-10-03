<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelatoriosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelatoriosTable Test Case
 */
class RelatoriosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RelatoriosTable
     */
    protected $Relatorios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Relatorios',
        'app.Vendedores',
        'app.Descontos',
        'app.Vendas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Relatorios') ? [] : ['className' => RelatoriosTable::class];
        $this->Relatorios = $this->getTableLocator()->get('Relatorios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Relatorios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RelatoriosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RelatoriosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
