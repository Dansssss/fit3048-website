<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subtask Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $budget
 * @property string|null $actual
 * @property bool|null $completed
 * @property int|null $percentage
 * @property \Cake\I18n\FrozenDate|null $due_date
 * @property string $status

 */
class Subtask extends Entity
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
        'job_id' => true,
    ];
}
