<div class="actions columns large-2 medium-3">
    <?= $this->render('../Layout/sidebar', false) ?>
</div>
<div class="productTypes form large-10 medium-9 columns">
    <?= $this->Form->create($productType); ?>
    <fieldset>
        <legend><?= __('Edit Product Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('percentage');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $productType->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $productType->id)]
        )
    ?>
</div>
