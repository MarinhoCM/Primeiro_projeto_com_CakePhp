<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $quantidade
 * @property int $relatorio_id
 * @property int $frutas_id
 * @property int $descontos_id
 *
 * @property \App\Model\Entity\Relatorio $relatorio
 * @property \App\Model\Entity\Fruta $fruta
 * @property \App\Model\Entity\Desconto $desconto
 */
class Venda extends Entity
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
        'quantidade' => true,
        'relatorio_id' => true,
        'frutas_id' => true,
        'descontos_id' => true,
        'relatorio' => true,
        'fruta' => true,
        'desconto' => true,
    ];
}
