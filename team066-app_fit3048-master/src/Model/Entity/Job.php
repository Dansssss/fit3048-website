<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $budget
 * @property string|null $actual
 * @property bool|null $completed
 * @property string|null $percentage
 * @property \Cake\I18n\FrozenDate|null $due_date
 * @property string $status
 * @property int $stage_id
 */
class Job extends Entity
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
        'name' => true,
        'description' => true,
        'budget' => true,
        'actual' => true,
        'completed' => true,
        'percentage' => false,
        'due_date' => true,
        'status' => true,
        'stage_id' => true,

    ];
}
