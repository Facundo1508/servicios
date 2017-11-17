<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $apellido
 * @property int $telefono
 * @property string $email
 * @property string $username
 * @property string $password
 * @property bool $activo
 * @property string $rol_id
 * @property string $genero_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Rol $rol
 * @property \App\Model\Entity\Genero $genero
 * @property \App\Model\Entity\Userservicio[] $userservicios
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'apellido' => true,
        'telefono' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'activo' => true,
        'rol_id' => true,
        'genero_id' => true,
        'created' => true,
        'modified' => true,
        'rol' => true,
        'genero' => true,
        'userservicios' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
