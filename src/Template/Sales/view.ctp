<div class="actions columns large-2 medium-3">
    <?= $this->render('../Layout/sidebar', false) ?>
</div>
<div class="sales view large-10 medium-9 columns">
    <h2><?= h($sale->created) ?></h2>
    <div class="row">
        <!-- <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($sale->id) ?></p>
        </div> -->
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($sale->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($sale->modified) ?></p>
        </div>
    </div>
    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->id]) ?>
    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id)]) ?>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($sale->products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Name') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Product Type Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($sale->products as $products): ?>
        <tr>
            <td><?= h($products->name) ?></td>
            <td><?= $this->Number->currency($products->value, "BRL") ?></td>
            <td><?= $products->has('product_type') ? $this->Html->link($products->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $products->product_type->id]) : '' ?></td>
            <td><?= h($products->created) ?></td>
            <td><?= h($products->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
