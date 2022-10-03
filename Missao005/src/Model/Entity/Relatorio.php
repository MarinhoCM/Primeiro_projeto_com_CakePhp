<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Relatorio Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $horario_venda
 * @property float $valor_venda
 * @property int $vendedor_id
 *
 * @property \App\Model\Entity\Vendedore $vendedore
 * @property \App\Model\Entity\Desconto $desconto
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Relatorio extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'horario_venda' => true,
        'valor_venda' => true,
        'vendedor_id' => true,
        'vendedore' => true,
        'desconto' => true,
        'vendas' => true,
    ];
}
