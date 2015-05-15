<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity.
 */
class Sale extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'products' => true,
    ];
}
