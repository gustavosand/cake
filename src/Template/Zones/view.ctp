<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone $zone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Zone'), ['action' => 'edit', $zone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Zone'), ['action' => 'delete', $zone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Zones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zone'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="zones view large-9 medium-8 columns content">
    <h3><?= h($zone->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($zone->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($zone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity Dealers') ?></th>
            <td><?= $this->Number->format($zone->quantity_dealers) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $zone->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
