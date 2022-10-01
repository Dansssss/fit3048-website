<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stage Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $budget
 * @property string|null $actual
 * @property bool|null $completed
 * @property string|null $percentage
 */
class Stage extends Entity
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
        'project_id' => true,
    ];
}
