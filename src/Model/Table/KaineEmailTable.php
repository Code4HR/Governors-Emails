<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KaineEmail Model
 *
 * @method \App\Model\Entity\KaineEmail get($primaryKey, $options = [])
 * @method \App\Model\Entity\KaineEmail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KaineEmail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KaineEmail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KaineEmail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KaineEmail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KaineEmail findOrCreate($search, callable $callback = null)
 */
class KaineEmailTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('kaine_email');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('file');

        $validator
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->allowEmpty('subject');

        $validator
            ->allowEmpty('senderName');

        $validator
            ->allowEmpty('recipientName');

        $validator
            ->allowEmpty('ccName');

        $validator
            ->allowEmpty('body');

        return $validator;
    }
}
