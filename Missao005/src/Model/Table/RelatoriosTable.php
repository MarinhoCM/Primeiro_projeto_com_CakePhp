<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Relatorios Model
 *
 * @property \App\Model\Table\VendedoresTable&\Cake\ORM\Association\BelongsTo $Vendedores
 * @property \App\Model\Table\VendasTable&\Cake\ORM\Association\HasMany $Vendas
 *
 * @method \App\Model\Entity\Relatorio newEmptyEntity()
 * @method \App\Model\Entity\Relatorio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Relatorio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Relatorio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Relatorio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Relatorio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Relatorio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Relatorio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relatorio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relatorio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Relatorio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Relatorio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Relatorio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RelatoriosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('relatorios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Vendedores', [
            'foreignKey' => 'vendedor_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Vendas', [
            'foreignKey' => 'relatorio_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->time('horario_venda')
            ->requirePresence('horario_venda', 'create')
            ->notEmptyTime('horario_venda');

        $validator
            ->numeric('valor_venda')
            ->requirePresence('valor_venda', 'create')
            ->notEmptyString('valor_venda');

        $validator
            ->integer('vendedor_id')
            ->notEmptyString('vendedor_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('vendedor_id', 'Vendedores'), ['errorField' => 'vendedor_id']);

        return $rules;
    }
}
