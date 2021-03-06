<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Editar Calle'), ['action' => 'edit', $calle->id]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Calle'), ['action' => 'delete', $calle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calle->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Calles'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Calle'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Direcciones'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Editar Calle'), ['action' => 'edit', $calle->id]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Calle'), ['action' => 'delete', $calle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calle->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Calles'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Calle'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Direcciones'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($calle->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($calle->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($calle->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($calle->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($calle->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Direccions') ?></h3>
    </div>
    <?php if (!empty($calle->direccions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Provincia Id') ?></th>
                <th><?= __('Departamento Id') ?></th>
                <th><?= __('Distrito Id') ?></th>
                <th><?= __('Calle Id') ?></th>
                <th><?= __('Numero') ?></th>
                <th><?= __('Barrio') ?></th>
                <th><?= __('Manzana') ?></th>
                <th><?= __('Casa') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($calle->direccions as $direccions): ?>
                <tr>
                    <td><?= h($direccions->id) ?></td>
                    <td><?= h($direccions->provincia_id) ?></td>
                    <td><?= h($direccions->departamento_id) ?></td>
                    <td><?= h($direccions->distrito_id) ?></td>
                    <td><?= h($direccions->calle_id) ?></td>
                    <td><?= h($direccions->numero) ?></td>
                    <td><?= h($direccions->barrio) ?></td>
                    <td><?= h($direccions->manzana) ?></td>
                    <td><?= h($direccions->casa) ?></td>
                    <td><?= h($direccions->created) ?></td>
                    <td><?= h($direccions->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Direccions', 'action' => 'view', $direccions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Direccions', 'action' => 'edit', $direccions->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Direccions', 'action' => 'delete', $direccions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccions->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Direccions</p>
    <?php endif; ?>
</div>
