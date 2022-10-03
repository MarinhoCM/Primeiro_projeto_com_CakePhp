<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Frutas Model
 *
 * @property \App\Model\Table\AdministradoresTable&\Cake\ORM\Association\BelongsTo $Administradores
 * @property \App\Model\Table\ClassificacoesTable&\Cake\ORM\Association\BelongsTo $Classificacoes
 *
 * @method \App\Model\Entity\Fruta newEmptyEntity()
 * @method \App\Model\Entity\Fruta newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Fruta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fruta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fruta findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Fruta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fruta[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fruta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fruta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FrutasTable extends Table
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

        $this->setTable('frutas');
        $this->setDisplayField('nome_fruta');
        $this->setPrimaryKey('id');

        $this->belongsTo('Administradores', [
            'foreignKey' => 'administrador_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Classificacoes', [
            'foreignKey' => 'classificacao_id',
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
            ->scalar('nome_fruta')
            ->maxLength('nome_fruta', 50)
            ->requirePresence('nome_fruta', 'create')
            ->notEmptyString('nome_fruta');

        $validator
            ->integer('quantidade_disponivel')
            ->requirePresence('quantidade_disponivel', 'create')
            ->notEmptyString('quantidade_disponivel');

        $validator
            ->boolean('fresca')
            ->requirePresence('fresca', 'create')
            ->notEmptyString('fresca');

        $validator
            ->numeric('valor_fruta')
            ->requirePresence('valor_fruta', 'create')
            ->notEmptyString('valor_fruta');

        $validator
            ->integer('administrador_id')
            ->notEmptyString('administrador_id');

        $validator
            ->integer('classificacao_id')
            ->notEmptyString('classificacao_id');

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
        $rules->add($rules->existsIn('administrador_id', 'Administradores'), ['errorField' => 'administrador_id']);
        $rules->add($rules->existsIn('classificacao_id', 'Classificacoes'), ['errorField' => 'classificacao_id']);

        return $rules;
    }
}
