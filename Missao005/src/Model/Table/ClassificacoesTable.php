<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classificacoes Model
 *
 * @method \App\Model\Entity\Classificaco newEmptyEntity()
 * @method \App\Model\Entity\Classificaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classificaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Classificaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClassificacoesTable extends Table
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

        $this->setTable('classificacoes');
        $this->setDisplayField('classificacao');
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
            ->scalar('classificacao')
            ->maxLength('classificacao', 200)
            ->requirePresence('classificacao', 'create')
            ->notEmptyString('classificacao');

        return $validator;
    }
}
