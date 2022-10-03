<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendasFixture
 */
class VendasFixture extends TestFixture
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
                'quantidade' => 1,
                'relatorio_id' => 1,
                'frutas_id' => 1,
                'descontos_id' => 1,
            ],
        ];
        parent::init();
    }
}
