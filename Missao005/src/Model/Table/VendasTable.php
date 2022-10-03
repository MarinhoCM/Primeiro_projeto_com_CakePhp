<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendas Model
 *
 * @property \App\Model\Table\RelatoriosTable&\Cake\ORM\Association\BelongsTo $Relatorios
 * @property \App\Model\Table\FrutasTable&\Cake\ORM\Association\BelongsTo $Frutas
 * @property \App\Model\Table\DescontosTable&\Cake\ORM\Association\BelongsTo $Descontos
 *
 * @method \App\Model\Entity\Venda newEmptyEntity()
 * @method \App\Model\Entity\Venda newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venda findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Venda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendasTable extends Table
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

        $this->setTable('vendas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Relatorios', [
            'foreignKey' => 'relatorio_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Frutas', [
            'foreignKey' => 'frutas_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Descontos', [
            'foreignKey' => 'descontos_id',
            'joinType' => 'INNER',
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
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->integer('relatorio_id')
            ->notEmptyString('relatorio_id');

        $validator
            ->integer('frutas_id')
            ->notEmptyString('frutas_id');

        $validator
            ->integer('descontos_id')
            ->notEmptyString('descontos_id');

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
        $rules->add($rules->existsIn('relatorio_id', 'Relatorios'), ['errorField' => 'relatorio_id']);
        $rules->add($rules->existsIn('frutas_id', 'Frutas'), ['errorField' => 'frutas_id']);
        $rules->add($rules->existsIn('descontos_id', 'Descontos'), ['errorField' => 'descontos_id']);

        return $rules;
    }
}
