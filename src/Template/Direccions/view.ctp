<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Editar Direccion'), ['action' => 'edit', $direccion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Direccion'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Direcciones'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Direccion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Provincias'), ['controller' => 'Provincias', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Provincia'), ['controller' => 'Provincias', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Distritos'), ['controller' => 'Distritos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Distrito'), ['controller' => 'Distritos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Calles'), ['controller' => 'Calles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Calle'), ['controller' => 'Calles', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Editar Direccion'), ['action' => 'edit', $direccion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Direccion'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Direcciones'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Direccion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Provincias'), ['controller' => 'Provincias', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Provincia'), ['controller' => 'Provincias', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Distritos'), ['controller' => 'Distritos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Distrito'), ['controller' => 'Distritos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Calles'), ['controller' => 'Calles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Calle'), ['controller' => 'Calles', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($direccion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($direccion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Provincia') ?></td>
            <td><?= $direccion->has('provincia') ? $this->Html->link($direccion->provincia->id, ['controller' => 'Provincias', 'action' => 'view', $direccion->provincia->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Departamento') ?></td>
            <td><?= $direccion->has('departamento') ? $this->Html->link($direccion->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $direccion->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Distrito') ?></td>
            <td><?= $direccion->has('distrito') ? $this->Html->link($direccion->distrito->id, ['controller' => 'Distritos', 'action' => 'view', $direccion->distrito->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Calle') ?></td>
            <td><?= $direccion->has('calle') ? $this->Html->link($direccion->calle->id, ['controller' => 'Calles', 'action' => 'view', $direccion->calle->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Barrio') ?></td>
            <td><?= h($direccion->barrio) ?></td>
        </tr>
        <tr>
            <td><?= __('Manzana') ?></td>
            <td><?= h($direccion->manzana) ?></td>
        </tr>
        <tr>
            <td><?= __('Casa') ?></td>
            <td><?= h($direccion->casa) ?></td>
        </tr>
        <tr>
            <td><?= __('Numero') ?></td>
            <td><?= $this->Number->format($direccion->numero) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($direccion->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($direccion->modified) ?></td>
        </tr>
    </table>
</div>

