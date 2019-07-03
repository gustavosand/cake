<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone $zone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Zones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="zones form large-9 medium-8 columns content">
    <?= $this->Form->create($zone) ?>
    <fieldset>
        <legend><?= __('Add Zone') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('status');
            echo $this->Form->control('quantity_dealers');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
