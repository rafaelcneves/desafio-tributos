<div class="actions columns large-2 medium-3">
    <?= $this->render('../Layout/sidebar', false) ?>
</div>
<div class="productTypes form large-10 medium-9 columns">
    <?= $this->Form->create($productType); ?>
    <fieldset>
        <legend><?= __('Add Product Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('percentage');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
