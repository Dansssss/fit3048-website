<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $name
 * @property string $client_name
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate|null $end_date
 * @property string|null $budget
 * @property string|null $actual
 * @property int|null $percentage
 *
 * @property \App\Model\Entity\ProjectUser[] $project_users
 */
class Project extends Entity
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
        'id' => true,
        'name' => true,
        'client_name' => true,
        'start_date' => true,
        'end_date' => true,
        'budget' => true,
        'actual' => true,
        'percentage' => false,
        'project_users' => true,
    ];
}
