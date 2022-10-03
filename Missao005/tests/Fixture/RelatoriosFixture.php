<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RelatoriosFixture
 */
class RelatoriosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'horario_venda' => '23:25:46',
                'valor_venda' => 1,
                'vendedor_id' => 1,
            ],
        ];
        parent::init();
    }
}
