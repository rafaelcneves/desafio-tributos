<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductType Entity.
 */
class ProductType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'percentage' => true,
        'products' => true,
    ];
}
