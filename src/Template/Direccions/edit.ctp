<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direccion $direccion
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $direccion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista de Direcciones'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista Provincias'), ['controller' => 'Provincias', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Provincia'), ['controller' => 'Provincias', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Distritos'), ['controller' => 'Distritos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Distrito'), ['controller' => 'Distritos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Calles'), ['controller' => 'Calles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Calle'), ['controller' => 'Calles', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $direccion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista de Direcciones'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista Provincias'), ['controller' => 'Provincias', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Provincia'), ['controller' => 'Provincias', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista Distritos'), ['controller' => 'Distritos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Distrito'), ['controller' => 'Distritos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista Calles'), ['controller' => 'Calles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Calle'), ['controller' => 'Calles', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($direccion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Direccion']) ?></legend>
    <?php
    echo $this->Form->control('provincia_id', ['options' => $provincias]);
    echo $this->Form->control('departamento_id', ['options' => $departamentos]);
    echo $this->Form->control('distrito_id', ['options' => $distritos]);
    echo $this->Form->control('calle_id', ['options' => $calles]);
    echo $this->Form->control('numero');
    echo $this->Form->control('barrio');
    echo $this->Form->control('manzana');
    echo $this->Form->control('casa');
    ?>
</fieldset>
<?= $this->Form->button(__("Guardar")); ?>
<?= $this->Form->end() ?>
