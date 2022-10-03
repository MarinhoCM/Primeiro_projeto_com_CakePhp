<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DescontosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DescontosTable Test Case
 */
class DescontosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DescontosTable
     */
    protected $Descontos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Descontos',
        'app.Relatorios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Descontos') ? [] : ['className' => DescontosTable::class];
        $this->Descontos = $this->getTableLocator()->get('Descontos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Descontos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DescontosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
