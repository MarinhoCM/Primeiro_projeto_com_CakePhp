<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Descontos Model
 *
 * @method \App\Model\Entity\Desconto newEmptyEntity()
 * @method \App\Model\Entity\Desconto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Desconto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Desconto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Desconto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Desconto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Desconto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Desconto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Desconto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Desconto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Desconto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Desconto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Desconto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DescontosTable extends Table
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

        $this->setTable('descontos');
        $this->setDisplayField('desconto');
        $this->setPrimaryKey('id');
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
            ->scalar('desconto')
            ->requirePresence('desconto', 'create')
            ->notEmptyString('desconto');

        return $validator;
    }
}
