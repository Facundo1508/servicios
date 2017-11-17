<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calle $calle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calles form large-9 medium-8 columns content">
    <?= $this->Form->create($calle) ?>
    <fieldset>
        <legend><?= __('Add Calle') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
