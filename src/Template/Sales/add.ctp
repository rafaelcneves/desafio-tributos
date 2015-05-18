<div class="actions columns large-2 medium-3">
    <?= $this->render('../Layout/sidebar', false) ?>
</div>
<div class="sales form large-10 medium-9 columns">
    <?= $this->Form->create($sale); ?>
    <fieldset>
        <legend><?= __('Add Sale') ?></legend>
        <?php
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
