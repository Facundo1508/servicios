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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $departamento->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista de Departamentos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Direcciones'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $departamento->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($departamento); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Departamento']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Guardar")); ?>
<?= $this->Form->end() ?>
