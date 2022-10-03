<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FrutasFixture
 */
class FrutasFixture extends TestFixture
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
                'nome_fruta' => 'Lorem ipsum dolor sit amet',
                'quantidade_disponivel' => 1,
                'fresca' => 1,
                'valor_fruta' => 1,
                'administrador_id' => 1,
                'classificacao_id' => 1,
            ],
        ];
        parent::init();
    }
}
