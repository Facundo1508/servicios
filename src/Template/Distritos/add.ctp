<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distrito $distrito
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Lista de Distritos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Direcciones'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Lista de Distritos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Direcciones'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($distrito); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Distrito']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Agregar")); ?>
<?= $this->Form->end() ?>
