<div class="actions columns large-2 medium-3">
    <?= $this->render('../Layout/sidebar', false) ?>
</div>
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product); ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('value');
            echo $this->Form->input('product_type_id', ['options' => $productTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
