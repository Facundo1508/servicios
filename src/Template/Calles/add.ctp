<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calle $calle
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Lista de Calles'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Direcciones'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Lista de Calles'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($calle); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Calle']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Agregar")); ?>
<?= $this->Form->end() ?>
