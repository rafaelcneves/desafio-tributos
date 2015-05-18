<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsSale Entity.
 */
class ProductsSale extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'product_id' => true,
        'sale_id' => true,
        'amount' => true,
        'product' => true,
        'sale' => true,
    ];
}
