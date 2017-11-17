<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Userservicios Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ServiciosTable|\Cake\ORM\Association\BelongsTo $Servicios
 *
 * @method \App\Model\Entity\Userservicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Userservicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Userservicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Userservicio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Userservicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Userservicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Userservicio findOrCreate($search, callable $callback = null, $options = [])
 */
class UserserviciosTable extends Table
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

        $this->setTable('userservicios');
        $this->setDisplayField('servicio_id');
        $this->setPrimaryKey('servicio_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Servicios', [
            'foreignKey' => 'servicio_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['servicio_id'], 'Servicios'));

        return $rules;
    }
}
