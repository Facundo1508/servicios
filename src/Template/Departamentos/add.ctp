<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($departamento); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Departamento']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
