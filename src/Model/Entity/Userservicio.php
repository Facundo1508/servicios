<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userservicio Entity
 *
 * @property string $user_id
 * @property string $servicio_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Servicio $servicio
 */
class Userservicio extends Entity
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
        'user_id' => true,
        'user' => true,
        'servicio' => true
    ];
}
