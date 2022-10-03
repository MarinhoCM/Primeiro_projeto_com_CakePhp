<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fruta Entity
 *
 * @property int $id
 * @property string $nome_fruta
 * @property int $quantidade_disponivel
 * @property bool $fresca
 * @property float $valor_fruta
 * @property int $administrador_id
 * @property int $classificacao_id
 *
 * @property \App\Model\Entity\Administradore $administradore
 * @property \App\Model\Entity\Classificaco $classificaco
 */
class Fruta extends Entity
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
        'nome_fruta' => true,
        'quantidade_disponivel' => true,
        'fresca' => true,
        'valor_fruta' => true,
        'administrador_id' => true,
        'classificacao_id' => true,
        'administradore' => true,
        'classificaco' => true,
    ];
}
