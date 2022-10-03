<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedores Model
 *
 * @property \App\Model\Table\FrutasTable&\Cake\ORM\Association\BelongsTo $Frutas
 *
 * @method \App\Model\Entity\Vendedore newEmptyEntity()
 * @method \App\Model\Entity\Vendedore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vendedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendedoresTable extends Table
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

        $this->setTable('vendedores');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->belongsTo('Frutas', [
            'foreignKey' => 'frutas_id',
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
            ->scalar('nome')
            ->maxLength('nome', 200)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('password')
            ->maxLength('password', 8)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->integer('frutas_id')
            ->notEmptyString('frutas_id');

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
        $rules->add($rules->existsIn('frutas_id', 'Frutas'), ['errorField' => 'frutas_id']);

        return $rules;
    }
}
